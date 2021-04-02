
<?php

//Iniciar sesión
require_once("../controlador/controlador.php");
require_once("../controlador/logoutexp.php");
@session_start();

if(isset($_SESSION['Usuario'])){

  $Usuario=$_SESSION['Usuario'];
  $Tipo=$_SESSION['Tipo'];
  $IdUsuarios=$_SESSION['IdUsuarios'];

  if($Tipo != 3){
    @session_destroy();
     header("Location: index.php");
  }

  }else{
  @session_destroy();
  echo "<script>alert('Incia Sesión');
  window.location.href='../vistas/index.php';
  </script>";
  
}

//Comprobamos si esta definida la sesión 'tiempo'.
if(isset($_SESSION['tiempo']) ) {

  //Tiempo en segundos para dar vida a la sesión.
  $inactivo = 10;//20min en este caso.

  //Calculamos tiempo de vida inactivo.
  $vida_session = time() - $_SESSION['tiempo'];

      //Compraración para redirigir página, si la vida de sesión sea mayor a el tiempo insertado en inactivo.
      if($vida_session > $inactivo)
      {
          //Removemos sesión.
          session_unset();
          //Destruimos sesión.
          session_destroy();    
        
          //Redirigimos pagina.
          header("Location: index.php");

          exit();
      }

    }

    $_SESSION['tiempo'] = time();

?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>SIUT WEB</title>

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
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block"  onclick="CerrarSesion()" >Cerrar Sesión</a></li>
            <!-- <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="" data-toggle="modal" data-target="#loginModal">login</a></li> -->
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
            <li class="nav-item @@home">
              <a class="nav-link" href="index.html">INICIO</a>
            </li>
            <li class="nav-item @@blog">
              <a class="nav-link" href="blog.html">BLOG</a>
            </li>
            <li class="nav-item @@courses">
              <a class="nav-link" href="eventns.html">EVENTOS</a>
            </li>
            <li class="nav-item @@courses">
              <a class="nav-link" href="courses.html">CURSOS</a>
            </li>
            
            <li class="nav-item dropdown view">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                ESCOLARES
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="teacher.html">Trámites y Servicios</a>
                <a class="dropdown-item" href="teacher-single.html">Becas</a>
                <a class="dropdown-item" href="notice.html">Servicios Social</a>
                <a class="dropdown-item" href="notice-single.html">Resultados de Exámenes</a>
                <a class="dropdown-item" href="research.html">Proceso de Titulación</a>
                <a class="dropdown-item" href="scholarship.html">Calendario Escolar</a>
                <a class="dropdown-item" href="event-single.html">SIUT</a>
                <a class="dropdown-item" href="blog-single.html">COMUT</a>
              </div>
            </li>
            <li class="nav-item dropdown view">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                VINVULACIÓN
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="teacher.html">Internacionalización</a>
                    <a class="dropdown-item" href="teacher.html">Cursos de Educación</a>
                    <a class="dropdown-item" href="teacher.html">Servicios Tecnológicos</a>
                    <a class="dropdown-item" href="teacher.html">Incubadora de Negocios</a>
                    <a class="dropdown-item" href="teacher.html">Estadías</a>
                    <a class="dropdown-item" href="teacher.html">Seguimiento a Egresados</a>
                </div>
            </li>
            <li class="nav-item dropdown view">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                TRANSPARENCIA
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="margin-left: -60px; ">
                    <a class="dropdown-item" href="teacher.html">Acceso a la Información</a>
                    <a class="dropdown-item" href="teacher.html">Armonización contable</a>
                    <a class="dropdown-item" href="teacher.html">Consejo Directivo</a>
                    <a class="dropdown-item" href="teacher.html">Normateca</a>
                    <a class="dropdown-item" href="teacher.html">Contraloria Social</a>
                    <a class="dropdown-item" href="teacher.html">Comité de Ética</a>
                    <a class="dropdown-item" href="teacher.html">SGCA</a>
                    <a class="dropdown-item" href="teacher.html">Comité De Ambiental</a>
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

