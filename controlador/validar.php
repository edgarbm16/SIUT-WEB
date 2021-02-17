<?php

    @session_start();
    require_once("../modelo/modelo.php");

    $params = array(
        "loginUsuario"=>$_POST['loginUsuario'],
        "loginPassword"=>$_POST['loginPassword'],
    );

    // print_r($params); die();

    //instancia y conexion bd

    $db = Database::getInstance();
    $conn = $db->getConnection();
    $sesion = new Modelo($conn);

    list($valor,$error)= $sesion->validaUsuario($params);
    if(empty($valor)){
        echo "<script>alert('El usuario o contraseña son incorrectos');
        window.location.href='../vistas/index.php';
        </script>";
    }else{
        echo "<script>alert('Bienvenido');
        window.location.href='../vistas/inicio_admistrador.php';
        </script>";
    }

    // list($valorAlumno,$errorAlumno) = $sesion->validaAlumno($params);
    // if(empty($valorAlumno)){
    //     echo "<script>alert('El usuario o contraseña son incorrectos');
    //     window.location.href='../vistas/index.php';
    //     </script>";
    // }else{
    //     echo "<script>alert('Bienvenido');
    //     window.location.href='../vistas/blog.html';
    //     </script>";
    // }

    // list($valorProfesor,$errorProfesor) = $sesion->validaProfesor($params);
    // if(empty($valorProfesor)){
    //     echo "<script>alert('El usuario o contraseña son incorrectos');
    //     window.location.href='../vistas/index.php';
    //     </script>";
    // }else{
    //     echo "<script>alert('Bienvenido');
    //     window.location.href='../vistas/courses.html';
    //     </script>";
    // }

?>