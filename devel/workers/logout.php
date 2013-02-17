<?php 
require_once('../php/autoload.php');

$con = new sql;
$s_handle=new session($con);
if($s_handle->check()) $s_handle->remove();
setcookie("session", 'logged_out',1,'/');


?> 
