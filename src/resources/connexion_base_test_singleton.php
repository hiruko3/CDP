<?php
	class PDO_Singleton
	{
		/* Instance de la classe PDO private */
		private $PDOInstance = null;

		/* Instance de la classe PDO_Singleton */
		private static $instance = null;

		const DEFAUTL_SQL_USER = 'root';
		const DEFAULT_SQL_HOST = 'localhost';

		/* if you are using MAMP you need to write 'root' as PASS*/
		const DEFAULT_SQL_PASS = '';
		const DEFAULT_SQL_DB = 'cnrs_lemon_test';

		private function PDO_Singleton(){
			try{
				$this->PDOInstance = new PDO('mysql:host='.self::DEFAULT_SQL_HOST.';dbname='.self::DEFAULT_SQL_DB,self::DEFAUTL_SQL_USER,self::DEFAULT_SQL_PASS);
			}
			catch(Exception $e)
			{
        		die('Erreur : '.$e->getMessage());
			}		
		}

		/* crée et retoune l'objet PDO_Singleton selon le principe du pattern */
		public static function getInstance(){
			if(is_null(self::$instance)){
				self::$instance = new PDO_Singleton();
			}
			return self::$instance;
		}

		public function query($query){
			return $this->PDOInstance->query($query);
		}

		public function prepare($prepare){
			return $this->PDOInstance->prepare($prepare);
		}

		public function exec($exec){
			return $this->PDOInstance->exec($exec);
		}
	}
?>