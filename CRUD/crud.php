<?php
include 'connection.php';
include 'errors.php';
?>

<!DOCTYPE html>
<html>

<header>
    <h1>Manage Products</h1>
</header>

<body>

    <form method="post" action="insertProduct.php">
        <fieldset>
            <legend>Enter New Product Details</legend>

                <label>Product Name: </label>
                <br />
                <input type='text' name='txtName'/>
                <br /><br />
                <label>Price: </label>
                <br />
                <input type='text' name='txtPrice'/>
                <br /><br />
                <label>Image Filename: </label>
                <br />
                <input type='text' name='txtImage'/>
                <br /><br />
                
                <input type="submit" value="Submit" name="subProd" />
                <input type="reset" value="Clear" />
        </fieldset>
    </form>

    <?php
        include 'displayProducts.php';
    ?>
</body>

<a href="../watIndex.html">Home</a>

</html>
