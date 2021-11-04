<?php 

class Data {
	private $table = 'profile';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllData()
	{
		$this->db->query('SELECT * FROM' . $this->table);
		return $this->db->resultSet();
	}
}