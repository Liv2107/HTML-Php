<?php

include 'init.php';

include 'form.php';
//print_r($_SESSION);
if(isset($_SESSION['error'])){
    echo $_SESSION['error'];
}
else{
    session_unset();
}
?>

<a href="../watIndex.html">Home</a>
