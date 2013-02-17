<?php 
require_once('../php/autoload.php');

$con=new sql();

$user=new user($con);

if($user->register($_GET["user"], $_GET["pass"])) echo 'Welcome '.$_GET["user"];
else echo "register denied";



//echo '<br/>';
//var_dump($_GET);
//echo '<br/>';











?> 
