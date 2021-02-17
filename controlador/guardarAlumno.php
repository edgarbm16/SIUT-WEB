<?php

    @session_start();
    require_once("../modelo/modelo.php");

    $params = array (

        "Matricula" => $_POST['Matricula'],
        "Name" => $_POST['Name'],
        "LastName" => $_POST['LastName'],
        "Email" => $_POST['Email'],
        "Password" => $_POST['Password'],
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