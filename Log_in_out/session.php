<!-- This file will set the session -->

<?php

session_start();
$_SESSION["username"] = "your_username";
echo $_SESSION["username"];

session_unset();
echo $_SESSION["username"];

?>
