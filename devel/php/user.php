<?php
//require_once("php/autoload.php");
class user
{
    private $sql;
    function __construct($con) 
    {
        $this->sql=&$con;        
    }
    private function check_data(&$user,&$pass)
    {
        if(!isset($user)||!strlen($user)) return 0;     //die("missing username");
        if(!isset($pass)||!strlen($pass)) return 0;     //die("missing password");
        if(strlen($user)>30) return 0;                  //die("username more than 30 ascii");
        
        return 1;
    }
    function register($user,$pass)
    {
        
        if(!$this->check_data($user, $pass)) die("bad input");
        
        $salt1=mcrypt_create_iv(16, MCRYPT_DEV_URANDOM);
        $salt2=mcrypt_create_iv(16, MCRYPT_DEV_URANDOM);
        $pass=$salt1. $pass . $salt2;
  
        
        
        
        
        $pass=hash("sha256",$pass,true);
        $pass=$this->sql->escape($pass);
        $user=$this->sql->escape($user);
        
        
        $salt_composed= $this->sql->escape($salt1.$salt2);
        
        $this->sql->query('INSERT INTO user_list (user,pass_hash,salt) VALUES (' . $user .','. $pass.',' .$salt_composed. ')');
        if($this->sql->query_failed) return 0;
        else return 1;
        

    }
    
    
    
    
    function login($user,$pass)
    {
        if(!$this->check_data($user, $pass)) die("bad input");

       
        $user=$this->sql->escape($user);
        
        $result=$this->sql->query('SELECT id,pass_hash,salt FROM user_list WHERE user=' . $user );
        if($this->sql->query_failed)    die(" query error");
        if($result->num_rows > 1) die();//implenet hacker protection
        if(!$result->num_rows) return 0;//no such user
           
        $row=$result->fetch_object();
        $result->close();
        
        $salt1= substr($row->salt,0,16);
        $salt2= substr($row->salt,16);
        
        $pass=hash("sha256",$salt1. $pass . $salt2 ,true);
        
        if($pass===$row->pass_hash) return (int)$row->id;
        else return false;
        
        
    }
}














?>