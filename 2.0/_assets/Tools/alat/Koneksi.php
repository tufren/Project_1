<?php 

class Koneksi {
	public function menampilkan($view, $data = [])
	{
		include_once '../Tools/tampilan/' . $view . '.php';
	}

	// public function dabes($meta)
	// {
	// 	include_once '../application/dbs/' . $meta . '.php';
	// 	return new $meta;
	// }
}