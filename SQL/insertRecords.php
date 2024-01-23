<?php

include 'connection.php'; // includes another files contents.

// Store variables.

$name = $_POST['txtName'];
$surname = $_POST['txtSurname'];
$email = $_POST['txtEmail'];
$password = $_POST['txtPass'];
$gender = $_POST['selGender'];
$age = $_POST['txtAge'];


$query = "INSERT into Customer
            (FirstName, LastName, Email, Password, Gender, Age)
        VALUES
            ('$name', '$surname', '$email', '$password', '$gender', '$age')";

// echo $query;
// exit();

mysqli_query($conn, $query);    //run $query

header('location:my.php');


		
?>
