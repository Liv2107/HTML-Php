<?php

$hostname = 'stu-db.aet.leedsbeckett.ac.uk'; 
$username = 'c3641676';
$password = 'MyDB79006068';  // the password found on the W: drive
$databaseName = 'c3641676'; //the name of the db you are using on phpMyAdmin
$connection = mysqli_connect($hostname, $username, $password, $databaseName) or exit("Unable to connect to database!");

session_start();

?>
