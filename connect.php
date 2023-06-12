<?php
$hostname  = 'database-1.cley81gyecqk.us-east-2.rds.amazonaws.com';
$username = 'admin';
$password='123456789';
$dbname = 'admin';
$connect =  mysqli_connect($hostname , $username , $password ,$dbname) or die("Error Connecting");
?>
