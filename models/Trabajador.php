<?php

 	require_once __DIR__.'/../models/BD.php';

	class Trabajador extends BD {

		private $bd;
		public $codigo;
		public $nombre;
		public $cumple;
		public $empresa;
		public $unidad;
		public $tipo;
		public $registro;
		public $fecha;
//		public $area;
//		public $puesto;

		public function consultarTrab($codigo) {
			$conexion = parent::conectar();
			try {
				$query = "SELECT CO_TRAB,CO_EMPR,CO_UNID FROM TMTRAB_EMPR WHERE CO_TRAB=".$codigo."AND TI_SITU='ACT'";
				return $consulta = $conexion->query($query)->fetch();
			} catch (Exception $e) {
				exit("ERROR: ".$e->getMessage());
			}
		}

		public function obtenerPers($codigo) {
			$conexion = parent::conectar();
			try {
				$query = "SELECT NO_TRAB,NO_APEL_PATE,NO_APEL_MATE,FE_NACI_TRAB FROM TMTRAB_PERS WHERE CO_TRAB=".$codigo."AND TI_SITU='ACT'";
				return $consulta = $conexion->query($query)->fetch();
			} catch (Exception $e) {
				exit("ERROR: ".$e->getMessage());
			}
		}

		public function obtenerEmpr($codigo) {
			$conexion = parent::conectar();
			try {
				$query = "SELECT DE_NOMB FROM TMEMPR WHERE CO_EMPR=".$codigo;
				return $consulta = $conexion->query($query)->fetch();
			} catch (Exception $e) {
				exit("ERROR: ".$e->getMessage());
			}		
		}

		public function obtenerUnid($codigo,$unidad) {
			$conexion = parent::conectar();
			try {
				$query = "SELECT DE_UNID FROM TMUNID_EMPR WHERE CO_EMPR=".$codigo." AND CO_UNID=".$unidad;
				return $consulta = $conexion->query($query)->fetch();
			} catch (Exception $e) {
				exit("ERROR: ".$e->getMessage());
			}		
		}

 		public function insertarRegi($empleado) {
			$conexion = parent::sgconectar();
			try {
				$query = "INSERT INTO TM_REGI (CODIGO,NOMBRE,EMPRESA,UNIDAD,TIPO,REGISTRO,FECHA) VALUES (:codigo,:nombre,:empresa,:unidad,:tipo,:registro,:fecha)";
				$insertar = $conexion->prepare($query)->execute($empleado);
				return true;
			} catch (Exception $e) {
				exit("ERROR: ".$e->getMessage());
			}
		}

		public function mostrarRegi($fecha1,$fecha2) {
			$conexion = parent::sgconectar();
			try {
				$query = "SELECT * FROM MARCAS_COMEDOR WHERE FECHADATETIME>='".$fecha1."' AND FECHADATETIME<='".date("Y-m-d",strtotime($fecha2."+ 1 days"))."' ORDER BY FECHADATETIME asc";
				return $mostrar = $conexion->query($query)->fetchAll();
			} catch (Exception $e) {
				exit("ERROR: ".$e->getMessage());
			}
		}

		public function insertarInvi($empleado) {
			$conexion = parent::sgconectar();
			try {
				$query = "INSERT INTO TM_INVI (CODIGO,NOMBRE,FECHAINI,FECHAFIN,EMPRESA,UNIDAD,REGUSER) VALUES (:codigo,:nombre,:fechaini,:fechafin,:empresa,:unidad,:reguser)";
				$insertar = $conexion->prepare($query)->execute($empleado);
				return true;
			} catch (Exception $e) {
				exit("ERROR: ".$e->getMessage());
			}
		}

		public function mostrarInvi() {
			$conexion = parent::sgconectar();
			try {
				$query = "SELECT * FROM TM_INVI WHERE ANULADO=0 ORDER BY CODIGO asc";
				return $mostrar = $conexion->query($query)->fetchAll();
			} catch (Exception $e) {
				exit("ERROR: ".$e->getMessage());
			}
		}

		public function anularInvi($idsel) {
			$conexion = parent::sgconectar();
			try {
				$query = "UPDATE TM_INVI SET ANULADO=1, REGDATE=getdate() WHERE ID=".$idsel;
				$actualizar = $conexion->prepare($query)->execute();
			} catch (Exception $e) {
				exit("ERROR: ".$e->getMessage());
			}
		}

/*		public function actualizar($registro) {
			#UPDATE nombre_tabla SET col1 = valor1, col2 = valor2, col3 = valor3 WHERE condicion;
			$conexion = parent::conectar();
			try {
				$query = "UPDATE estudiantes SET nombre=:nombre, paterno=:paterno, materno=:materno WHERE email=:email;";
				$actualizar = $conexion->prepare($query)->execute($registro);
			} catch (Exception $e) {
				exit("ERROR: ".$e->getMessage());
			}
		}

		public function eliminar($accion, $eliminar) {
			#DELETE FROM nombre_tabla WHERE condicion;
			$conexion = parent::conectar();
			if ($accion == 'todos') {
				try {
					$query = "DELETE FROM estudiantes";
					$eliminar = $conexion->prepare($query)->execute();
				} catch (Exception $e) {
					exit("ERROR: ".$e->getMessage());
				}
			} else {
				try {
					$query = "DELETE FROM estudiantes WHERE email=:email";
					$eliminar = $conexion->prepare($query)->execute($eliminar);
					echo "He eliminado";
					#$query = "DELETE FROM estudiantes WHERE email=".$eliminar['email'];
				} catch (Exception $e) {
					exit("ERROR: ".$e->getMessage());
				}
			}
		} */

	}


?>