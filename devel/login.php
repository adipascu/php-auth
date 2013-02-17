<?php
require_once("php/autoload.php");

html::head("Login");
html::menus("Welcome to the login page");
?>

<form name="input" action="workers/login.php" method="get">
      <p>Username <input class="oblig" type="text" name="user" autofocus="autofocus"/><br/>
      Password <input class="oblig" type="password" name="pass" />
      <input type="submit" value="Submit" />
     </p>
     
   </form>

<?php
html::footer();

?>
