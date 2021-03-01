
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

		function agregarCarrera($params){
			$error = "";
			$valor = "";
			$IdentifcacionCarrera = $params["IdentifcacionCarrera"];
			$NombreCarrera = $params["NombreCarrera"];
		
			$query = "INSERT INTO `carreras` (`IdentifcacionCarrera`, `NombreCarrera`)";
			$query .= " VALUES ('".$IdentifcacionCarrera."', '".$NombreCarrera."');";
			if(!empty( $IdentifcacionCarrera ) && !empty( $NombreCarrera )){ if(! $this->conn->query($query)){
			$error = 'Ocurrio un error ejecutando el query [' . $this->conn->error . ']';
			}
			$valor = $this->conn->affected_rows;
			}
			$resul[] = $valor;
			$resul[] = $error; return $resul;
		}

		function agregarAsignatura($params){
			$error = "";
			$valor = "";
			$IdentificacionAsignatura = $params["IdentificacionAsignatura"];
			$NombreAsignatura = $params["NombreAsignatura"];
			$Horas = $params["Horas"];
			$Unidades = $params["Unidades"];
		
			$query = "INSERT INTO `asignatura` (`IdentificacionAsignatura`, `NombreAsignatura`, `Horas`, `Unidades`)";
			$query .= " VALUES ('".$IdentificacionAsignatura."', '".$NombreAsignatura."', '".$Horas."', '".$Unidades."');";
			if(!empty( $IdentificacionAsignatura ) && !empty( $NombreAsignatura ) && !empty( $Horas ) && !empty( $Unidades )){ if(! $this->conn->query($query)){
			$error = 'Ocurrio un error ejecutando el query [' . $this->conn->error . ']';
			}
			$valor = $this->conn->affected_rows;
			}
			$resul[] = $valor;
			$resul[] = $error; return $resul;
		}

		// function agregarAlumno($params){
		// 	$error = "";
		// 	$valor = "";
		// 	$signupMatricula = $params["Matricula"];
		// 	$signupName = $params["Name"];
		// 	$signupLastName = $params["LastName"];
		// 	$signupEmail = $params["Email"];
		// 	$signupPassword = $params["Password"];
		// 	$carrera = $params["carrera"];
		// 	$nivel = $params["nivel"];
		// 	$grupo = $params["grupo"];
		// 	$grado = $params["grado"];

		// 	$query = "INSERT INTO `alumnos` (`Matricula`, `Nombre`, `Apellidos`, `Email`, `Password`, `Carrera`, `Nivel`, `Grupo`, `Grado`)";
		// 	$query .= " VALUES ('".$signupMatricula."', '".$signupName."', '".$signupLastName."', '".$signupEmail."', '".$signupPassword."', '".$carrera."', '".$nivel."', '".$grupo."', '".$grado."');";
		// 	if(!empty( $signupName ) && !empty( $signupLastName ) && !empty( $signupEmail ) ){ if(! $this->conn->query($query)){
		// 	$error = 'Ocurrio un error ejecutando el query [' . $this->conn->error . ']';
		// 	}
		// 	$valor = $this->conn->affected_rows;
		// 	}
		// 	$resul[] = $valor;
		// 	$resul[] = $error; return $resul;
		// }

		function agregarProfesor($params){
			$error = "";
			$valor = "";
			$NumEmpleado = $params["NumEmpleado"];
			$NombreP = $params["NombreP"];
			$ApellidoPP = $params["ApellidoPP"];
			$ApellidoMP = $params["ApellidoMP"];
			$SexoP = $params["SexoP"];
			$FechaNP = $params["FechaNP"];
			$TelCasaP = $params["TelCasaP"];
			$TelCelularP = $params["TelCelularP"];
			$ZonaDomicilioP = $params["ZonaDomicilioP"];
			$GrupoSanguineoP = $params["GrupoSanguineoP"];
			$EmailP = $params["EmailP"];
			$Usuario = $params["Usuario"];
			$Password = $params["Password"];
			$Tipo = $params["Tipo"];
			$IdUsuarios = $params["IdUsuarios"];
		

			$query = "INSERT INTO `profesores` (`NumEmpleado`, `NombreP`, `ApellidoPP`, `ApellidoMP`, `SexoP`, `FechaNP`, `TelCasaP`, `TelCelularP`, `ZonaDomicilioP`,`GrupoSanguineoP`,`EmailP`,`IdUsuarios`)";
			$query2 = "INSERT INTO `usuarios` (`IdUsuarios`, `Usuario`,`Password`,`Tipo`)";
			$query .= " VALUES ('".$NumEmpleado."', '".$NombreP."', '".$ApellidoPP."', '".$ApellidoMP."', '".$SexoP."', '".$FechaNP."', '".$TelCasaP."', '".$TelCelularP."', '".$ZonaDomicilioP."', '".$GrupoSanguineoP."', '".$EmailP."', '".$IdUsuarios."');";
			$query2 .= " VALUES ('".$IdUsuarios."','".$Usuario."', '".$Password."', '".$Tipo."');";
			if(!empty( $NumEmpleado ) && !empty( $NombreP ) && !empty( $ApellidoPP ) && !empty( $ApellidoMP ) && !empty( $SexoP ) && !empty( $FechaNP )&& !empty( $TelCasaP )&& !empty( $TelCelularP ) && !empty( $ApellidoPP ) && !empty( $ZonaDomicilioP ) && !empty( $GrupoSanguineoP ) && !empty( $EmailP ) && !empty( $Usuario ) && !empty( $Password ) && !empty( $Tipo ) && !empty( $IdUsuarios ) ){ if(! $this->conn->query($query)){
			$error = 'Ocurrio un error ejecutando el query [' . $this->conn->error . ']';
			}
			$valor = $this->conn->affected_rows;
			}
			$resul[] = $valor;
			$resul[] = $error; return $resul;
		}

		function agregarAlumnos($params){
			$error = "";
			$valor = "";
			$IdAlumnos = $params["IdAlumnos"];
			$Matricula = $params["Matricula"];
			$NombreA = $params["NombreA"];
			$ApellidoPA = $params["ApellidoPA"];
			$ApellidoMA = $params["ApellidoMA"];
			$SexoA = $params["SexoA"];
			$FechaNA = $params["FechaNA"];
			$TelCasaA = $params["TelCasaA"];
			$TelCelularA = $params["TelCelularA"];
			$ZonaDomicilioA = $params["ZonaDomicilioA"];
			$GrupoSanguineoA = $params["GrupoSanguineoA"];
			$EmailA = $params["EmailA"];
			$Usuario = $params["Usuario"];
			$Password = $params["Password"];
			$Tipo = $params["Tipo"];
			$IdUsuarios = $params["IdUsuarios"];
		

			$query = "INSERT INTO `alumnos` (`IdAlumnos`,`Matricula`, `NombreA`, `ApellidoPA`, `ApellidoMA`, `SexoA`, `FechaNA`, `TelCasaA`, `TelCelularA`, `ZonaDomicilioA`,`GrupoSanguineoA`,`EmailA`,`IdUsuarios`)"; 
			//,`IdUsuarios`
			$query2 = "INSERT INTO `usuarios` (`Usuario`,`Password`,`Tipo`)";
			$query .= " VALUES ('".$IdAlumnos."','".$Matricula."', '".$NombreA."', '".$ApellidoPA."', '".$ApellidoMA."', '".$SexoA."', '".$FechaNA."', '".$TelCasaA."', '".$TelCelularA."', '".$ZonaDomicilioA."', '".$GrupoSanguineoA."', '".$EmailA."','".$IdUsuarios."');";
			// ,'".$IdUsuarios."'
			$query2 .= " VALUES ('".$Usuario."', '".$Password."', '".$Tipo."');";
			if(!empty( $IdAlumnos ) && !empty( $Matricula ) && !empty( $NombreA ) && !empty( $ApellidoPA ) && !empty( $ApellidoMA ) && !empty( $SexoA ) && !empty( $FechaNA )&& !empty( $TelCasaA )&& !empty( $TelCelularA ) && !empty( $ApellidoPA ) && !empty( $ZonaDomicilioA ) && !empty( $GrupoSanguineoA ) && !empty( $EmailA ) && !empty( $IdUsuarios )){ if(! $this->conn->query($query)){
			// && !empty( $IdUsuarios )
			$error = 'Ocurrio un error ejecutando el query [' . $this->conn->error . ']';
			}
				$valor = $this->conn->affected_rows;
			}

			if(!empty( $Usuario ) && !empty( $Password ) && !empty( $Tipo ) ){ if(! $this->conn->query($query2)){
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
	
	