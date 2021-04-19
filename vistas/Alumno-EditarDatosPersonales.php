<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
  <title>SIUT WEB</title>
  <i class="fas fa-tilde    "></i>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <!-- animation css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- aos -->
  <link rel="stylesheet" href="plugins/aos/aos.css">
  <!-- venobox popup -->
  <link rel="stylesheet" href="plugins/venobox/venobox.css">

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
  <link rel="icon" href="images/favicon.png" type="image/x-icon">

</head>
<body>
	<!-- preloader start -->
  <div class="preloader">
    <img src="images/preloader.gif" alt="preloader">
  </div>
  <!-- preloader end -->

<!-- header -->
<header class="fixed-top header">
  <!-- top header -->
  <div class="top-header py-2 bg-white">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-4 text-center text-lg-left">
          <ul class="list-inline d-inline">
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://es-la.facebook.com/UTSOE/"><i class="ti-facebook"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-instagram"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-8 text-center text-lg-right">
          <ul class="list-inline">
            <!--<li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="notice.html">Noticias</a></li>-->
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="soyutsoe.html">¡Soy Utsoe!</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#loginModal">Cerrar Sesión</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="research.html">Buscar</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- navbar -->
  <div class="navigation w-100">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark p-0">
        <a class="navbar-brand" href="index.html"><img src="images/utsoe.png" alt="logo" style="width: auto; height: 70px;"></a>
        <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation" style="margin-left: -10px;">
          <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item">
              <a class="nav-link" href="index.html">INICIO</a>
            </li>
            
            <li class="nav-item @@blog">
              <a class="nav-link" href="blog.html">BLOG</a>
            </li>
            <li class="nav-item @@events">
              <a class="nav-link" href="events.html">EVENTOS</a>
            </li>
            <li class="nav-item @@courses">
              <a class="nav-link" href="courses.html">CURSOS</a>
            </li>
            <li class="nav-item dropdown view">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                ALUMNOS
              </a>
              <div class="dropdown-menu active" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="Alumno-EditarDatosPersonales.php">Editar Datos Personales</a>
                <a class="dropdown-item" href="Alumno-Pagos.php">Pagos</a>
                <a class="dropdown-item" href="#">Reinscripción en Línea</a>
              </div>
            </li>
            <li class="nav-item dropdown view">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                REPORTES
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Adeudos de Alumnos</a>
                    <a class="dropdown-item" href="#">Consulta Promedios</a>
                    <a class="dropdown-item" href="alumno-ReportDocumentacion.php">Concultar Documentación Electrónica</a>
                    <a class="dropdown-item" href="alumno-ReportCalificaciones.php">Concultar Mis Calificaciones</a>
                    <a class="dropdown-item" href="Alumno-HistorialDePagos.php">Historial de Pagos</a>
                    <a class="dropdown-item" href="#">Reimprime Formato de Inscripción</a>
                </div>
            </li>
            <li class="nav-item dropdown view">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Utilerías
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="margin-left: -60px; ">
                    <a class="dropdown-item" href="#">Cambio de Contraseña</a>
                    <a class="dropdown-item" href="#">Internacionalización</a>
                    <a class="dropdown-item" href="#">Cursos de Educación</a>
                    <a class="dropdown-item" href="#">Servicios Tecnológicos</a>
                    <a class="dropdown-item" href="#">Incubadora de Negocios</a>
                    <a class="dropdown-item" href="#">Estadías</a>
                    <a class="dropdown-item" href="#">Seguimiento de Egresados</a>
                </div>
            </li>
            <li class="nav-item @@contact">
              <a class="nav-link" href="contact.html">CONTACT</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>
<!-- /header -->

