<?php

    @session_start();
    require_once("../modelo/modelo.php");

    $params = array (

        "IdentifcacionCarrera" => $_POST['IdentifcacionCarrera'],
        "NombreCarrera" => $_POST['NombreCarrera'],
       
    );

    //  print_r($params);

    $db = Database::getInstance();
    $conn = $db->getConnection();
    $sesion = new Modelo($conn);

    list ($valor, $error) = $sesion->agregarCarrera($params);
    if(empty($valor)){
        if(!empty($error)) $_SESSION["error"] = $error;
    }else{
        echo "<script>alert('La carrera fue resgitrado exitosamente');
        window.location.href='../vistas/inicio_admistrador.php';
        </script>";
    }

   


?>