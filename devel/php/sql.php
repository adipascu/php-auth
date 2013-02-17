<?php

//require_once("php/autoload.php");	 
class sql
{
	
//	private $host="192.168.1.14";
//	private $db="epb_db";
//	private $user="root";
//	private $pass="alpine";
                
	private $host="localhost";
	private $db="epb_db";
	private $user="root";
	private $pass="alpine";            
        
	private $con;
        public $query_failed;
	function __construct()
	{	
	
		$this->con = new mysqli($this->host,$this->user,$this->pass,$this->db);
	
		if($this->con->connect_error)
		{
			jLog::error("sql fail". $this->con->connect_error);
			die("Error, this is a bad one");
		}	
                $this->query_failed=0;
	}
	
	function query($str)
	{
                //jLog::log($str);
                $result= $this->con->query($str);
                
		if(!$result) 
                {
                    //jLog::warn("query failed " . $this->con->error);
                    $this->query_failed=1;
                }
		else
                {
                    //jLog::log("query executed");
                    $this->query_failed=0;
                    return $result;
                }
                
	}
	
	function __destruct()
	{
            if($this->con)
            {
                $this->con->close();
                jLog::Log("Disconnected from SQL ");
            }
	}
	
	function escape($str)
	{
            if (!isset($str)) return 'NULL';                
            if (get_magic_quotes_gpc())
            {
                die('magic qutes are not supported');
                    //$str = stripslashes($str);
            }
            if (!is_numeric($str)) //if not numeric add single quotes
            {
                    $str = "'" . $this->con->real_escape_string($str) . "'";
            }                
            return $str;
	}
	
}














?>
