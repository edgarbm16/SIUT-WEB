
<?php
	require_once("../controlador/conexion.php");
	require_once("../controlador/controlador.php");
	
	
	class Modelo{
		
		private $conn;
		
		function __construct( $conexion ){
			$this->conn = $conexion;
		}

		function select( $consulta ){ 
		    $this->total_consultas++;
		    $resultado = mysqli_query($this->conn, $consulta);
		    if(!$resultado){ 
		    	$error = 'MySQL Error: ' . mysqli_connect_error();
		    	
		    }
		    return $resultado;
		}

		function agregarAlumno($params){
			$error = "";
			$valor = "";
			$signupMatricula = $params["Matricula"];
			$signupName = $params["Name"];
			$signupLastName = $params["LastName"];
			$signupEmail = $params["Email"];
			$signupPassword = $params["Password"];
			$carrera = $params["carrera"];
			$nivel = $params["nivel"];
			$grupo = $params["grupo"];
			$grado = $params["grado"];

			$query = "INSERT INTO `alumnos` (`Matricula`, `Nombre`, `Apellidos`, `Email`, `Password`, `Carrera`, `Nivel`, `Grupo`, `Grado`)";
			$query .= " VALUES ('".$signupMatricula."', '".$signupName."', '".$signupLastName."', '".$signupEmail."', '".$signupPassword."', '".$carrera."', '".$nivel."', '".$grupo."', '".$grado."');";
			if(!empty( $signupName ) && !empty( $signupLastName ) && !empty( $signupEmail ) ){ if(! $this->conn->query($query)){
			$error = 'Ocurrio un error ejecutando el query [' . $this->conn->error . ']';
			}
			$valor = $this->conn->affected_rows;
			}
			$resul[] = $valor;
			$resul[] = $error; return $resul;
		}

		function validaUsuario($params){
			$error = "";
			$valor = "";
			$loginUsuario = $params["loginUsuario"];
			$loginPassword = $params["loginPassword"];
			$opciones = [
				'cost' => 12,
			];
			password_hash($loginPassword, PASSWORD_BCRYPT,$opciones);
			// print_r($e); die();

			$query = "SELECT * FROM administrador WHERE NumeroAdmin = '".$loginUsuario."' AND ContrasenaAD =  '".$loginPassword."';";

			$resultado = mysqli_query($this->conn, $query);
			// print_r($resultado); die();
			if(mysqli_num_rows($resultado)!=0){
				$valor = "OK";
				session_start();
			
				$_SESSION["logueado"] = TRUE;

				while($row = mysqli_fetch_array($resultado))
				{
					$_SESSION["NombreAD"] = $row['NombreAD'];
				}
			}
			$resul[] = $valor;
			$resul[] = $error;
			return $resul;
		}
		
		function validaAlumno($params){
			$errorAlumno = "";
			$valorAlumno = "";
			$loginUsuario = $params["loginUsuario"];
			$loginPassword = $params["loginPassword"];
			$opciones = [
				'cost' => 12,
			];
			password_hash($loginPassword, PASSWORD_BCRYPT,$opciones);
			// print_r($e); die();

			$query = "SELECT * FROM alumnos WHERE Matricula = '".$loginUsuario."' AND ContrasenaA =  '".$loginPassword."';";

			$resultado = mysqli_query($this->conn, $query);
			// print_r($resultado); die();
			if(mysqli_num_rows($resultado)!=0){
				$valorAlumno = "OK";
				session_start();
				
				
				$_SESSION["logueado"] = TRUE;

				while($row = mysqli_fetch_array($resultado))
				{
					$_SESSION["NombreA"] = $row['NombreA'];
				}
			}
			$resul[] = $valorAlumno;
			$resul[] = $errorAlumno;
			return $resul;
		}

		function validaProfesor($params){
			$errorProfesor = "";
			$valorProfesor = "";
			$loginUsuario = $params["loginUsuario"];
			$loginPassword = $params["loginPassword"];
			$opciones = [
				'cost' => 12,
			];
			password_hash($loginPassword, PASSWORD_BCRYPT,$opciones);
			// print_r($e); die();

			$query = "SELECT * FROM profesores WHERE NumEmpleado = '".$loginUsuario."' AND ContrasenaP =  '".$loginPassword."';";

			$resultado = mysqli_query($this->conn, $query);
			// print_r($resultado); die();
			if(mysqli_num_rows($resultado)!=0){
				$valorProfesor = "OK";
				session_start();
				
				
				$_SESSION["logueado"] = TRUE;

				while($row = mysqli_fetch_array($resultado))
				{
					$_SESSION["NombreP"] = $row['NombreP'];
				}
			}
			$resul[] = $valorProfesor;
			$resul[] = $errorProfesor;
			return $resul;
		}
		// function mostrarTablas( ){
		// 	$sqlTablas = "SELECT TABLE_NAME as 'tabla' FROM INFORMATION_SCHEMA.tables ";
		// 	$sqlTablas .= "WHERE TABLE_SCHEMA='sistema_archivos'";
		// 	//Se ejecuta la consulta
		// 	$resTablas = mysqli_query($this->conn, $sqlTablas);
		// 	if( !$resTablas ){ 
		//     	$error = 'MySQL Error: ' . mysqli_connect_error();
		//     	$alert = 'danger';
		// 	}
		// 	$resultado = array();
		// 	while($row = mysqli_fetch_array($resTablas))
		// 	{
		// 		$resultado[] = $row['tabla'];
		// 	}
		// 	return $resultado;

		// }

		

	}
	
	// if(isset($_SESSION["Usuario"])){

			
	// 	if($_SESSION["Tipo"] == '3'){
	// 		echo "<script>alert('Bienvenido');
	// 		window.location.href='../vistas/inicio_admistrador.php';
	// 		</script>";
	// 		session_register("loginUsuario");
	// 		session_register("loginPassword");

	// 	}elseif($_SESSION["Tipo"] == '2'){
	// 		echo "<script>alert('Bienvenido');
	// 		window.location.href='../vistas/blog.html';
	// 		</script>";
	// 		session_register("loginUsuario");
	// 		session_register("loginPassword");
			
	// 	}elseif($_SESSION["Tipo"] == '1'){
	// 		echo "<script>alert('Bienvenido');
	// 		window.location.href='../vistas/about.html';
	// 		</script>";
	// 		session_register("loginUsuario");
	// 		session_register("loginPassword");
	// 	}else{
	// 		echo "<script>alert('El usuario o contraseña son incorrectos');
	// 		window.location.href='../vistas/index.php';
	// 		</script>";
	// 	}
	// 	}