<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Register</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login">
                    <form action="#" class="row">
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupPhone" name="signupPhone" placeholder="Phone">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupName" name="signupName" placeholder="Name">
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control mb-3" id="signupEmail" name="signupEmail" placeholder="Email">
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control mb-3" id="signupPassword" name="signupPassword" placeholder="Password">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">SIGN UP</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Login</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" class="row">
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginPhone" name="loginPhone" placeholder="Phone">
                    </div>
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginName" name="loginName" placeholder="Name">
                    </div>
                    <div class="col-12">
                        <input type="password" class="form-control mb-3" id="loginPassword" name="loginPassword" placeholder="Password">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- SECCION DONDE SE EDITARA EL CONTENIDO DE CADA PAGINA CORRESPONDIENTE-->
<!--Si NO ENTIENDES LA FUNCION DE UNA CLASS PREGUNTA!!!  No modifiques la lineas de CLASS-->
<section class="hero-section by-cover">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="section-title" style="text-align: center;">Editar Datos Personales</h2>
        <!--Espacio para editar esta seccion sin cambiar las clases 
        	para que no se pierda el diseño
        	*******Si no Requieres de un titulo quita el <h2>******* -->
      </div>
    </div>
    <div class="row justify-content-center">
      <table cellspacing="5" class="FuenteContenidosOpal" align="center">
        <tr>
            <td colspan="6">
                <div id="ContenidoGeneralInformacion">
  
                    <table cellspacing="5" class="style2">
                        <tr>
                            <td align="center">
                                <input name="txtTelCasa" type="text" value="" maxlength="10" id="ContenidotxtTelCasa" tabindex="5" title="Solo ingresa los 10 dígitos sin clave lada" class="CentradoTextoCajas" onkeypress="return numeros(this,event)" style="border-color:#003366;width:84px;" />
                                <span id="TelCasa" style="color:Red;visibility:hidden;">*</span>
                                <br />
                                Tel.casa&nbsp;<span id="TelCasa" style="color:Red;visibility:hidden;">*</span>
                            </td>
                            <td align="center">
                                <input name="txtCelular" type="text" value="" maxlength="10" id="ContenidotxtCelular" tabindex="6" title="Solo ingresa los diez dígitos sin clave lada" class="CentradoTextoCajas" onkeypress="return numeros(this,event)" style="border-color:#003366;width:84px;" />
                                <br />
                                Tel. celular<span id="Celular" style="color:Red;visibility:hidden;">*</span>
                            </td>
                            <td align="center">
                                <input name="txtEmail" type="text" value="" maxlength="45" id="ContenidotxtEmail" tabindex="7" style="border-color:#003366;font-size:9pt;height:21px;width:190px;" />
                                <br />
                                Correo electrónico<span id="Email" class="FuenteContenidosOpal" style="color:Red;visibility:hidden;">*</span>
                                <span id="cphContenidoGenerak_RequiredFieldValidator27" class="Validadores" style="visibility:hidden;">*</span>
                            </td>
                            <td>
                                Sexo
                                <input id="Masculino" type="radio" name="ContenidoSexo" value="rdoMasculino" /><label for="cphContenidoGenerak_rdoMasculino">Masculino</label>
                            </td>
                            <td>
                                <input id="Femenino" type="radio" name="ContenidoSexo" value="rdoFemenino" checked="checked" /><label for="cphContenidoGenerak_rdoFemenino">Femenino</label>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5">
                                <table cellspacing="5" class="style2">
                                    <tr>
                                        <td class="style4">
                                            Zona de domicilio</td>
                                        <td class="style5">
                                            <input id="Rural" type="radio" name="ctl00$cphContenidoGenerak$Zona" value="rdoRural" checked="checked" /><label for="Rural">Rural</label>
                                        </td>
                                        <td class="style6">
                                            <input id="Urbana" type="radio" name="ctl00$cphContenidoGenerak$Zona" value="rdoUrbana" /><label for="Urbana">Urbana</label>
                                        </td>
                                        <td align="center">
               <select name="ContenidoTipoDeSangre" id="Tipo" class="CentradoTextoCajas">
<option selected="selected" value="0">N/S</option>
    <option value="1">A +</option>
    <option value="2">B +</option>
    <option value="3">A -</option>
    <option value="4">B -</option>
    <option value="5">O +</option>
    <option value="6">O -</option>
    <option value="7">AB +</option>
    <option value="8">AB -</option>
    <option value="9">OTRA</option>

