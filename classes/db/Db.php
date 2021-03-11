<?php
	/*
    * class Db
    */
	class Db
	{
		private $dbhost;
		private $dbuser;
		private $dbpass;
		private $dbname;
		private static $db_object = null;
		private static $db=null;

		private function __construct()
		{
			$this->dbhost = DB_HOST;
			$this->dbuser = DB_USER;
			$this->dbpass = DB_PASS;
			$this->dbname = DB_NAME;

			if (self::$db_object === null)
				$this->connectDatabase();
		}


		private static function _getPDO($dbhost, $dbuser, $dbpass, $dbname)
		{
			try{
				$dsn = 'mysql:host='.$dbhost.';dbname='.$dbname.';charset=utf8';
				return new PDO($dsn, $dbuser, $dbpass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4"));
			}
			catch(PDOException $e){
				Helper::getHelper()->redirect_link("sww");
			}
		}

		private function connectDatabase()
		{
			try{
				self::$db_object = $this->_getPDO($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
			} catch (PDOException $e) {
				die('Link to database cannot be established: '.$e->getMessage());
			}
		}

		public static function getDbObject()
		{
			if(self::$db==null){
				self::$db=new Db();
			}
			return self::$db_object;
		}

		public static function disconnect()
		{
			self::$db_object = null;
		}

		public static function count($table)
		{
			$stmt = self::getDbObject()-> prepare("select count(*) from $table");
			$stmt->execute();
			return $stmt->fetchColumn();
		}	
	}
?>