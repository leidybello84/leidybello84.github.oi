
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href=" http://localhost/okavango_5/css/style_main.css">
  <!-- ICONS -->
  <!-- google fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <!-- boxicons -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <!-- google fonts -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
<!--Fontawesome  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  
  <!-- PRUEBA TITULO ANIMADO -->
  
  <title>Conjunto Residencial Okavango</title>
</head>

<body>
  <header>
    <nav>
      <div>
        <img src="./imagenes/logo/logo.png" alt="">
      </div>
      <div class="nav">
        <ul id="nav">
          <li><a href="#conjunto">Inicio</a></li>
          <li><a href="#nosotros">Nosotros</a></li>
          <li><a href="#anuncios">Anuncios</a></li>
          <li><a href="#contacto">Contacto</a></li>
        </ul>
      </div>

    
      <div class="header-search">
        
          <a href="#"><i class='bx bx-search'></i></a>
          <a href="./php/login.php"><i class='bx bxs-user'></i></a>
         
       
       
      </div>
        
    </nav>
       
    <!--INICIO CONJUNTO -->
    
    <div class="conjunto">
        
        <h1 class="name item">Okavango</h1>
        <h3 class="paragraph item">Conjunto Residencial </>
    </div>

    </div>
    <div class="bx-whatsapp">
              <a href="#"><i class='bx bxl-whatsapp'></i></a>
    </div>
    <!-- circulo fleha -->
    <div class="bx-scrol">
      <a href=""><i class='bx bxs-down-arrow-circle' style='color:#fff'  ></i></a>
    </div>
  </header>

 
  <!-- MODULO DOS NOSOTROS -->

  <section class="nosotros" id="nosotros">
    <h2>NUESTRO CONJUNTO</h2>
    <div class="section">
      <div class="container">
        <div class="grid-row">
          <div class="grid-item">
            <span>
              <h3>Parqueadero</h3>
                <p>200 Parqueaderos para automovil</p>
                <p>100 Parqueaderos para motos</p>
            </span>
            <img src="./imagenes/areas_conjunto/PARQUEADERO.jpeg" alt="" srcset="">
          </div>
          <div class="grid-item">
            <span>
              <h3>Piscinas</h3>
          <p>1 Piscina para niños</p>
          <p>2 Piscinas para adultos</p>
            </span>
            <img src="./imagenes/areas_conjunto/piscinas/PISCINA PLAYA.jpeg" alt="" srcset="">
          </div>
          <div class="grid-item">
            <span>
              <h3>Apartamentos</h3>
              <p>600 Apartamentos</p>
              <p>Amplios, comodos y tranquilos.</p>
            </span> 
            <img src="./imagenes/areas_conjunto/salon_social2.jpg" alt="" srcset="">
          </div>
          
    
        </div>
      </div>
    </div>
    
  </section>

  <!-- Modulo  TRES Anuncios -->
  <section class="anuncios" id="anuncios">

    <h1>EVENTOS</h1>

    <div class="boxesContainer">
    
      <div class="cardBox">
        <div class="card">
          <div class="front">
            <h3>Evento 1</h3>
            <p>Hover to flip</p>
            <strong>&#x21bb;</strong>
          </div>
          <div class="back">
            <h3>Back Side One</h3>
            <p>Content in card one</p>
            <a href="#">Button 1</a>
          </div>
        </div>
      </div>
    
      <div class="cardBox">
        <div class="card">
          <div class="front">
            <h3>Card Two</h3>
            <p>Hover to flip</p>
            <strong>&#x21bb;</strong>
          </div>
          <div class="back">
            <h3>Back Side Two</h3>
            <p>Content in card two</p>
            <a href="#">Button 2</a>
          </div>
        </div>
      </div>
    
      <div class="cardBox">
        <div class="card">
          <div class="front">
            <h3>Card Three</h3>
            <p>Hover to flip</p>
            <strong>&#x21bb;</strong>
          </div>
          <div class="back">
            <h3>Back Side Three</h3>
            <p>Content in card three</p>
            <a href="#">Button 3</a>
          </div>
        </div>
      </div>
    
      <div class="cardBox">
        <div class="card">
          <div class="front">
            <h3>Card Four</h3>
            <p>Hover to flip</p>
            <strong>&#x21bb;</strong>
          </div>
          <div class="back">
            <h3>Back Side Four</h3>
            <p>Content in card four</p>
            <a href="#">Button 4</a>
          </div>
        </div>
      </div>
    
    </div>
    <!--.boxesContainer-->
      
  </section>
  <!-- Modulo CUATRO Contacto -->
  <section class="contacto" id="contacto">
    <div class="contact-wrap">
      <h1>Contactanos</h1>
      <form method="post">
        <input type="text"  name="name" placeholder="Nombre" class="contact-in-input">
        <input type="text"  name="fullname" placeholder="Apellido" class="contact-in-input">
        <input type="email" name="email" placeholder="Email" class="contact-in-input">
        <input type="tel" name="phone" placeholder="Telefono" class="contact-in-input">
        <input type="text" name="asunto" placeholder="Asunto" class="contact-in-input">
        <textarea name="message" placeholder="Message" class="contact-in-textarea"></textarea>
        <input type="submit" name="send" value="Enviar" class="btn">
      </form>
    
  </div>
  <?php
      include("./php/conexion.php");
      ?>
  </section>


  