</select>
                <br />
                Grupo sanguíneo
               
                        </td>
                                        <td align="right">
                                            <input type="submit" name="ctl00$cphContenidoGenerak$btnGuardar" value="Actualizar datos" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$cphContenidoGenerak$btnGuardar&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="cphContenidoGenerak_btnGuardar" class="Botones" />
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                
</div>
            </td>
        </tr>
        </table>

                    </td>
                    <td style="width: 9px; background-color: #e9f1f5; background-repeat: repeat-y;">
                        &nbsp;
                    </td>
                </tr>
            </table>

  </div>
</section>
<!-- /blog -->


<!-- SECCION DONDE TERMINA EL CONTENIDO DE CADA PAGINA CORRESPONDIENTE-->

<!-- footer -->
<footer>
  <!--newsletter
  <div class="newsletter">
    <div class="container">
      <div class="row">
        <div class="col-md-9 ml-auto bg-primary py-5 newsletter-block">
          <h3 class="text-white">Subscribe Now</h3>
          <form action="#">
            <div class="input-wrapper">
              <input type="email" class="form-control border-0" id="newsletter" name="newsletter" placeholder="Enter Your Email...">
              <button type="submit" value="send" class="btn btn-primary">Join</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
	-->
  <!-- footer content -->
  <div class="footer bg-footer section border-bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-8 mb-5 mb-lg-0">
          <!-- logo -->
          <a class="logo-footer" href="index.html"><img class="img-fluid mb-4" src="images/utsoe.png" alt="logo"></a>
          <ul class="list-unstyled">
            <li class="mb-2">Carr. Valle-Huanimaro km 1.2 Valle de Santiago, Gto.</li>
            <li class="mb-2">(01) 456 643 7180</li>
            <li class="mb-2">(01) 456 643 7188</li>
            <li class="mb-2">rectoria@utsoe.edu.mx</li>
          </ul>
        </div>
        <!-- Comunicate -->
        <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">Comunícate con nosotros</h4>
          <ul class="list-unstyled">
            <p class="mb-3" class="text-color" style="text-align: justify-all">Para nosotros es muy importante conocer tus inquietudes, quejas, sugerencias y/o felicitaciones</p>
          </ul>
        </div>
        <!-- links -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">LINKS</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="courses.html">SUIT</a></li>
            <li class="mb-3"><a class="text-color" href="event.html">COMUT</a></li>
            <li class="mb-3"><a class="text-color" href="gallary.html">NOTICIAS</a></li>
            
          </ul>
        </div>
        <!--Sitios de interes-->
        <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">Sitios de interés</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="#">Acceso a la Información</a></li>
            <li class="mb-3"><a class="text-color" href="#">Armonización Contable</a></li>
            <li class="mb-3"><a class="text-color" href="#">Consejo Directivo</a></li>
            <li class="mb-3"><a class="text-color" href="#">Normateca</a></li>
            <li class="mb-3"><a class="text-color" href="#">Controlatoria Social</a></li>
            <li class="mb-3"><a class="text-color" href="#">SGCA</a></li>
            <li class="mb-3"><a class="text-color" href="#">Comité de Ambiental</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- copyright -->
  <div class="copyright py-4 bg-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 text-sm-left text-center">
          <p class="mb-0">Copyright
            <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script> 
            © ABHH</p>
        </div>
        <div class="col-sm-5 text-sm-right text-center">
          <ul class="list-inline">
            <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-facebook text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="#"><i class="ti-instagram text-primary"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- /footer -->

<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- aos -->
<script src="plugins/aos/aos.js"></script>
<!-- venobox popup -->
<script src="plugins/venobox/venobox.min.js"></script>
<!-- filter -->
<script src="plugins/filterizr/jquery.filterizr.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
<script src="plugins/google-map/gmap.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>
</body>
</html>