<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function index()
	{
		$this->load->view('_temp/Head');
		$this->load->view('auth/login');
		$this->load->view('_temp/Foot');
	}

	public function register()
	{
		$this->load->view('_temp/Head');
		$this->load->view('auth/daftar');
		$this->load->view('_temp/Foot');
	}
}