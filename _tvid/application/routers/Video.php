<?php 

class Video extends Router {
	public function index()
	{
		$data['judul'] = 'Videography';
		$this->interface('_temp/Head', $data);
		$this->interface('video/index');
		$this->interface('_temp/Foot');
	}
}