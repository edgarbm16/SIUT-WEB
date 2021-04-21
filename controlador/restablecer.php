<?php 
    require_once("../controlador/conexionResetPass.php");
    $email =$_POST['email'];
    $bytes = random_bytes(5);
    $token =bin2hex($bytes);

    // $correo= "SELECT * from usuarios WHERE Email='$email'";

    // print_r($correo); die();

    



    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $correo = $_POST["email"];

        //Procederemos a hacer una consulta que buscara el correo del usuario
        $buscarCorreo = "SELECT * from usuarios WHERE Email='$correo'";

        //Realizamos la consulta y anadimos $connection, ya que es la variable que creamos en nuestro archivo connection.php
        $resultado = $conexion->query($buscarCorreo);

        //Usaremos la funcion mysqli_num_rows en la consulta $resultado,
        //esta funcion nos regresa el numero de filas en el resultado
        $contador = mysqli_num_rows($resultado);

        //SI SI EXISTE una fila, quiere decir QUE SI ESTA EL CORREO EN LA BASE DE DATOS
        if($contador == 1) {
            include "mail_reset.php";
            $conexion->query(" insert into passwords(email, token, codigo) 
            values('$email','$token','$codigo') ") or die($conexion->error);
            echo "<script>alert('Verifica tu email para restablecer tu cuenta');
            window.location.href='../vistas/index.php';
            </script>";
        } else {
            echo "<script>alert('Email no registrado');
            window.location.href='../vistas/restablecer.php';
            </script>";
        }
   }

    // if($email == $correo){
    //     echo "<script>alert('Email encontrado');
    //     window.location.href='../vistas/restablecer.php';
    //     </script>";
    // }else{
    //       echo "<script>alert('Email no registrado');
    //       window.location.href='../vistas/restablecer.php';
    //       </script>";
    // }


    // if($enviado){
    //     $conexion->query(" insert into passwords(email, token, codigo) 
    //      values('$email','$token','$codigo') ") or die($conexion->error);
    //     echo "<script>alert('Verifica tu email para restablecer tu cuenta');
    //     window.location.href='../vistas/restablecer.php';
    //     </script>";
    // }else{
    //     echo "<script>alert('Ingresa tu email para restablecer tu cuenta');
    //     window.location.href='../vistas/restablecer.php';
    //     </script>";
    // }
   

?>