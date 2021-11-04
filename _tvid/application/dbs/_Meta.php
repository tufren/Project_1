<?php 

class Meta {
	private $table = 'profile';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getUser()
	{
		$this->db->query('SELECT * FROM' . $this->table);
		return $this->db->resultSet();
	}
}