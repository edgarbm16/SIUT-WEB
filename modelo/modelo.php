
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

		function agregarMateria($params){
			$error = "";
			$valor = "";
			$NumeroMateria = $params["NumeroMateria"];
			$NombreMateria = $params["NombreMateria"];
			$HorasM = $params["HorasM"];
			$UnidadesTotalesM = $params["UnidadesTotalesM"];
		
			$query = "INSERT INTO `materias` (`NumeroMateria`, `NombreMateria`, `HorasM`, `UnidadesTotalesM`)";
			$query .= " VALUES ('".$NumeroMateria."', '".$NombreMateria."', '".$HorasM."', '".$UnidadesTotalesM."');";
			if(!empty( $NumeroMateria ) && !empty( $NombreMateria ) && !empty( $HorasM ) && !empty( $UnidadesTotalesM )){ if(! $this->conn->query($query)){
			$error = 'Ocurrio un error ejecutando el query [' . $this->conn->error . ']';
			}
			$valor = $this->conn->affected_rows;
			}
			$resul[] = $valor;
			$resul[] = $error; return $resul;
		}

		function agregarUsuario($params){
			$error = "";
			$valor = "";
			$Usuario = $params["Usuario"];
			$Password = $params["Password"];
			$Email =  $params["Email"];
			$Tipo = $params["Tipo"];

			$query = "INSERT INTO `usuarios` (`Usuario`,`Password`,`Email`,`Tipo`)";
			$query .= " VALUES ('".$Usuario."', '".$Password."', '".$Email."', '".$Tipo."');";
			if(!empty( $Usuario ) && !empty( $Password ) && !empty( $Email ) && !empty( $Tipo )){ if(! $this->conn->query($query)){
			$error = 'Ocurrio un error ejecutando el query [' . $this->conn->error . ']';
			}
			$valor = $this->conn->affected_rows;
			}

			$resul[] = $valor;
			$resul[] = $error; return $resul;
		}

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
			$IdUsuarios = $params["IdUsuarios"];

			// !empty( $IdUsuarios ) && 
			// `IdUsuarios`, 
			// '".$IdUsuarios."',

			$query = "INSERT INTO `profesores` (`NumEmpleado`, `NombreP`, `ApellidoPP`, `ApellidoMP`, `SexoP`, `FechaNP`, `TelCasaP`, `TelCelularP`, `ZonaDomicilioP`,`GrupoSanguineoP`,`EmailP`,`IdUsuarios`)";		
			$query .= " VALUES ('".$NumEmpleado."', '".$NombreP."', '".$ApellidoPP."', '".$ApellidoMP."', '".$SexoP."', '".$FechaNP."', '".$TelCasaP."', '".$TelCelularP."', '".$ZonaDomicilioP."', '".$GrupoSanguineoP."', '".$EmailP."', '".$IdUsuarios."');";
			if(!empty( $NumEmpleado ) && !empty( $NombreP ) && !empty( $ApellidoPP ) && !empty( $ApellidoMP ) && !empty( $SexoP ) && !empty( $FechaNP )&& !empty( $TelCasaP )&& !empty( $TelCelularP ) && !empty( $ApellidoPP ) && !empty( $ZonaDomicilioP ) && !empty( $GrupoSanguineoP ) && !empty( $EmailP ) && !empty( $IdUsuarios ) ){ if(! $this->conn->query($query)){
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
			$IdUsuarios = $params["IdUsuarios"];
		

			$query = "INSERT INTO `alumnos` (`Matricula`, `NombreA`, `ApellidoPA`, `ApellidoMA`, `SexoA`, `FechaNA`, `TelCasaA`, `TelCelularA`, `ZonaDomicilioA`,`GrupoSanguineoA`,`EmailA`,`IdUsuarios`)"; 
			$query .= " VALUES ('".$Matricula."', '".$NombreA."', '".$ApellidoPA."', '".$ApellidoMA."', '".$SexoA."', '".$FechaNA."', '".$TelCasaA."', '".$TelCelularA."', '".$ZonaDomicilioA."', '".$GrupoSanguineoA."', '".$EmailA."','".$IdUsuarios."');";
			if(!empty( $Matricula ) && !empty( $NombreA ) && !empty( $ApellidoPA ) && !empty( $ApellidoMA ) && !empty( $SexoA ) && !empty( $FechaNA )&& !empty( $TelCasaA )&& !empty( $TelCelularA ) && !empty( $ApellidoPA ) && !empty( $ZonaDomicilioA ) && !empty( $GrupoSanguineoA ) && !empty( $EmailA ) && !empty( $IdUsuarios )){ if(! $this->conn->query($query)){
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
					$_SESSION["Tipo"] = $row['Tipo'];
					$Tipo = $row['Tipo'];
				}
			}
			$resul[] = $valor;
			$resul[] = $error;
			$resul[] = $Tipo;
			return $resul;
		}

	}
	
	