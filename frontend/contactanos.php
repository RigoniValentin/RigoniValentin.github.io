<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Css-->
    <link rel="stylesheet" href="css\contacto.css">
    <!-- FontAwesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://kit.fontawesome.com/85078200a5.js" crossorigin="anonymous"></script>
    <title>Contactyo</title>
</head>
<body>
    <div class="menu-btn">
        <i class="fas fa-bars"></i>
    </div>
    <!-- Nav -->
    <div class="conteiner">
    <nav class="nav-main">
            <img src="image\bitcoinLogo.png" alt="Binv-Logo" class="nav-brand">
            <ul class="nav-menu show">
                <li>
                    <a href="principal.php">Volver...<i class="fas fa-hand-point-left"></i></a>
                </li>
            </ul>
            <ul class="nav-menu-right">
                <li>
                    <a href="cerrar.php"><i class="fas fa-sign-out-alt"></i>
                        <span class="tooltip-box"></span>
                    </a>                     
                </li>
            </ul>
        </nav>
        <br>
        <hr>

    <form method="post">
        <h2>CONTACTO</h2>
        <input type="text" name="nombre" placeholder="Nombre completo">
        <input type="text" name="correo" placeholder="correo@dominio.com">
        <input type="text" name="asunto" placeholder="asunto">
        <textarea name="mensaje" placeholder="Escriba aqui su mensaje"></textarea>
        <input type="submit" name="enviar" id="boton">
    </form>
    <?php
    include("correo.php");
    ?>
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