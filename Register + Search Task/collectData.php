<?php

include 'init.php';

if(isset($_POST['reset'])){
    session_unset();
}

if(isset($_POST['loginSubmit'])){
    if(isset($_POST['checkConfirm'])){
        if(!Empty($_POST['txtUser']) && !Empty($_POST['txtPass']) && !Empty($_POST['txtEmail'])){
            if(isset($_POST['selAge']) && $_POST['selAge'] !== 'Please select'){
                $pass = $_POST['txtPass'];

                if(strlen($_POST['txtUser']) < 6){
                    session_unset();
                    $_SESSION['error'] =  'Username must contain at least 6 characters.<br />';

                    $_SESSION['user'] = trim($_POST['txtUser']);
                    $_SESSION['pass'] = $_POST['txtPass'];                    
                    $_SESSION['email'] = trim($_POST['txtEmail']);
                    header("location:homePage.php");
                }
                else if(preg_match('/[A-Z]/', $pass) == 0 || preg_match('/[a-z]/', $pass) == 0 || preg_match('/[0-9]/', $pass) == 0) {
                    session_unset();
                    $_SESSION['error'] =  'Password must contain at least one uppercase and lower case letter and at least one number.<br />';

                    $_SESSION['user'] = trim($_POST['txtUser']);
                    $_SESSION['pass'] = $_POST['txtPass'];                    
                    $_SESSION['email'] = trim($_POST['txtEmail']);
                    header("location:homePage.php");
                }
                else if(!filter_var($_POST['txtEmail'], FILTER_VALIDATE_EMAIL)) {  
                    session_unset();
                    $_SESSION['error'] = 'Please enter a valid email.<br />'; 
                    header("location:homePage.php");       
                } 
                else{
                    $user = $_POST['txtUser'];
                    $pass = password_hash($pass, PASSWORD_DEFAULT);
                    $email = $_POST['txtEmail'];

                    $query = "INSERT INTO Register
                            (Username, Password, Email)
                            VALUES
                            ('$user','$pass','$email')";

                    mysqli_query($connection, $query);
                    session_unset();
                    $_SESSION['error'] = 'Welcome';

                    header("location:tablePage.php");
                }
            }
            else{
                session_unset();
                $_SESSION['error'] = 'Please select an option for age.<br />';

                $_SESSION['user'] = trim($_POST['txtUser']);
                $_SESSION['pass'] = $_POST['txtPass'];                    
                $_SESSION['email'] = trim($_POST['txtEmail']);
                header("location:homePage.php");                
            }
        }else{
            session_unset();
            $_SESSION['error'] = 'All data should be entered.<br />';

            $_SESSION['user'] = trim($_POST['txtUser']);
            $_SESSION['pass'] = $_POST['txtPass'];                    
            $_SESSION['email'] = trim($_POST['txtEmail']);
            header("location:homePage.php");
        }
    } else{
        session_unset();
        $_SESSION['error'] = 'Please check the confirm box.<br />';  

        $_SESSION['user'] = trim($_POST['txtUser']);
        $_SESSION['pass'] = $_POST['txtPass'];                    
        $_SESSION['email'] = trim($_POST['txtEmail']);
        header("location:homePage.php");     
    }
}

?>
