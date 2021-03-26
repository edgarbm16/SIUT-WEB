<?php

    @session_start();
    require_once("../modelo/modelo.php");

    $params = array (

        "NumeroMateria" => $_POST['NumeroMateria'],
        "NombreMateria" => $_POST['NombreMateria'],
        "HorasM" => $_POST['HorasM'],
        "UnidadesTotalesM" => $_POST['UnidadesTotalesM'],
       
    );

    //  print_r($params);

    $db = Database::getInstance();
    $conn = $db->getConnection();
    $sesion = new Modelo($conn);

    list ($valor, $error) = $sesion->agregarMateria($params);
    if(empty($valor)){
        if(!empty($error)) $_SESSION["error"] = $error;
    }else{
        echo "<script>alert('La materia fue resgitrada exitosamente');
        window.location.href='../vistas/inicio_admistrador.php';
        </script>";
    }

   


?>