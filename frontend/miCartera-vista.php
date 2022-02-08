<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Binv</title>
    <!-- Jsefin Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
    <!-- Font Kaushan Script -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <!-- Font oswald-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
    <!--Css-->
    <link rel="stylesheet" href="css\stylesMiCartera.css">
    <!-- FontAwesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://kit.fontawesome.com/85078200a5.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
</head>
<body>

    



    <div class="conteiner">

        <nav class="nav-main">
            <img src="image\bitcoinLogo.png" alt="Binv-Logo" class="nav-brand">
            <ul class="nav-menu show">
                <li>
                    <a href="principal.php">Volver...<i class="fas fa-hand-point-left"></i></a>
                </li>
            </ul>
            <ul class="nav-menu-right">
                <div class="menu-btn">
                    <i class="fas fa-bars"></i>
                </div>
                <li>
                    <a href="cerrar.php"><i class="fas fa-sign-out-alt"></i></a>                     
                </li>
            </ul>
        </nav>
        <hr>
        
        <?php

            include 'conexion.php';
            $usuario = $_SESSION['usuario'];
            if(!isset($usuario)){
                header("location: login.php");
            }

            $consulta = "SELECT * FROM login WHERE usuario = '$usuario'";
            $ejecuta = $conexion->query($consulta);
            $row = $ejecuta->fetch(PDO::FETCH_ASSOC);
            ?>


        <h4 class="tituloResumen">Hola <span class="usuarioCambioColor"><?php echo $usuario ?></span>. Este es el resumen de tu cuenta.</h4> 
        <!-- Cartera -->
        <div class="miCartera">
           
               
            <div class="main-container">
                <table>
                    <thead>
                        <tr>
                            <th>BALANCE</th>
                        </tr>
                    </thead>
                        <tr>
                            <td class="otherFont"> <b>Capital Ingresado</b> </td><td class="numeritos"> <p>$ <?php echo $row['capitalIngresado']?> </p> </td>
                        </tr>
                        <tr>
                            <td class="otherFont"> <b>Capital Actual</b> </td><td class="numeritos"><p>$ <?php echo $row['capitalActual']?> </p></td>
                        </tr>
                        <tr>
                            <td class="otherFont"> <b>Fecha de retiro</b> </td><td class="numeritos"><p> <?php echo $row['fechaDeRetiro']?> </p></td>
                        </tr>
                    </table>

                    <div class="cajaLink">
                        <p>Presione <a href="<?php echo $row['contrato']?>" target="_blank" class="link">AQUÍ</a> para acceder al Pdf de su contrato!</p>
                    </div>
                   

            </div>
            <div class="grafico">
                <?php echo "<img src='".$row['grafico']."' width='600' >"  ?>
            </div>

        </div>
    
        <!-- Social -->
        <div class="social">
            <p>Follow <span class="otroEstilo">B-inV</span> </p>
            <div class="links">
                <a href="">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>
        </div>
    </div>  


    <!--FooterLinks-->
    <div class="footerLinks">
        <div class="footerConteiner">
            <ul>
                <li>
                    <a href="">
                        <h3>Titulo One</h3>
                    </a>
                </li>
                <li>
                    <a href="">BlockChain</a>
                </li>
                <li>
                    <a href="">BlockChain</a>
                </li>
                <li>
                    <a href="">BlockChain</a>
                </li>            
            </ul>
            <ul>
                <li>
                    <a href="">
                        <h3>Titulo One</h3>
                    </a>
                </li>
                <li>
                    <a href="">BlockChain</a>
                </li>
                <li>
                    <a href="">BlockChain</a>
                </li>
                <li>
                    <a href="">BlockChain</a>
                </li>            
            </ul>
            <ul>
                <li>
                    <a href="">
                        <h3>Titulo One</h3>
                    </a>
                </li>
                <li>
                    <a href="">BlockChain</a>
                </li>
                <li>
                    <a href="">BlockChain</a>
                </li>
                <li>
                    <a href="">BlockChain</a>
                </li>            
            </ul>
            <ul>
                <li>
                    <a href="">
                        <h3>Titulo One</h3>
                    </a>
                </li>
                <li>
                    <a href="">BlockChain</a>
                </li>
                <li>
                    <a href="">BlockChain</a>
                </li>
                <li>
                    <a href="">BlockChain</a>
                </li>            
            </ul>
        </div>
    </div>

    <!-- CopyRight -->
    <div class="footer">
        <h3> BinV Copyright</h3>
    </div>

    <script src="js\main3.js"></script> 
</body>
</html>