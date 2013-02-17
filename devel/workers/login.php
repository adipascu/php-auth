<?php 
require_once('../php/autoload.php');
$con=new sql();
$user=new user($con);
$id=$user->login($_GET["user"], $_GET["pass"]);

if($id)
{    
    $s_handle=new session($con);
    $session=$s_handle->activate($id);
    if($session) setcookie("session", $session, time()+3600,'/');
    
    echo 'Welcome '.$_GET["user"];
}
else echo "login denied";

?>