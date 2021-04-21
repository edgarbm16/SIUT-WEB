<?php 
    require_once("../controlador/conexionResetPass.php");
    $email =$_POST['email'];
    $p1 =$_POST['p1'];
    $p2 =$_POST['p2'];
    if($p1 == $p2){
        // $p1=sha1($p1);
        $conexion->query("update usuarios set Password='$p1' where Email='$email' ")or die($conexion->error);
        echo "<script>alert('Has cambiado tu contraseña con exito');
        window.location.href='../vistas/index.php';
        </script>";
    }else{  
        echo "<script>alert('Las contraseñas no coinciden');
        window.history.go(-1); 
        </script>";    
    }
?>
}