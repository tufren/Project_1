<?php 

class Artist extends Router {
	public function index()
	{
		$data['judul'] = "The Artist's";
		$data['objek'] = $this->dabes('Meta')->getUser();
		$this->interface('_temp/Head', $data);
		$this->interface('artist/index', $data);
		$this->interface('_temp/Foot');
	}
}