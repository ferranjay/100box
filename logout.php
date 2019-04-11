<?php 

session_start();

if(isset($_SESSION['oeser_neem'])){
    session_destroy();

    echo header("location:login.php");
}

?>