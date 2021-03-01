<?php

    @session_start();
    require_once("../modelo/modelo.php");

    $params = array (

        "IdentificacionAsignatura" => $_POST['IdentificacionAsignatura'],
        "NombreAsignatura" => $_POST['NombreAsignatura'],
        "Horas" => $_POST['Horas'],
        "Unidades" => $_POST['Unidades'],
       
    );

    //  print_r($params);

    $db = Database::getInstance();
    $conn = $db->getConnection();
    $sesion = new Modelo($conn);

    list ($valor, $error) = $sesion->agregarAsignatura($params);
    if(empty($valor)){
        if(!empty($error)) $_SESSION["error"] = $error;
    }else{
        echo "<script>alert('La materia fue resgitrada exitosamente');
        window.location.href='../vistas/inicio_admistrador.php';
        </script>";
    }

   


?>