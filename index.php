<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>Distribuidora de Occidente</title>
    <link rel="shortcut icon" href="images/basic_favicon.png" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/misestilos.css">
    <script src="js/jquery.js"></script>
    <script src="jquery-1.10.1.min.js"></script>
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>-->
    <!--este es para el slideshow-->
    <script type="text/jscript" src="script.js"></script>
</head>
<body>


   <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Distribuidora de Occidente</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Inicio</a></li>
        <li><a href="productos.html">Productos</a></li>  
        <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Categorias<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li id="submenuRefrigeracion" class="dropdown-submenu">
                         <a tabindex="-1" href="#">Refrigeracion</a>
                            <ul class="dropdown-menu">
                                <!--el tab index es para que ala hora de navegar con el tab, nos mueva por orden que selecccionemos-->
                                <li><a tabindex="-1" href="#">Deltatrak</a></li>
                                <li><a tabindex="-2" href="#">Cortinas Hawaianas</a></li>
                                <li><a tabindex="-3" href="#">Taylor</a></li>
                                <li class="dropdown-submenu">
                                   <a href="#">Kestrel</a>
                                      <ul class="dropdown-menu">
                                          <li><a href="#">TermoAnemometros</a></li>
                                          <li><a href="#"></a></li>
                                      </ul>
                                </li>
                            </ul>
                    </li>
                    <!--usa estilos css  misestilos.css-->
                    <li id="submenuAgricola" class="dropdown-submenu">
                         <a tabindex="-1" href="#">Agricola</a>
                            <ul class="dropdown-menu">
                                <!--el tab index es para que ala hora de navegar con el tab, nos mueva por orden que selecccionemos-->
                                <li><a tabindex="-1" href="#">Dosificador</a></li>
                                <li><a tabindex="-2" href="#">GLA</a></li>
                                <li class="dropdown-submenu">
                                   <a href="#">Kestrel</a>
                                      <ul class="dropdown-menu">
                                          <li><a href="#">TermoAnemometros</a></li>
                                          <li><a href="#"></a></li>
                                      </ul>
                                </li>
                            </ul>
                    </li>
                  <li><a href="#">Limpieza</a></li>
                  <li><a href="#">Computo</a></li>
                  <li><a href="#">Ferretero</a></li>
                </ul>
        </li>
        <li><a href="contacto.html">Contácto</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col-xs-12"><br><br><br></div>
  </div>
  
</div>
  
  <!--aqui ponemos div del la barra del logo-->
  <div class="color1">
    <div class="container">
      <div class="row">
        <!--aqui ponemos el logo-->
        <div class="col-xs-3 text-center">
          <img class="img-responsive" src="images/logoDistribuidoradeOccidente.png">
        </div>

        <div class="col-xs-9 text-center"> 
          <!--slideshow-->
                   <div id="slideshow">
                       <div>                    
                        <!--para que las imagenes sean responsivas le agregamos a la etiqueta img -->
                        <!-- class="img-responsive"--> 
                          <img class="img-responsive color1" src="images/501ES2-med.png">
                       </div>

                       <div>
                            <img class="img-responsive color1" src="images/kestrel4300-1m.png">  
                       </div>  

                       <div>
                            <img class="img-responsive color1" src="images/TP-LINK_TL-PB10400.png">
                       </div>              
                   </div>
        </div>
      </div>
    </div>
  </div>
        
<!--aqui acaba el slideshow-->


    <section>
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <h2>Accesorios y equipo de computo</h2>
            <ul>
              <li>Venta de equipo de computo</li>
              <li>Venta de todo tipo de accesorios computacionales</li>
              <li>Venta de consumibles en general</li>
              <li>Equipos de tecnologia innovadora</li>
            </ul>
        </div>

        <div class="col-sm-4">
          <h2>Importación de refacciones industriales</h2>
          <ul>
            <li>Venta de refacciones industriales</li>
            <li>Importación de refacciones industriales</li>
            <li>Calidad y suministro de productos</li>
            <li>Buen tiempo de entrega</li>
            <li>Los mejores precios</li>
          </ul>
        </div>

        <div class="col-sm-4">
          <h2>Productos ferreteros</h2>
          <ul>
            <li>Ferreteria en general</li>
            <li>Venta de refacciones para invernaderos</li>
            <li>Variedad de productos</li>
          </ul>
        </div>
      </div>
      <hr>
    </div>
<!--aqui se acaba el primer row-->
    

   <div class="container">
     <div class="row">
       
       <div class="col-sm-2 color8"><table>
         <tr><td align="center"><h4>Accesorios de Cómputo</h4></td></tr>
         <tr><td align="center"><img class="img-responsive" src="images/computo/TP-LINK_TL-PB10400.JPG" width="100" height="120"></td></tr>
         <tr><td align="center"><img class="img-responsive" src="images/computo/acteck_lc1200.JPG"  width="90" height="120"></td></tr>
         </table>
       </div>

       <div class="col-sm-2"><table>
         <tr><td align="center"><h4>Graficadores de Temperatura</h4></td></tr>
         <tr><td align="center"><img class="img-responsive" src="images/deltatrak/deltatrakLogo.jpg"  width="100" height="120"></td></tr>
         <tr><td align="center"><img class="img-responsive" src="images/deltatrak/16100.jpg"  width="100" height="120"></td></tr>
         </table>
       </div>

       <div class="col-sm-2 color8"><table>
         <tr><td align="center"><h4>Dosificadores</h4></td></tr>
         <tr><td align="center"><img class="img-responsive" src="images/dosatron/dosatronLogo.jpg"  width="150" height="120"></td></tr>
         <tr><td align="center"><img class="img-responsive" src="images/dosatron/D25RE2.jpg"  width="50" height="50"></td></tr>
         </table>
       </div>

       <div class="col-sm-2"><table>
         <tr><td align="center"><h4>Cortinas Hawaianas</h4></td></tr>
        <tr><td align="center"><img class="img-responsive" src="images/extruflex/extruflexLogo.jpg"  width="150" height="120"></td></tr>
        <tr><td align="center"><img class="img-responsive" src="images/extruflex/plasticos.jpg"  width="100" height="120"></td></tr>
        </table>
       </div>

       <div class="col-sm-2 color8"><table>
         <tr><td align="center"><h4>Cortinas de Aire</h4></td></tr>
        <tr><td align="center"><img class="img-responsive" src="images/mars_airs/marsLogo.jpg"  width="150" height="120"></td></tr>
        <tr><td align="center"><img class="img-responsive" src="images/mars_airs/HV2_SERIES.jpg"  width="100" height="200"></td></tr>
        </table>
       </div>

       <div class="col-sm-2"><table>
        <tr><td align="center"><h4>Productos Ferreteros</h4>
        <tr><td align="center"><img class="img-responsive" src="images/ferretero/urreasurtekLogo.jpg"  width="150" height="120"></td></tr>
        <tr><td align="center"><img class="img-responsive" src="images/ferretero/nudoRanurado.jpg"  width="100" height="120"></td></tr>
        </table>
       </div>

     </div>
   </div>


  <!--aqui se acaba el segundo row-->

    </section>

    <footer class="container-fluid">
       <div class="row">
          <div class="col-xs-12  color7 text-center">
          <h4><font color="white">Derechos reservados &copy;</font></h4>
        </div>
      </div>
    </footer>


	<script src="js/bootstrap.js"></script>
</body>
</html>