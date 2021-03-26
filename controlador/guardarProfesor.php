<?php

    @session_start();
    require_once("../modelo/modelo.php");

    $params = array (

        "NumEmpleado" => $_POST['NumEmpleado'],
        "NombreP" => $_POST['NombreP'],
        "ApellidoPP" => $_POST['ApellidoPP'],
        "ApellidoMP" => $_POST['ApellidoMP'],
        "SexoP" => $_POST['SexoP'],
        "FechaNP" => $_POST['FechaNP'],
        "TelCasaP" => $_POST['TelCasaP'],
        "TelCelularP" => $_POST['TelCelularP'],
        "ZonaDomicilioP" => $_POST['ZonaDomicilioP'],
        "GrupoSanguineoP" => $_POST['GrupoSanguineoP'],
        "EmailP" => $_POST['EmailP'],
        "IdUsuarios" => $_POST['IdUsuarios'],

    );

    $db = Database::getInstance();
    $conn = $db->getConnection();
    $sesion = new Modelo($conn);

    list ($valor, $error) = $sesion->agregarProfesor($params);
    if(empty($valor)){
        if(!empty($error)) $_SESSION["error"] = $error;
    }else{
        echo "<script>alert('El profesor fue resgitrado exitosamente');
        window.location.href='../vistas/inicio_admistrador.php';
        </script>";
    }

    // print_r($params);


?>