<?php

    include 'connection.php';

    echo '<h2>Select ALL from the Customer Table</h2>';

    $query = "SELECT * FROM Customer";

    $result = mysqli_query($connection, $query);

    while ($row=mysqli_fetch_assoc($result)){
        echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].'<br />';
    }

    echo '<h2>Select ALL from the Customer Table with Age > 22</h2>';

    $query_two = "SELECT * FROM Customer WHERE Age > 22";

    $result_two = mysqli_query($connection, $query_two);
    
    while ($row=mysqli_fetch_assoc($result_two)){
        echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].' '.$row['Age'].'<br />';
    }

    echo '<h2>Select Females from the Customer Table with Age >= 22</h2>';

    $query_three = "SELECT * FROM Customer WHERE Age >= 22 AND Gender = 'F'";

    $result_three = mysqli_query($connection, $query_three);

    while ($row=mysqli_fetch_assoc($result_three)){
        echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].' '.$row['Age'].'<br />';
    }

    echo '<h2>Select Males from the Customer Table list by Age descending</h2>';

    $query_four = "SELECT * FROM Customer WHERE Gender = 'M' ORDER BY Age DESC";

    $result_four = mysqli_query($connection, $query_four);

    while ($row=mysqli_fetch_assoc($result_four)){
        echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].' '.$row['Age'].'<br />';
    }

    echo '<h2>Select All from the Customer Table with "a" in the first name</h2>';  
    
    $query_five = "SELECT * FROM Customer WHERE FirstName LIKE '%a%'";  // % is used as a 'wildcard'.

    $result_five = mysqli_query($connection, $query_five);

    while ($row=mysqli_fetch_assoc($result_five)){
        echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].' '.$row['Age'].'<br />';
    }
?> 
