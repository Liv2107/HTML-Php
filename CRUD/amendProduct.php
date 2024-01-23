<?php
include 'connection.php';
include 'errors.php';

$id = $_GET['id'];

$query = "SELECT * FROM Products WHERE ProductID = '$id'";

$result = mysqli_query($connection, $query);

$row = mysqli_fetch_assoc($result);

//Print_r($row);
//exit();

?>

<!DOCTYPE html>
<html>

<body>

    <form method="post" action="updateProduct.php">
        <fieldset>
            <legend>Enter Product Details</legend>

                <label>ID: </label>
                <input type="hidden" name="txtID" value="<?php echo $row['ProductID'];?>"/>
                <label>Product Name: </label>
                <br />
                <input type='text' name='txtName' value="<?php echo $row['ProductName'];?>"/>
                <br /><br />
                <label>Price: </label>
                <br />
                <input type='text' name='txtPrice' value="<?php echo $row['ProductPrice'];?>"/>
                <br /><br />
                <label>Image Filename: </label>
                <br />
                <input type='text' name='txtImage' value="<?php echo $row['ProductImageName'];?>"/>
                <br /><br />
                
                <input type="submit" value="Submit" name="subProd" />
                <input type="reset" value="Clear" />

                <input type="hidden" name= "hideProductID" value="<?php $id ?>">           
        </fieldset>
    </form>

</body>

</html>