<div class="modal fade" id="ModalUsuario" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Registro de usuario del alumno</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login">
                    <form action="../controlador/guardarUsuarios.php" class="row" method="post">
                        <div class="col-6">
                            <input type="text" class="form-control mb-3" id="Usuario" name="Usuario" placeholder="Usuario" required>
                        </div>
                        <div class="col-6">
                            <input type="password" class="form-control mb-3" id="Password" name="Password" placeholder="Contraseña" required>
                        </div>
                        <div class="col-6">
                          <select class="form-select form-control mb-3" name="Tipo" aria-label="Default select example" required>
                              <option selected>-- Selecciona el tipo de usuario --</option>
                              <option value="1">Profesor</option>
                              <option value="2">Alumno</option>
                              <option value="3">Administrador</option>
                          </select>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="ModalAlumn" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Registro de alumno</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login">
                    <form action="../controlador/guardarAlumnos.php" class="row" method="post">
                        <div class="col-6">
                            <input type="text" class="form-control mb-3" id="Matricula" name="Matricula" placeholder="Matricula" required>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control mb-3" id="NombreA" name="NombreA" placeholder="Nombre(s)" required>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control mb-3" id="ApellidoPA" name="ApellidoPA" placeholder="Apellido paterno" required>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control mb-3" id="ApellidoMA" name="ApellidoMA" placeholder="Apellido materno" required>
                        </div>
                        <div class="col-6">
                          <select class="form-select form-control mb-3" name="SexoA" aria-label="Default select example" required>
                              <option selected>-- Selecciona el sexo --</option>
                              <option value="Masculino">Masculino</option>
                              <option value="Femenino">Femenino</option>
                          </select>
                        </div>
                        <div class="col-6">
                          <input type="date" class="form-control mb-3" id="FechaNA" name="FechaNA" placeholder="Fecha de Nacimiento" required>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control mb-3" id="TelCasaA" name="TelCasaA" placeholder="Telefono de Casa">
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control mb-3" id="TelCelularA" name="TelCelularA" placeholder="Telefono celular">
                        </div>
                        <div class="col-6">
                          <select class="form-select form-control mb-3" name="ZonaDomicilioA" aria-label="Default select example" required> 
                              <option selected>-- Selecciona la zona --</option>
                              <option value="Urbana">Urbana</option>
                              <option value="Rural">Rural</option>
                           </select>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control mb-3" id="GrupoSanguineoA" name="GrupoSanguineoA" placeholder="Grupo Sanguineo" required>
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control mb-3" id="EmailA" name="EmailA" placeholder="Email" required>
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" name="IdUsuarios">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="ModalProf" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Registro de profesor</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login">
                    <form action="../controlador/guardarProfesor.php" class="row" method="post">
                    <div class="col-6">
                            <input type="text" class="form-control mb-3" id="NumEmpleado" name="NumEmpleado" placeholder="Número de empleado" required>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control mb-3" id="NombreP" name="NombreP" placeholder="Nombre(s)" required>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control mb-3" id="ApellidoPP" name="ApellidoPP" placeholder="Apellido paterno" required>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control mb-3" id="ApellidoMP" name="ApellidoMP" placeholder="Apellido materno" required>
                        </div>
                        <div class="col-6">
                          <select class="form-select form-control mb-3" name="SexoP" aria-label="Default select example" required>
                              <option selected>-- Selecciona el sexo --</option>
                              <option value="Masculino">Masculino</option>
                              <option value="Femenino">Femenino</option>
                          </select>
                        </div>
                        <div class="col-6">
                          <input type="date" class="form-control mb-3" id="FechaNP" name="FechaNP" placeholder="Fecha de Nacimiento" required>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control mb-3" id="TelCasaP" name="TelCasaP" placeholder="Telefono de Casa">
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control mb-3" id="TelCelularP" name="TelCelularP" placeholder="Telefono celular">
                        </div>
                        <div class="col-6">
                          <select class="form-select form-control mb-3" name="ZonaDomicilioP" aria-label="Default select example" required>
                              <option selected>-- Selecciona la zona --</option>
                              <option value="Masculino">Urbana</option>
                              <option value="Femenino">Rural</option>
                           </select>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control mb-3" id="GrupoSanguineoP" name="GrupoSanguineoP" placeholder="Grupo Sanguineo" required>
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control mb-3" id="EmailP" name="EmailP" placeholder="Email" required>
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" name="IdUsuarios">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="ModalMateria" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Registro de materias</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login">
                    <form action="../controlador/guardarMateria.php" class="row" method="post">
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="NumeroMateria" name="NumeroMateria" placeholder="Identificación de la materia" required> 
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="NombreMateria" name="NombreMateria" placeholder="Nombre de la materia" required>
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="HorasM" name="HorasM" placeholder="Horas" required>
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="UnidadesTotalesM	" name="UnidadesTotalesM" placeholder="Numero de unidades totales" required>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="ModalCarrera" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Registro de nueva carrera</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login">
                    <form action="../controlador/guardarCarrera.php" class="row" method="post">
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="IdentifcacionCarrera" name="IdentifcacionCarrera" placeholder="Identificación de la carrera" required>
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="NombreCarrera" name="NombreCarrera" placeholder="Nombre" required>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<!-- <div class="modal fade" id="ModalCuatrimestre" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Registro de nuevo cuatrimestre</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login">
                    <form action="../controlador/guardarCarrera.php" class="row" method="post">
                        <div class="col-12">
                          <select class="form-select form-control mb-3" name="Grado" aria-label="Default select example">
                              <option selected>-- Selecciona el grado --</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">10</option>
                              <option value="11">11</option>
                              <option value="12">12</option>
                              <option value="13">13</option>
                          </select>
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="Periodo" name="Periodo" placeholder="Periodo">
                        </div>
                        <div class="col-6">
                          <select class="form-select form-control mb-3" name="Turno" aria-label="Default select example">
                          <option selected>-- Selecciona el turno --</option>
                              <option value="Matutino">Matutino</option>
                              <option value="Vespertino">Vespertino</option>
                              <option value="Vespertino">Estadia</option>
                          </select>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->



