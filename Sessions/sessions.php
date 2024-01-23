<?php

include 'init.php';

if(isset($_SESSION['user'])){
    echo 'welcome';
    echo '<a href="logout.php">Logout</a><br />';
    echo '<a href="protected.php">Protected page</a><br />';
}
else{
    include 'loginForm.php';
    echo $_SESSION['error'];
}
?>
