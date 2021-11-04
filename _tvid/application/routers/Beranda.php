<?php 

class Beranda extends Router {
	public function index()
	{
		$data['judul'] = 'TVID Production';
		$this->interface('_temp/Head', $data);
		$this->interface('_temp/Nav');
		$this->interface('home/index');
		$this->interface('_temp/Foot');
	}
}