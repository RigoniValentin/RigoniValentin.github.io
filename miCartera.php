<?php session_start();

    if(isset($_SESSION['usuario'])){
        require 'frontend/miCartera-vista.php';
    }else{
        header ('location: login.php');
    }    
?>