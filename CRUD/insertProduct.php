<?php

include 'errors.php';
include 'connection.php';


if (isset($_POST['subProd'])){

	$name=$_POST['txtName'];
	$price=$_POST['txtPrice'];
    $image=$_POST['txtImage'];
			
	$query="INSERT INTO Products
	(ProductName, ProductPrice, ProductImageName)
	VALUES
	('$name','$price', '$image')";
	
	mysqli_query($connection, $query);
	
	header('location:crud.php');
	
}