<!-- FOOTER -->
  <footer class="new_footer_area-bg_color">
    <div class="new_footer_top">
        <div class="container-footer">
            <div class="row">
              <div class="col-sm-3">
                <ul>
                  <li class="title">Nosotros</li>
                  <h3>Telefono</h3>
                       <p>057 320 494 00 92</p>
                       <h3><i class='bx bx-envelope'></i>E-mail</h3>
                       <p>Example: Conjuntookavango@gmail.com</p>
                       <h3>Dirección</h3>
                       <p>Barrio el delirio call , Villavicencio - Meta</p>
                       <h3>Descargas</h3>
                </ul>
              </div>
              <div class="col-sm-3">
                <ul>
                  <li class="title">Redes Sociales</li>
                        <div class="f_social_icon">
                            <a href="https://www.facebook.com/okavangoI" target="_blank"><i class='bx bxl-facebook-circle'></i></a>
                            <a href="#"><i class="fab fa-instagram instagram-social"></i></a>
                </ul>
              </div>
              <div class="col-sm-3">
                <ul>
                  <li class="title">Enlaces Pagos Servicios</li>
                    <li><a href="https://www.electrificadoradelmeta.com.co/newweb/conozca-su-factura/" target="_blank">Emsa</a></li>
                    <li><a href="https://transactional.llanogas.com/wspse/" target="_blank">Llanogas</a></li>
                    <li><a href="https://stage.eaav.gov.co/consulta_pago" target="_blank">EAAV</a></li>
                    <li><a href="https://portalpagos.claro.com.co/index.php?view=vistas/personal/claro/newclaro/inicio.php&id_objeto=#no-back-button" target="_blank">Claro</a></li>
                    <li><a href="https://movistar.recaudo.epayco.co/?canal=pmax_diciembre_iphone&tipo_pago=movistar&tipo_servicio=movil&utm_source=GOOGLE-PMAX&utm_medium=PMAX_VNT&utm_campaign=CO_SVA_COL-RECAUDOS-B2C_23-08-16_PMAX_VNT_AON_ABT&utm_term=IPHONE_ABT&utm_content=VNT&&campaign=CO_SVA_COL-RECAUDOS-B2C_23-08-16_PMAX_VNT_AON_ABT&adgroupid=&keyword=&gad_source=1&gclid=CjwKCAiAg9urBhB_EiwAgw88mdSXHcJo_PefyO8evkBkxCdNCDTev8eyD64GJch3IQym45rYbhjHgBoCVDwQAvD_BwE&gclsrc=aw.ds" target="_blank">Movistar</a></li>
                  </ul>
                </ul>
              </div>
              <div class="col-sm-3">
                <ul>
                  <li class="title">Enlaces de Interes</li>
                  <li><a href="https://www.electrificadoradelmeta.com.co/newweb/conozca-su-factura/" target="_blank">Impuesto predial</a></li>
                  <li><a href="https://transactional.llanogas.com/wspse/" target="_blank">Runt</a></li>
                  <li><a href="https://stage.eaav.gov.co/consulta_pago" target="_blank">Certificado Tradicion y libertad</a></li>
                  <li><a href="https://portalpagos.claro.com.co/index.php?view=vistas/personal/claro/newclaro/inicio.php&id_objeto=#no-back-button" target="_blank">Pico y Placa Villavicencio</a></li>
                  <li><a href="https://movistar.recaudo.epayco.co/?canal=pmax_diciembre_iphone&tipo_pago=movistar&tipo_servicio=movil&utm_source=GOOGLE-PMAX&utm_medium=PMAX_VNT&utm_campaign=CO_SVA_COL-RECAUDOS-B2C_23-08-16_PMAX_VNT_AON_ABT&utm_term=IPHONE_ABT&utm_content=VNT&&campaign=CO_SVA_COL-RECAUDOS-B2C_23-08-16_PMAX_VNT_AON_ABT&adgroupid=&keyword=&gad_source=1&gclid=CjwKCAiAg9urBhB_EiwAgw88mdSXHcJo_PefyO8evkBkxCdNCDTev8eyD64GJch3IQym45rYbhjHgBoCVDwQAvD_BwE&gclsrc=aw.ds" target="_blank">Movistar</a></li>
                </ul>
              </div>
             
            </div>
        </div>
        <div class="footer_bg">
            <div class="footer_bg_one"></div>
            
            <div class="footer_bg_two"></div>
            
            
            
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
                <div class="col-lg-6 col-sm-7">
                    <p class="mb-0 f_400"> © Copyright 2023 By Leidy Bello. All rights reserved.</p>
                </div>
        </div>
    </div>
</footer>

  <a href="#home" class="scroll top-menu">
    <i class="fa-solid fa-chevron-up"></i>
  </a>
  <!-- <javascript main file src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
    integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"> -->
    </script>
    <script src="./js/script.js"></script>
    
</body>

</html>