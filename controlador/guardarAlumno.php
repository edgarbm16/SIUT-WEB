<?php

    @session_start();
    require_once("../modelo/modelo.php");

    $params = array (

        "signupMatricula" => $_POST['signupMatricula'],
        "signupName" => $_POST['signupName'],
        "signupLastName" => $_POST['signupLastName'],
        "signupEmail" => $_POST['signupEmail'],
        "signupPassword" => $_POST['signupPassword'],
        "carrera" => $_POST['carrera'],
        "nivel" => $_POST['nivel'],
        "grupo" => $_POST['grupo'],
        "grado" => $_POST['grado'],

    );

    $db = Database::getInstance();
    $conn = $db->getConnection();
    $sesion = new Modelo($conn);

    list ($valor, $error) = $sesion->agregarAlumno($params);
    if(empty($valor)){
        if(!empty($error)) $_SESSION["error"] = $error;
    }else{
        echo "<script>alert('Su usuario fue resgitrado exitosamente');
        window.location.href='../vistas/contact.html';
        </script>";
    }

    // print_r($params);


?>
