<<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
  <title>SIUT WEB-Reportes</title>
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

  <style>
    @media screen and (max-width: 320px){
      table{
        display: block;
        overflow-x: auto;
      }
      tr:nth-of-type(2n){
        background-color: inherit; 
      }
    }
    @media screen and (max-width: 600px) {
      table{
        width: 90%;
        display: block;
        overflow: auto;
      }
    }
  </style>

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
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-facebook"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-instagram"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-8 text-center text-lg-right">
          <ul class="list-inline">
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="notice.html">Noticias</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="scholarship.html">¡Soy Utsoe!</a></li>
            <li class="list-inline-item btn-danger"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#" data-toggle="modal" data-target="#loginModal">Cerrar Sesión</a></li>
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
            <li class="nav-item @@inicio">
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
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="Alumno-EditarDatosPersonales.php">Editar Datos Personales</a>
                <a class="dropdown-item" href="Alumno-Pagos.php">Pagos</a>
                <a class="dropdown-item" href="#">Reinscripción en Línea</a>
              </div>
            </li>
            <li class="nav-item dropdown view active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                REPORTES
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Adeudos de Alumnos</a>
                    <a class="dropdown-item" href="#">Consulta Promedios</a>
                    <a class="dropdown-item" href="alumno-ReportDocumentacion.php">Concultar Documentación Electrónica</a>
                    <a class="dropdown-item active" href="alumno-ReportCalificaciones.php">Concultar Mis Calificaciones</a>
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
        <h2 class="section-title" style="text-align: center;">Concentrado de Evaluaciones</h2>
        <!--Espacio para editar esta seccion sin cambiar las clases 
        	para que no se pierda el diseño
        	*******Si no Requieres de un titulo quita el <h2>******* -->
      </div>
    </div>
    <div class="row justify-content-center">
    	<div class="row col-sm-12 col-md-12 col-lg-12">
        <section class="card p-0 border-primary rounded-0 hover-shadow col-sm-12 col-md-12 col-lg-12">
          <div class="card-body col-sm-12 col-md-12 col-lg-12">
            <form action="" class="col-sm-12 col-md-12 col-lg-12" >
              <div class="form-row">
                
                <div class="form-group col-sm-8 col-md-8 col-lg-8">
                   <div class="col-lg-8">
                    <img src="http://201.116.195.195/sinut/Fotos/141810169.jpg" alt="" class="img" style=" height: 150px; display: block; margin-left: auto; margin-right: auto;">
                   </div> 
                  <br>
                  <label class="list-inline mb-2">Nombre</label>
                  <input type="text" name="nombre" disabled="" class="form-control " placeholder="José Santiago Ávila García">
                  <label class="">Carrera</label>
                  <input type="email" name="correo" disabled="" class="form-control border-0" placeholder="Ing. en Gestión y Desarrollo de Software">
                </div>
                <div class="form-group col-md-4 col-sm-4 col-lg-4 ">
                  <label class="">Matricular</label>
                  <input type="number" name="celular" disabled="" class="form-control border-0" placeholder="141810169">
                  <label class="">Cuatrimestre Actual</label>
                  <input type="number" name="telefono" disabled="" class="form-control border-0" placeholder=" 8">
                  <label class="">Estatus</label>
                  <input type="number" name="typesangre" disabled="" class="form-control border-0" placeholder="Regular">
                  <label class="">Correo</label>
                  <input type="number" name="tutor" disabled="" class="form-control border-0" placeholder="santiagoavilagarcia23z@gmail.com">
                </div>
                  <label for="">Consultar Boleta ░░ </label>
                  <br/>
                  <a href="#" data-toggle="modal" data-target="#calific"> Cuatri. 7-A(Sep-Dic-2020)</a>                
              </div>
            </form>
          </div>  
        </section>
        <br> 
        <div class="modal fade" id="calific" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content rounded-0 border-0 p-4" style="margin-top: 100px;">
              <table  cellspacing="0" rules="all" border="1" id="cphContenidoGenerak_Grid0" style="font-size:9pt;width:auto;border-collapse:collapse;">
                <tr style="color:White;background-color:#005FAA;">
                  <th align="center" scope="col">Faltas</th><th scope="col">Nombre de Materia</th><th scope="col">Nombre del Maestro</th><th scope="col">Ut. 1</th><th scope="col">Ut. 2</th><th scope="col">Ut. 3</th><th scope="col">Ut. 4</th><th scope="col">Global</th><th scope="col">Final</th><th scope="col">Un.</th><th scope="col">Tipo</th><th scope="col">Ut 1 Op 2</th><th scope="col">Ut 2 Op 2</th><th scope="col">Ut 3 Op 2</th><th scope="col">Ut 4 Op 2</th><th scope="col">Ut 1 Op 3</th><th scope="col">Ut 2 Op 3</th><th scope="col">Ut 3 Op 3</th><th scope="col">Ut 4 Op 3</th>
                </tr>
                <tr>
                  <td align="center">0</td><td>Ingl&#233;s VI</td><td>G&#243;mez Ju&#225;rez Juan Manuel</td><td align="center">AU</td><td align="center">AU</td><td align="center">AU</td><td align="center">░░</td><td align="center">&nbsp;</td><td align="center">AU</td><td align="center">3</td><td align="center">Ni</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td>
                </tr>
                <tr>
                  <td align="center">0</td><td>Metodolog&#237;as para el Desarrollo de Proyectos</td><td>Rico Moreno Jos&#233; Luis</td><td align="center">CA</td><td align="center">CA</td><td align="center">CA</td><td align="center">░░</td><td align="center">&nbsp;</td><td align="center">CA</td><td align="center">3</td><td align="center">In</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td>
                </tr>
                <tr>
                  <td align="center">0</td><td>Administraci&#243;n del Tiempo</td><td>Moreno Gonz&#225;lez Claudia Adriana</td><td align="center">AU</td><td align="center">AU</td><td align="center">░░</td><td align="center">░░</td><td align="center">&nbsp;</td><td align="center">AU</td><td align="center">2</td><td align="center">Ni</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td>
                </tr>
                <tr>
                  <td align="center">0</td><td>Experiencia de Usuario</td><td>N&#250;&#241;ez Arroyo Rosa Martha</td><td align="center">AU</td><td align="center">DE</td><td align="center">AU</td><td align="center">░░</td><td align="center">&nbsp;</td><td align="center">AU</td><td align="center">3</td><td align="center">Ni</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td>
                </tr>
                <tr>
                  <td align="center">0</td><td>Arquitecturas de Software</td><td>ADAME VENEGAS MARIO ALBERTO</td><td align="center">SA</td><td align="center">AU</td><td align="center">DE</td><td align="center">░░</td><td align="center">&nbsp;</td><td align="center">DE</td><td align="center">3</td><td align="center">Ni</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td>
                </tr>
                <tr>
                  <td align="center">0</td><td>Seguridad Inform&#225;tica</td><td>Cano Contreras Mart&#237;n</td><td align="center">AU</td><td align="center">AU</td><td align="center">AU</td><td align="center">░░</td><td align="center">&nbsp;</td><td align="center">AU</td><td align="center">3</td><td align="center">Ni</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td>
                </tr>
                <tr>
                  <td align="center">0</td><td>Matem&#225;ticas para Ingenier&#237;a I</td><td>Barr&#243;n Adame Jos&#233; Miguel</td><td align="center">SA</td><td align="center">DE</td><td align="center">AU</td><td align="center">AU</td><td align="center">&nbsp;</td><td align="center">DE</td><td align="center">4</td><td align="center">Ni</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td><td align="center">&nbsp;</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
	  </div>
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