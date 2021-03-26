
<?php

//Iniciar sesión
require_once("../controlador/controlador.php");
@session_start();

if(isset($_SESSION['Usuario'])){

  $Usuario=$_SESSION['Usuario'];
  $Tipo=$_SESSION['Tipo'];
  $IdUsuarios=$_SESSION['IdUsuarios'];

  if($Tipo != 1){
    @session_destroy();
     header("Location: index.php");
  }
  
}else{
  @session_destroy();
  echo "<script>alert('Incia Sesión');
  window.location.href='../vistas/index.php';
  </script>";
}

?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
  <title>SIUT WEB-Profesor</title>
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
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-facebook"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-instagram"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-8 text-center text-lg-right">
          <ul class="list-inline">
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="notice.html">Noticias</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" onclick="CerrarSesion()">Cerrar Sesión</a></li>
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
            <li class="nav-item active">
              <a class="nav-link" href="index.html">INICIO</a>
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
                <a class="dropdown-item" href="#">Carreras</a>
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
                    <a class="dropdown-item" href="#">Concultar Calificaciones</a>
                </div>
            </li>
            <li class="nav-item dropdown view">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Utilerías
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="margin-left: -60px; ">
                    <a class="dropdown-item" href="#">Cambio de Contraseña</a>
                    <a class="dropdown-item" href="#">Editar Datos Personales</a>
                    <a class="dropdown-item" href="#">Seguimiento de Egresados</a>
                </div>
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
<section class="hero-section by-cover" style="padding: 180px 0 290px">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="section-title" style="text-align: center;">Bienvenido</h2>
        <!--Espacio para editar esta seccion sin cambiar las clases 
        	para que no se pierda el diseño
        	*******Si no Requieres de un titulo quita el <h2>******* -->
      </div>
    </div>
    <div class="row justify-content-center">
    	<!--En este espacio puedes agrear el contenido correspondiente 
    		a la pagina que te corresponde editar-->
    		<!--AQUI PUEDES AGREGAR TUS DIV, ETIQUETAS HTML, ETC QUE REQUIERAS y poner
    			las CLASS que consideres buenas para el diseño-->
      <div class="row col-sm-12 col-md-12 col-lg-12">
         <!-- courses -->
        <section class="section-sm">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <!-- <div class="d-flex align-items-center section-title justify-content-between">
                  <h2 class="mb-0 text-nowrap mr-3">Mi Clase</h2>
                </div> -->
              </div>
            </div>
            <!-- course list -->
        <div class="row justify-content-center">
          <!-- course item -->
          <div class="col-lg-3 col-sm-3 mb-4">
            <div class="card p-0 border-primary rounded-0 hover-shadow">
              <img class="card-img-top rounded-0" src="images/courses/course-1.jpg" alt="course thumb">
              <div class="card-body">
                <!-- <ul class="list-inline mb-2">
                  <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>22-11-2012</li>
                </ul> -->
                <a href="course-single.html">
                  <h4 class="card-title">Calificaciones</h4>
                </a>
                <!-- <p class="card-text mb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                  incididunt ut labore et dolore magna.</p> -->
                <a href="#" class="btn btn-primary btn-sm">Ingresar</a>
              </div>
            </div>
          </div>
          <!-- course item -->
          <div class="col-lg-3 col-sm-3 mb-4">
            <div class="card p-0 border-primary rounded-0 hover-shadow">
              <img class="card-img-top rounded-0" src="images/courses/course-2.jpg" alt="course thumb">
              <div class="card-body">
                <!-- <ul class="list-inline mb-2">
                  <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>21-07-2008</li>
                </ul> -->
                <a href="course-single.html">
                  <h4 class="card-title">Reportes</h4>
                </a>
                <!-- <p class="card-text mb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                  incididunt ut labore et dolore magna.</p> -->
                <a href="#" class="btn btn-primary btn-sm">Ingresar</a>
              </div>
            </div>
          </div>
          <!-- course item -->
          <div class="col-lg-3 col-sm-3 mb-4">
            <div class="card p-0 border-primary rounded-0 hover-shadow">
              <img class="card-img-top rounded-0" src="images/courses/course-3.jpg" alt="course thumb">
              <div class="card-body">
                <!-- <ul class="list-inline mb-2">
                  <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
                </ul> -->
                <a href="course-single.html">
                  <h4 class="card-title">Reprobados</h4>
                </a>
                <!-- <p class="card-text mb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                  incididunt ut labore et dolore magna.</p> -->
                <a href="#" class="btn btn-primary btn-sm">Ingresar</a>
              </div>
            </div>
          </div>
          <!-- course item -->
          <div class="col-lg-3 col-sm-3 mb-4">
            <div class="card p-0 border-primary rounded-0 hover-shadow">
              <img class="card-img-top rounded-0" src="images/courses/course-4.jpg" alt="course thumb">
              <div class="card-body">
                <!-- <ul class="list-inline mb-2">
                  <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>12-12-2018</li>
                </ul> -->
                <a href="course-single.html">
                  <h4 class="card-title">Utilerias</h4>
                </a>
                <!-- <p class="card-text mb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                  incididunt ut labore et dolore magna.</p> -->
                <a href="#" class="btn btn-primary btn-sm">Ingresar</a>
              </div>
            </div>
          </div>
        </div>
        <!-- /course list -->
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

<script>
  function CerrarSesion(){
    var resp = window.confirm("¿Deseas cerrar sesión?");
    if(resp == true){
      window.alert('¡Hasta la proxima!');
      window.location.href='../controlador/logout.php';
    }else{
      return false;
    }

  }
</script>
</body>
</html>
