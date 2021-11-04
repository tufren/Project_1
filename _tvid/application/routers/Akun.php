<?php 

class Akun extends Router {
	public function index()
	{
		$data['judul'] = 'Masuk';
		$this->interface('_temp/Head', $data);
		$this->interface('login/index');
		$this->interface('_temp/Foot');
	}

	public function admin()
	{
		$data['judul'] = 'Admin Mode';
		$this->interface('_temp/Head', $data);
		$this->interface('login/admin/index');
		$this->interface('_temp/Foot');
	}

	public function user()
	{
		$data['judul'] = 'Pengguna';
		$data['objek'] = $this->dabes('Meta')->getUser();
		$this->interface('_temp/Head', $data);
		$this->interface('login/user/index', $data);
		$this->interface('_temp/Foot');
	}
}