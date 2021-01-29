<?php

    $conexiondb = mysqli_connect(
        'localhost',
        'root',
        '',
        'siut_db'
    );

    if(!$conexiondb){
        die('Conexión Fallida' .mysqli_error($conexiondb));
    }else{
        echo "Conexión Exitosa";
    }

?>