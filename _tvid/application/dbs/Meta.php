<?php 

class Meta {
	private $dbh;
	private $stmt;

	public function __construct()
	{
		$dsn = 'mysql:host=localhost;dbname=phpdasar';

		try {
			$this->dbh = new PDO($dsn, 'root', '');
		} catch(PDOException $e) {
			die($e->getMessage());
		}
	}

	public function getUser()
	{
		$this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa, na_ma ORDER BY nama ASC');
		$this->stmt->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}


// '
// sandhikagalih.jpeg
// San
// dhi
// ka
// Ga
// lih
// '

// '
// doddy.jpg
// Dod
// dy
// Fer
// dian
// syah
// '

// '
// fajar.jpg
// Faj
// ar
// Dar
// ma
// wan
// '

// '
// erik.jpg
// Er
// ik
// '

// '
// mellia.jpg
// Mel
// lia
// Lian
// ty
// '