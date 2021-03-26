<?php

    @session_start();
    require_once("../modelo/modelo.php");

    $params = array (

        "Usuario" => $_POST['Usuario'],
        "Password" => $_POST['Password'],
        "Tipo" => $_POST['Tipo'],

    );

    $db = Database::getInstance();
    $conn = $db->getConnection();
    $sesion = new Modelo($conn);

    list ($valor, $error) = $sesion->agregarUsuario($params);
    if(empty($valor)){
        if(!empty($error)) $_SESSION["error"] = $error;
    }else{
        echo "<script>alert('El usuarios fue resgitrado exitosamente');
        window.location.href='../vistas/inicio_admistrador.php';
        </script>";
    }
    // print_r($params);


    ?>