<?php
session_start();
if(!isset($_SESSION["username"]) AND !empty($_POST)){
header("Location: login.php");
exit(); }
?>