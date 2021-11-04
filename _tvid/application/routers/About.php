<?php 

class About extends Router {
	public function index()
	{
		$data['judul'] = 'About TVID';
		$this->interface('_temp/Head', $data);
		$this->interface('about/index');
		$this->interface('_temp/Foot');
	}

	public function artist()
	{
		$data['judul'] = 'About artistName';
		$this->interface('_temp/Head', $data);
		$this->interface('about/artist');
		$this->interface('_temp/Foot');
	}
}