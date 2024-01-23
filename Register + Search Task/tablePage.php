<The search part of the task>

<html>
    <body>
<form method="post" action="">
    <label for="category">Category: </label>
                        <select name="selCat" id="Cat">
                            <option value="Please select">Please select</option>
                            <option value="food">Food</option>
                            <option value="education">Education</option>
                            <option value="decoration">Decoration</option>
                        </select>

                        <input type="submit" name="catGo" value="Go" />

    <br /><label for="">Search: </label>
    <input type="text" name="txtSearch" value="<?php
    if(isset($_POST['txtSearch'])){
        echo $_POST['txtSearch'];}?>" />

    <input type="submit" name="searchGo" value="Go" />

    <br /><label for="">Price: </label>
    <input type="radio" id="low" name="price" value="Low">
    <label for="Low">Low</label>
    <input type="radio" id="medium" name="price" value="Medium">
    <label for="Medium">Medium</label>
    <input type="radio" id="high" name="price" value="High">
    <label for="High">High</label>

    <input type="submit" name="radioGo" value="Go" />

</form>
    </body>    
</html>

<?php

include 'init.php';

echo '<br/>';
echo '<style>';
echo 'table, th, td {
    width: 30%;    
    border: 1px solid black;
}';
echo '</style>';

// Processing the radio buttons.

if(isset($_POST['radioGo'])){
    if($_POST['price'] == "Medium"){
        $num1 = 10;
        $num2 = 30;
    }
    if($_POST['price'] == "High"){
        $num1 = 31;
        $num2 = 100;
    }
    if($_POST['price'] == "Low"){
        $num1 = 0;
        $num2 = 9;
    }

    $query = "SELECT * FROM Items WHERE Price BETWEEN  '$num1' AND '$num2'";
    $result = mysqli_query($connection, $query);
}

// Processing the search bar.

else if(!Empty($_POST['txtSearch']) && isset($_POST['searchGo'])){
    $name = $_POST['txtSearch'];

    $query = "SELECT * FROM Items WHERE Name='$name'";
    $result = mysqli_query($connection, $query);
}
// Processing the Category search.

else if(isset($_POST['catGo']) && $_POST['selCat'] !== "Please select"){
    $cat = $_POST['selCat'];

    $query = "SELECT * FROM Items WHERE Category='$cat'";
    $result = mysqli_query($connection, $query);

}
else{
    $query = "SELECT * FROM Items";
    $result = mysqli_query($connection, $query);
}

echo '<table>';
echo '<tr>';
echo '<th>Name</th>';
echo '<th>Price</th>';
echo '<th>Image</th>';
echo '</tr>';
echo '<tr>';

while($row=mysqli_fetch_assoc($result)){

    echo '<td>'.$row['Name'].'</td>';
    echo '<td>'.$row['Price'].'</td>';
    echo '<td><img src="./Images/'.$row['Image'].'" style="width:100px;height:100px"/></td>';
    echo '</tr>';
}

echo '</table>';


?>

<a href="logout.php">Logout</a>
