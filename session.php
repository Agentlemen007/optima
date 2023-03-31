<?php
session_start();
$_SESSION["username"]="vinay";
echo $_SESSION["username"];
session_unset();
echo $_SESSION["username"];
echo $_SESSION["username"];
echo $_SESSION["username"];

?>