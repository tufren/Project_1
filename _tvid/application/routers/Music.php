<?php 

class Music extends Router {
	public function index()
	{
		$data['judul'] = 'Discography';
		$data['objek'] = $this->dabes('Meta')->getUser();
		$this->interface('_temp/Head', $data);
		$this->interface('music/index', $data);
		$this->interface('_temp/Foot');
	}
}