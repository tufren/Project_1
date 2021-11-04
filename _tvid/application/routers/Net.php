<?php 

class Net extends Router {
	public function index()
	{
		$data['judul'] = 'Connected';
		$this->interface('_temp/Head', $data);
		$this->interface('net/index');
		$this->interface('_temp/Foot');
	}
}