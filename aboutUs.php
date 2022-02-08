<?php session_start();

    if(isset($_SESSION['usuario'])){
        require 'frontend/sobreNosotros.php';
    }else{
        header ('location: login.php');
    }
        
?>