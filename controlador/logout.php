<?php

@session_start();

//Liberar las variables de sesión registradas

unset($_SESSION["Usuario"]);
unset($_SESSION["IdUsuarios"]);
unset($_SESSION["Tipo"]);

//Borra los datos de la sesion actual

session_destroy();

//Redirecciona al index

header("Location: ../vistas/index.php");

?>
