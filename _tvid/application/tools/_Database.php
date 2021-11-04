<?php 

class Database {
	private $host = HOST_DB;
	private $user = USER_DB;
	private $pw = PW_DB;
	private $name_db = DB_NAME;

	private $dbh;
	private $dbs;

	public function __construct()
	{
		$sdb = 'mysql:host=' . $this->host . ';dbname=' . $this->name_db;

		$option = [
			PDO::ATTR_PERSISTENT => true,
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		];

		try {
			$this->dbs = new PDO($sdb, $this->user, $this->pw, $option);
		} catch(PDOException $e) {
			die($e->getMessage());
		}
	}

	public function query($query)
	{
		$this->dbs = $this->dbh->prepare($query);
	}

	public function bind($parameter, $value, $type = null)
	{
		if (is_null($type)) {
			switch (true) {
				case is_int($value) :
					$type = PDO::PARAM_INT;
					break;
				case is_bool($value) :
					$type = PDO::PARAM_BOOL;
					break;
				case is_null($value) :
					$type = PDO::PARAM_NULL;
					break;
				default :
					$type = PDO::PARAM_STR;
			}
		}

		$this->dbs->bindValue($parameter, $value, $type);
	}

	public function execute()
	{
		$this->dbs->execute();
	}

	public function resultSet()
	{
		$this->execute();
		return $this->dbs->fetchAll(PDO::FETCH_ASSOC);
	}

	public function result()
	{
		$this->execute();
		return $this->dbs->fetch(PDO::FETCH_ASSOC);
	}
}