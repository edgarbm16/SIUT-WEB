
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

		function agregarCarrera($params){
			$error = "";
			$valor = "";
			$IdentifcacionCarrera = $params["IdentifcacionCarrera"];
			$NombreCarrera = $params["NombreCarrera"];
			$Nivel = $params["Nivel"];
		
			$query = "INSERT INTO `carreras` (`IdentifcacionCarrera`, `NombreCarrera`, `Nivel`)";
			$query .= " VALUES ('".$IdentifcacionCarrera."', '".$NombreCarrera."', '".$Nivel."');";
			if(!empty( $IdentifcacionCarrera ) && !empty( $NombreCarrera ) && !empty( $Nivel ) ){ if(! $this->conn->query($query)){
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
			$Tipo = "";
			$loginUsuario = $params["loginUsuario"];
			$loginPassword = $params["loginPassword"];
			$opciones = [
				'cost' => 12,
			];
			password_hash($loginPassword, PASSWORD_BCRYPT,$opciones);
			
			// print_r($e); die();

			$query = "SELECT * FROM usuarios WHERE Usuario = '".$loginUsuario."' AND Password =  '".$loginPassword."';";

			$resultado = mysqli_query($this->conn, $query);
			// print_r($resultado); die();
			if(mysqli_num_rows($resultado)!=0){
				$valor = "OK";
				@session_start();
				$_SESSION["logueado"] = TRUE;
				

				while($row = mysqli_fetch_array($resultado))
				{
					$_SESSION["Usuario"] = $row['Usuario'];
					$_SESSION["IdUsuarios"] = $row['IdUsuarios'];
					$Tipo = $row['Tipo'];
				}
			}
			$resul[] = $valor;
			$resul[] = $error;
			$resul[] = $Tipo;
			return $resul;
		}
		
		

	}
	
	