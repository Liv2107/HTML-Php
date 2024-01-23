<?php

include 'connection.php';

echo '<br/>';
echo '<style>';
echo 'table, th, td {
    width: 30%;    
    border: 1px solid black;
}';
echo '</style>';

$query="SELECT * FROM Products";

$result=mysqli_query($connection, $query);

    echo '<table>';
    echo '<tr>';
    echo '<th>Name</th>';
    echo '<th>Price</th>';
    echo '<th>Image</th>';
    echo '<th>Amend</th>';
    echo '<th>Delete</th>';
    echo '</tr>';
    echo '<tr>';

while($row=mysqli_fetch_assoc($result)){

    
    echo '<td>'.$row['ProductName'].'</td>';
    echo '<td>'.$row['ProductPrice'].'</td>';
    
    echo '<td><img src="./images/'.$row['ProductImageName'].'" style="width:100px;height:100px"/></td>';
    echo '<td><a href="amendProduct.php?id='. $row['ProductID'].'">Amend</a></td>';
    echo '<td><a href="deleteProduct.php?id='. $row['ProductID'].'">Delete</a></td>';

    echo '<td>'.$row['ProductID'].'</td>';
    echo '</tr>';

}

    
    echo '</table>';

?>
