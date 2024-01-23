<?php

include 'init.php';


if(isset($_POST['subLogin'])){
     
    $user = $_POST['txtUser'];
    $pass = $_POST['txtPass'];    

    $query = "SELECT * FROM User WHERE Username='$user' AND Password='$pass'";
    $result = mysqli_query($connection, $query);

    if ($row = mysqli_fetch_assoc($result)) {

        $_SESSION['user'] = $user;
        
        header("location:sessions.php");
    } 
    else {
        $_SESSION['error']= 'User not recognised';
        header ('location: sessions.php');
    } 


    
}




?>
