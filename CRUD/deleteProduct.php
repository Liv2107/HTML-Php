<?php

include 'connection.php';

$id = $_GET['id'];

$query = "DELETE FROM Products WHERE ProductID ='$id'";

mysqli_query($connection, $query);


if(mysqli_affected_rows($connection) > 0){

    header('location:crud.php');
}
else{
    echo "Error in query: $query. " . mysqli_error($connection);
    exit();
}

?>
