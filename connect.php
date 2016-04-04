<?php
session_start(); 
$host="localhost";
$username="root";
$password="root";
$database="henn";
$connect=mysql_connect($host,$username,$password);
mysql_select_db($database,$connect) or die("Sorry for you inconivinve");

?>
