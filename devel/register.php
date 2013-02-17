<?php
require_once("php/autoload.php");
html::head("Register");
html::menus("Welcome to the registration page");
?>

<form name="input" action="workers/register.php" method="get">
      <p>Username <input class="oblig" type="text" name="user" autofocus="autofocus"/><br/>
      Password <input class="oblig" type="password" name="pass" />
      <input type="submit" value="Submit" />
     </p>
     
   </form>

<?php
html::footer();
?>