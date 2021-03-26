<?php

    @session_start();
    require_once("../modelo/modelo.php");

    $params = array (

        "Matricula" => $_POST['Matricula'],
        "NombreA" => $_POST['NombreA'],
        "ApellidoPA" => $_POST['ApellidoPA'],
        "ApellidoMA" => $_POST['ApellidoMA'],
        "SexoA" => $_POST['SexoA'],
        "FechaNA" => $_POST['FechaNA'],
        "TelCasaA" => $_POST['TelCasaA'],
        "TelCelularA" => $_POST['TelCelularA'],
        "ZonaDomicilioA" => $_POST['ZonaDomicilioA'],
        "GrupoSanguineoA" => $_POST['GrupoSanguineoA'],
        "EmailA" => $_POST['EmailA'],
        "IdUsuarios" => $_POST['IdUsuarios'],

    );

    $db = Database::getInstance();
    $conn = $db->getConnection();
    $sesion = new Modelo($conn);

    list ($valor, $error) = $sesion->agregarAlumnos($params);
    if(empty($valor)){
        if(!empty($error)) $_SESSION["error"] = $error;
    }else{
        echo "<script>alert('El alumno fue resgitrado exitosamente');
        window.location.href='../vistas/inicio_admistrador.php';
        </script>";
    }

    // print_r($params);


?>