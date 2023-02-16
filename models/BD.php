<?php
	const DB = 'sqlsrv';
   	const DB_SERVIDOR = '172.20.200.105';
   	const DB_CHARSET = 'utf8';

	abstract class BD {
		private static $db_usuario = 'sa';
		private static $db_pass = 'Passw0rd';
		private static $db_servidor = DB_SERVIDOR;
		private static $db_nombre = 'OFIPLAN'; //no usado por reporteador
		private static $db_sgnombre = 'Comedor_DESA';
		private static $db_charset = DB_CHARSET;
		private $conexion; #Conectar con la BD

		# Conexión con BD
		public function conectar() {
			try {
				$dsn = "sqlsrv:Server=".self::$db_servidor.";Database=".self::$db_nombre.";TrustServerCertificate=1";
				$pdo = new PDO($dsn, self::$db_usuario, self::$db_pass);
				$pdo->exec("SET CHARACTER SET ".self::$db_charset);
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
				return $pdo;
			} catch (PDOException $e) {
				exit("ERROR: ".$e->getMessage());
			}
		}
		private function desconectar() {
			$this->conexion = null;
		}

		public function sgconectar() {
			try {
				$dsn = "sqlsrv:Server=".self::$db_servidor.";Database=".self::$db_sgnombre.";TrustServerCertificate=1";
				$pdo = new PDO($dsn, self::$db_usuario, self::$db_pass);
				$pdo->exec("SET CHARACTER SET ".self::$db_charset);
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
				return $pdo;
			} catch (PDOException $e) {
				exit("ERROR: ".$e->getMessage());
			}
		}

	}

?>