<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Bienvenido</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        <!-- <p class="text-lighten">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p> -->
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- Registros -->
<section class="section">
  <div class="container">
    <div class="row">

      <!-- Carrera -->
      <article class="col-lg-3 col-sm-6 mb-5">
        <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
          <img class="card-img-top rounded-0" src="images/blog/post-3.jpg" alt="Post thumb">
          <div class="card-body mx-auto">
            <h4 class="card-title">Datos de la carrera.</h4>
            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#ModalCarrera">Registra carrera</a>
          </div>
        </div>
      </article>
    
      <!-- Asignatura -->
      <article class="col-lg-3 col-sm-6 mb-5">
        <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
          <img class="card-img-top rounded-0" src="images/blog/post-1.jpg" alt="Post thumb">
          <div class="card-body mx-auto">
            <h4 class="card-title">Datos de la materia.</h4>
            <a href="" class="btn btn-primary"  data-toggle="modal" data-target="#ModalMateria">Registra materia</a>
          </div>
        </div>
      </article>

       <!-- Profesor usuario -->
       <article class="col-lg-3 col-sm-6 mb-5">
        <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
          <img class="card-img-top rounded-0" src="images/blog/post-3.jpg" alt="Post thumb">
          <div class="card-body mx-auto">
          <h4 class="card-title">Sesión de usuario.</h4>
            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#ModalUsuario">Registra sesión</a>
          </div>
        </div>
      </article>

     
      <!-- Profesor -->
      <article class="col-lg-3 col-sm-6 mb-5">
        <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
          <img class="card-img-top rounded-0" src="images/blog/post-3.jpg" alt="Post thumb">
          <div class="card-body mx-auto">
          <h4 class="card-title">Datos del profesor.</h4>
            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#ModalProf">Registra profesor</a>
          </div>
        </div>
      </article>

       <!-- Alumno -->
       <article class="col-lg-3 col-sm-6 mb-5">
        <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
          <img class="card-img-top rounded-0" src="images/blog/post-2.jpg" alt="Post thumb">
          <div class="card-body mx-auto">
          <h4 class="card-title">Datos del alumno.</h4>
            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#ModalAlumn">Registra alumno</a>
          </div>
        </div>
      </article>

       <!-- Curso -->
       <article class="col-lg-3 col-sm-6 mb-5" >
        <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
          <img class="card-img-top rounded-0" src="images/blog/post-2.jpg" alt="Post thumb">
          <div class="card-body mx-auto">
          <h4 class="card-title">Datos del curso.</h4>
            <a href="" class="btn btn-primary " data-toggle="modal" data-target="#ModalAlumn">Crear Curso</a>
          </div>
        </div>
      </article>


    

      <!-- Cutrismestre? -->
      <!-- <article class="col-lg-3 col-sm-6 mb-5">
        <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
          <img class="card-img-top rounded-0" src="images/blog/post-3.jpg" alt="Post thumb">
          <div class="card-body">
            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#ModalCuatrimestre">Registrar Cuatrimestre</a>
          </div>
        </div>
      </article> -->
    </div>
  </div>
