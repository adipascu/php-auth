<?php
require_once("autoload.php");
class html 
{
    static function doctype()
	{
        
	}
        static function head($title)
	{
            echo 
            '<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="ccs/style.css" rel="stylesheet" type="text/css" />
<title>epb 0.1 - '.$title.'</title>
</head>';  
	}
        static function menus($title)
        {
            echo '<div id="title">
   <h1>'.$title.'</h1>
</div>

Logged in as: '. 'sess'.'




<div id="container">
<div id="menu">
  <ul style="list-style:inherit;">
    <li onClick=""="func1()">123</li>
    <li><a href="register.php">Register</a></li>
    <li><a href="login.php">Login</a></li>
    <li><a href="account.php">My Account</a></li>
  </ul>
  </div>
  <div id="article">';
        }
        static function footer()
        {
            echo '</div>
  <p>&nbsp;</p>
</div>

 <div id="footer">
   <div>Adi Pascu <script> </script></div>
</div>';
        }
	
}

?>
