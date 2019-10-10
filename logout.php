<?php 
require_once("functions/autoload.php");

session_destroy();
setcookie('email', '', time() - 1);
header('location: home.php');

?>