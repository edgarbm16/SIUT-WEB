
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
			$signupMatricula = $params["signupMatricula"];
			$signupName = $params["signupName"];
			$signupLastName = $params["signupLastName"];
			$signupEmail = $params["signupEmail"];
			$signupPassword = $params["signupPassword"];
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
		
		function mostrarTablas( ){
			$sqlTablas = "SELECT TABLE_NAME as 'tabla' FROM INFORMATION_SCHEMA.tables ";
			$sqlTablas .= "WHERE TABLE_SCHEMA='sistema_archivos'";
			//Se ejecuta la consulta
			$resTablas = mysqli_query($this->conn, $sqlTablas);
			if( !$resTablas ){ 
		    	$error = 'MySQL Error: ' . mysqli_connect_error();
		    	$alert = 'danger';
			}
			$resultado = array();
			while($row = mysqli_fetch_array($resTablas))
			{
				$resultado[] = $row['tabla'];
			}
			return $resultado;
		}

		

	}
		