</section>
<!-- /blogs -->

<!-- footer -->
<footer>
  <!-- newsletter -->
  <!-- <div class="newsletter">
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
  </div> -->
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
            <li class="mb-3"><a class="text-color" href="#">Convocatorias</a></li>
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

 <!-- <div class="col-12">
                          <select class="form-select form-control mb-3" name="carrera" aria-label="Default select example">
                              <option selected>-- Selecciona la carrera --</option>
                              <option value="Tecnologias de la Información Área de Desarrollo de Software Multiplataforma">Tecnologias de la Información Área de Desarrollo de Software Multiplataforma</option>
                              <option value="Diseño y Moda industrial Área producción">Diseño y Moda industrial Área producción</option>
                              <option value="Agricultura Sustentable y Protegida">Agricultura Sustentable y Protegida</option>
                              <option value="Terapia Fisica y Rehabilitación">Terapia Fisica y Rehabilitación</option>
                              <option value="Mantenimiento Área Industrial">Mantenimiento Área Industrial</option>
                              <option value="Desarrollo de Negocios">Desarrollo de Negocios</option>
                              <option value="Procesos Alimenticios">Procesos Alimenticios</option>
                              <option value="Energias Renovables">Energias Renovables</option>
                              <option value="Contaduria">Contaduria</option>
                              <option value="Mecánica">Mecánica</option>
                            </select>
                        </div>
                        <div class="col-6">
                          <select class="form-select form-control mb-3" name="nivel" aria-label="Default select example">
                          <option selected>-- Selecciona nivel de estudios --</option>
                              <option value="TSU">TSU</option>
                              <option value="Licenciatura">Licenciatura</option>
                              <option value="Ingeniería">Ingeniería</option>
                          </select>
                        </div>
                        <div class="col-6">
                          <select class="form-select form-control mb-3" name="grado" aria-label="Default select example">
                          <option selected>-- Selecciona el grado --</option>
                              <option value="1er cuatrimestre">1er cuatrimestre</option>
                              <option value="2do cuatrimestre">2do cuatrimestre</option>
                              <option value="3er cuatrimestre">3er cuatrimestre</option>
                              <option value="4to cuatrimestre">4to cuatrimestre</option>
                              <option value="5to cuatrimestre">5to cuatrimestre</option>
                              <option value="7mo cuatrimestre">7mo cuatrimestre</option>
                              <option value="8vo cuatrimestre">8vo cuatrimestre</option>
                              <option value="9no cuatrimestre">9no cuatrimestre</option>
                              <option value="10mo cuatrimestre">10mo cuatrimestre</option>
                              <option value="11vo cuatrimestre">11vo cuatrimestre</option>
                          </select>
                        </div> -->
                        