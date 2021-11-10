<?php 

class Beranda extends Koneksi {
	public function index()
	{
		$data['judul'] = 'TVID Production';
		$this->menampilkan('_temp/Head', $data);
		$this->menampilkan('home/index');
		$this->menampilkan('_temp/Foot');
	}
}