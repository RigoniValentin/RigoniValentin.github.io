<?php session_start();

    if(isset($_SESSION['usuario'])){
        require 'frontend/contactanos.php';
    }else{
        header ('location: login.php');
    }
        
?>