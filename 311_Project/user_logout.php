<?php 

session_start();

if(isset($_GET['user_logout'])) {
    session_destroy();
    unset($_SESSION['Name']);
    header("Location:index.php");
}

?>