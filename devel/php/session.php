<?php
class session
{
    private $sql;
    function __construct($con) 
    {
        $this->sql=&$con;
    }
    
    function activate($id,$time=3600,$name='')
    {        
        if(!isset($time)) $time=3600;
        $session=mcrypt_create_iv(32, MCRYPT_DEV_URANDOM);
        $ip=$_SERVER['REMOTE_ADDR'];        
        $ipv6=(strpos($ip,'.')===false);
        if($ipv6) $ipv6=1;
        else $ipv6=0;		
        $ip=inet_pton($ip);
		
		
        $ip=str_pad($ip,16,"\x00");
        $con=&$this->sql;
        $con->query('INSERT INTO user_active (id,session,ip,ipv6,expire,name)
    VALUES (
    '.$id.', '.$con->escape($session). ','.$con->escape($ip).','.$ipv6.', FROM_UNIXTIME(UNIX_TIMESTAMP()+'.$time.'),' .$con->escape($name).')');
        
        if($con->query_failed) return false;
        else return $session;
    }
    
    function check($session = null)
    {
        if(!isset($session)) $session=$_COOKIE['session'];
        $ip=$_SERVER['REMOTE_ADDR'];
        $ipv6=(strpos($ip,'.')===false);
        if($ipv6) $ipv6=1;
        else $ipv6=0;
        $ip=inet_pton($ip);  
        $ip=str_pad($ip,16,"\x00");
        
        $con=&$this->sql;
        
        $result=$con->query('SELECT id FROM user_active WHERE session='.$con->escape($session). ' AND ip='.$con->escape($ip).' AND ipv6='.$ipv6 . ' AND expire > NOW()');
        if($result->num_rows>0) return (int)$result->fetch_object()->id;
        else return false;
        
    }
    function remove($session)
    {
        
        if(!isset($session)) $session=$_COOKIE['session'];
                
        $con=&$this->sql;
        
        $con->query('DELETE FROM user_active WHERE session ='. $con->escape($session));
        return (!$con->query_failed);
        
    }
            //check
            //remove
}
	//TODO remove activation no hash only ip
        //TODO privileges
        //query to kill old sessions
//DELETE from user_active where expire < now();
//TODO persist if wanted while browsing
?>