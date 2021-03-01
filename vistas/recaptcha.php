<!-- CODIGO PHP-->
<?php  
        include_once "recaptchalib.php";  
        $llave_secreta = "6LcoWGYaAAAAAH5MnswK0ins59H9fn-onTEmW462";
        $respuesta = null;
        $reCaptcha = new reCaptcha($llave_secreta);

        // if submitted check response
        if ($_POST["g-recaptcha-response"]) {
            $respuesta = $reCaptcha->verifyResponse(
                $_SERVER["REMOTE_ADDR"],
                $_POST["g-recaptcha-response"]
            );
        }

        if ($respuesta != null && $respuesta->success) {
            echo "Hola " . $_POST["loginUsuario"] . " (" . $_POST["loginPassword"] . "), ¡Creo que eres un humano!";
          } 
          else {
          }
     ?>