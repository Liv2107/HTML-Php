<!DOCTYPE html>
<html>

<header>
    <title>PHP Basics</title>
    <h1>PHP basics</h1>
</header>


<body>
    <?php

    $name="Olivia";
    $age=20;

    echo 'Hi i am '.$name.' and i am '.$age.' years old. <br />';

    echo "Hi my name is $name and i am $age years old.";

    ?>
    <h4>Using escape Characters</h4>
    <?php
    
    echo "\"most programmers say it's better to use 'echo' racther than 'print'\" says who?<br />";

    ?>

    <h4>Functions</h4>
    <?php

    //gettype()returns the type of element - in this case it is a String.

    echo gettype($name);

    echo '<br />';

    //strlen() returns the length of the string in an integer here being 6.

    echo strlen($name);

    echo '<br />';

    //strtoUpper()returns the string is changed into all upper case.

    echo strtoUpper($name);
    echo '<br />';

    ?>

    <h4>Arithmetic</h4>

<?php

$num1=9;
$num2=12;
$sumNum= $num1*$num2;
$divNum=$num2/$num1;
$remNum=$num2%$num1;
$percNum=($num1/$num2)*100;

echo 'num1 = '.$num1;
echo '<br />';
echo 'num2 = '.$num2;
echo '<br />';
echo 'num1 x num2 = '.$sumNum;
echo '<br />';
echo "num1 as a percentage of num2 = $percNum%<br />";
echo 'num2 divided by num1 = '.number_format($divNum, 0).' remainder '.$remNum.'<br />';
echo '<br />';

?>
</body>
<footer>
    <style>
        footer{background-color:grey;
        padding:20px}
        
    </style>

<?php

// Final task

$heightMeters=1.625;
$heightInches=($heightMeters*100)/2.54;
$heightFeet=$heightInches/12;
$heightRemainder=$heightInches%12;

echo 'Name: '.$name.'<br />';
echo 'Age: '.$age.'<br />';
echo 'Height in Meters: '.$heightMeters.'<br />';
echo 'Height in Feet and Inches: '.floor($heightFeet).'ft '.floor($heightRemainder).'ins<br />';
?>
</footer>

<div>
    <a href="../watIndex.html">Home</a>
</div>
</html>
