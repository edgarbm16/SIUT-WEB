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
    

    list($valor,$error,$Tipo)= $sesion->validaUsuario($params);
    if(empty($valor)){
        echo "<script>alert('El usuario o contraseña son incorrectos');
        window.location.href='../vistas/index.php';
        </script>";
        }if($Tipo == 3){
            echo "<script>alert('Bienvenido');
            window.location.href='../vistas/inicio_admistrador.php';
            </script>";
        }elseif($Tipo == 2){
            echo "<script>alert('Bienvenido');
            window.location.href='../vistas/alumnos-Inicio.php';
            </script>";
        }elseif($Tipo == 1){
            echo "<script>alert('Bienvenido');
            window.location.href='../vistas/profesores-Inicio.php';
            </script>";
        }
    
?>