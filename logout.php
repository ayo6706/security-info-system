<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["name"]);
unset($_SESSION["fname"]);
unset($_SESSION["lname"]);
unset($_SESSION["phone"]);
unset($_SESSION["badgeNo"]);
unset($_SESSION["password"]);
unset($_SESSION["Address"]);
unset($_SESSION["photo"]);
unset($_SESSION["loggedIn"]);
header("Location:index.php");
?>