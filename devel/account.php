<?php
require_once("php/autoload.php");
html::head("Register");
html::menus("Welcome to the registration page");


$con = new sql;
$s_handle=new session($con);
$id=$s_handle->check();
echo 'ID is '.$id;
?>



<?php html::footer()?>
