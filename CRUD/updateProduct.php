<?php

include 'errors.php';
include 'connection.php';

if(isset($_POST['subProd'])){
    $name = $_POST['txtName'];
    $price = $_POST['txtPrice'];
    $image = $_POST['txtImage'];

    $id = $_POST['txtID'];

    $query ="UPDATE Products
            SET 
                ProductName = '$name', 
                ProductPrice = '$price' ,
                ProductImageName = '$image'
            WHERE 
                ProductID = '$id'";

    mysqli_query($connection, $query);
	
    header('location:crud.php');


}


?>
