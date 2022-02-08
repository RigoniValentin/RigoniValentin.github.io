<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
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
    <!-- Font Alfa Slab One -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
    <!-- Font Dongle -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- Fuente3 -->
    <link href="//db.onlinewebfonts.com/c/066ce24dae3730ed6c648b09efaea93a?family=Acumin+Variable+Concept" rel="stylesheet" type="text/css"/>
    <!--Css-->
    <link rel="stylesheet" href="css\styles.css">
    <!-- FontAwesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://kit.fontawesome.com/85078200a5.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
</head>
<body>

    <!-- <div class="menu-btn">
        <i class="fas fa-bars"></i>
    </div> -->


    <div class="conteiner">

        <!-- Nav -->
        <nav class="nav-main">
            <img src="image\bitcoinLogo.png" alt="Binv-Logo" class="nav-brand">
            <ul class="nav-menu show">
                <li>
                    <a href="#queHacemosLink">¿Qué hacemos?</a>
                </li>
                <li>
                    <a href="#productosLink">Te ofrecemos</a>
                </li>
                <li>
                    <a href="#aboutUsLink">Sobre Nosotros</a>
                </li>
                <li>
                    <a href="#quienesSomosLink">+Info</a>
                </li>
                <li>
                    <a href="miCartera.php">Mi cartera  <i class="fas fa-wallet"></i></a>
                </li>
                <li>
                    <a href="contactoBackEnd.php">Contactanos   <i class="far fa-comments"></i></a>
                </li>
            </ul>
            <ul class="nav-menu-right">
                <div class="menu-btn">
                    <i class="fas fa-bars"></i>
                </div>
                <li>
                    <a href="cerrar.php" ><i class="fas fa-sign-out-alt"></i>                      
                    </a>                     
                </li>
            </ul>
        </nav>
        <hr>

        <!-- Showcase -->
        <header class="showcase">
        
            <div class="logo">           
                <img src="image\Logo-PNG-Blanco2.png" alt="">
            </div>
            
            <h2 class="otroEstilo2"> “El punto medio entre la volatilidad y los beneficios”</h2>
            
        </header>
        
        <!-- Qué hacemos -->

        <a name="queHacemosLink" />
        <div class="queHacemos">          
            <div id="contentItemsCarrusel">
                <div class="itemCarrusel" id="itemCarrusel1">
                    <div class="tarjetaCarrusel" id="tarjetaCarrusel1">
                        <img src="image/ImgCarrousel1111.jpg" alt="" class="imgg">
                    </div>
                    <div class="flechasCarrusel">
                        <a href="#itemCarrusel3">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                        <a href="#itemCarrusel2">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>    
                </div>
                <div class="itemCarrusel" id="itemCarrusel2">
                    <div class="tarjetaCarrusel" id="tarjetaCarrusel2">
                        <img src="image/ImgCarrousel22222.jpg" alt="" class="imgg">
                    </div>
                    <div class="flechasCarrusel">
                        <a href="#itemCarrusel1">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                        <a href="#itemCarrusel3">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>    
                </div>
                <div class="itemCarrusel" id="itemCarrusel3">
                    <div class="tarjetaCarrusel" id="tarjetaCarrusel3">
                        <img src="image/ImgCarrousel333.jpg" alt="" class="imgg">
                    </div>
                    <div class="flechasCarrusel">
                        <a href="#itemCarrusel2">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                        <a href="#itemCarrusel1">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>    
                </div>
            </div>
            <div class="titulouski">
                <h1><span class="nivelesDeInversionText">¿QUÉ HACEMOS?</span></h1>
                <p class="leftText-QueHacemos">.  Somos un grupo de inversion que mediante el uso de la blockchain y las criptomonedas, generan dividendos que se dividen entre sus inversores.</p>
                <p class="rightText-QueHacemos">.   Juegos NFT, Metaversos, Trading, Staking/Farming, monedas descapitalizadas (shitcoin) y arbitraje, son algunas de las herramientas con las que trabajamos.</p>
            </div>
        </div>
        <a name="productosLink" />
        <hr>

        <!-- Productos -->
        <div class="cajaProductos"> 
            <h1 class="titulouch"><span class="nivelesDeInversionText">PODEMOS OFRECERTE</span><i class="fas fa-hand-point-down"></i></h1>
            <p> <span class="nivelesDeInversionText">Niveles de inversion :</span></b>
            <span class="fuenteParrafo"> Para la correcta administracion de los activos financieros, desde BINV nuestra propuesta de trabajo consiste en el bloqueo/parking del capital invertido que genera entre 10%-30% de ganancia anualizada dependiendo de las siguientes variables:</span></p>
            <section class="section">
                <div class="product a">
                    <h2><span class="nivelesDeInversionText"> NIVEL 1 </span></h2>
                    <img src="image\Exponencial-1-Blanco.png" alt="" class="imagen-productos one"><br><br>
                    <h5><b><span class="green">Capital invertido :</span></b><br><span class="nose">(U$D 100 - U$D 1.000)</span></h5>                 
                    <h5><b>Porcentaje mensual :</b><span class="green"> 11%</span></h5>
                    <h5><b>Porcentaje trimestral :</b><span class="green"> 18%</span></h5>
                    <h5><b>Porcentaje semestral :</b><span class="green"> 28%</span></h5>  
                </div>
                <div class="product b">
                    <h2><span class="nivelesDeInversionText"> NIVEL 2 </span></h2>
                    <img src="image\Exponencial-2-Blanco.png" alt="" class="imagen-productos two"><br><br>
                    <h5><b><span class="green">Capital invertido :</span></b><br><span class="nose">(U$D 1.000 - U$D 5.000)</span></h5>                 
                    <h5><b>Porcentaje mensual :</b><span class="green"> 12%</span></h5>
                    <h5><b>Porcentaje trimestral :</b><span class="green"> 20%</span></h5>
                    <h5><b>Porcentaje semestral :</b><span class="green"> 28%</span></h5> 
                </div>
                <div class="product c">
                    <h2><span class="nivelesDeInversionText"> NIVEL 3 </span></h2>
                    <img src="image\Exponencial-3-Blanco.png" alt="" class="imagen-productos three"><br><br>
                    <h5><b><span class="green">Capital invertido :</span></b><br><span class="nose">(U$D 5.000 ++)</span></h5>                 
                    <h5><b>Porcentaje mensual :</b><span class="green"> 14%</span></h5>
                    <h5><b>Porcentaje trimestral :</b><span class="green"> 21%</span></h5>
                    <h5><b>Porcentaje semestral :</b> <span class="green">30%</span></h5> 
                </div>
            </section>
        </div>   
        <hr> <br><br>
        
        <!-- Banner -->
        <div class="banner">
            <div class="conteBanner">  
                <h2><span class="nivelesDeInversionText">¿SABÍAS¡?</span></h2>
                <p>El bitcoin no sube de precio, el dolar baja por la emision monetaria. Apostamos al Bitcoin porque representa la inflacion de los sistemas monetarios actuales.</p>
            </div>        
        </div>
        <br><br>
        
        <hr> 
        <a name="aboutUsLink" />
        <div class="contieneNosotros">
            <div class="sobreNosotros"></div>
            <div class="textoNosotros"> 
                <h1><span class="nivelesDeInversionText">MAS SOBRE NOSOTROS.</span></h1>
                <p>Somos emprendedores de la cultura, que se encontraron una economia devastada por la inflacion con la necesidad de hacer valer su dinero para poder crear, creer y crecer. En esa busqueda nos encontramos con las Criptomonedas, como una respuesta a la inflacion y al manejo centralizado de las finanzas como método de control por parte de los estados. </p> <br>
                <p>Es muy sencillo saber que las criptomonedas siempre van a subir frente a los sistemas tradicionales por la emision monetaria. Bitcoin solo hay 21 millones, y dolares en el ano 2020 se emitio el 25% del circulante, esto habla de una estabilidad inviable a largo plazo. Al haber mas dolares en el mercado : <span class="resaltadoText">“El bitcoin no sube de precio, el dolar baja por la emision monetaria. Apostamos al Bitcoin porque representa la inflacion de los sistemas monetarios actuales”.</span></p><br>
                <p>De esta manera los porcentuales que ofrecemos son sencillos de generar, porque quizas sea muy dificil sacar una rentabilidad del 10, 20 o hasta 30% en el par USD/USD. Pero es mas sencillo de generar, en el par CRYPTO/USD.
                criptomonedas. <span class="resaltadoText1">NO TE QUEDES AFUERA DEL FUTURO.</span>
                </p>
            </div>  
        </div>
        <a name="quienesSomosLink" />
        <hr>
        <br>
        <h1 class="h-one">¿QUIÉNES SOMOS?</h1>
        <div class="fotoss">
            <div class="primeraFoto">
                <img src="image/BrianPucheta.png" alt="">
                <h3 style="color: #305570">Brian Pucheta</h3>
            </div>  
            <div class="segundaFoto">
                <img src="image/IgnaLuna.png" alt="">
                <h3 style="color: #305570">Ignacio Luna</h3>
            </div>
        </div>
        <a href="contactoBackEnd.php" class="btn centrado">CONTACTANOS <i class="fas fa-angle-double-right"></i></a>
        


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

        <!-- Condiciones -->
        <div class="condiciones">
        <h4><span class="nivelesDeInversionText tamaño">Condiciones:</span></h4>
        <hr>
            <p><span class="colorCondiciones">Si el inversor desea retirar dinero del fondo ANTES del cumplimiento del bloqueo (tiempo pactado al inicio de inversión), se le devolverá el dinero con una penalización del 2%.
            En el caso de subir de nivel de inversión, se respeta el tiempo de parking de la última inversión realizada.</span> <br>
            Gestión de riesgo:
            <span class="colorCondiciones1">La gestión de riesgo que utilizamos está basada en trabajar en inversiones seguras que nos permitan invertir esa ganancia en otras de riesgo pero con mucha más volatilidad. Trabajamos con la ganancia que generamos para poder cuidar el capital.
            Saluda atte, BINV (Buenas Inversiones)</span></p>
            <hr>
            <br> <br>
        </div>


    <!--FooterLinks-->
    </div>  

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

    <script src="js\main.js"></script> 
</body>
</html>