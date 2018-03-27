<?php
session_start();
require_once("function.php");
$user = new LoginRegister()	;

$user->logoutuser();
header('LOcation:login.php');
exit();
?>