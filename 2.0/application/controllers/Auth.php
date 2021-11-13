<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->form_validation->set_rules('Email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('Password', 'Password', 'required|trim');
		
		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Login';
			$this->load->view('_temp/Head', $data);
			$this->load->view('auth/login');
			$this->load->view('_temp/Foot');
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$alamat = $this->input->post('Email');
		$pass = $this->input->post('Password');

		$pengguna = $this->db->get_where('user', ['email' => $alamat])->row_array();

		if ($pengguna) {
			// if pengguna active
			if ($pengguna['is_active'] = 1) {
				if (password_verify($pass, $alamat['password'])) {
					$data = [
						'email' => $pengguna['email'],
						'role_id' => $pengguna['role_id']
					];
					$this->session->set_userdata($data);
					redirect('user');
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password!</div>');
					redirect('auth');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This email has been activated, please check your email!</div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This email has not exist, you must register!</div>');
			redirect('auth');
		}
	}

	public function register()
	{
		$this->form_validation->set_rules('Name', 'Name', 'required|trim');
		$this->form_validation->set_rules('Email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
			'is_unique' => 'This email has been already, choose other email!'
		]);
		$this->form_validation->set_rules('Password1', 'Password', 'required|trim|min_length[3]|matches[Password2]', [
			'matches' => 'Password not matching',
			'min_length' => 'Password too short'
		]);
		$this->form_validation->set_rules('Password2', 'Password', 'required|trim|matches[Password1]');
		
		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Registration';
			$this->load->view('_temp/Head', $data);
			$this->load->view('auth/daftar');
			$this->load->view('_temp/Foot');
		} else {
			$data = [
				'name' => htmlspecialchars($this->input->post('Name'), true),
				'email' => htmlspecialchars($this->input->post('Email'), true),
				'image' => 'default.jpg',
				'password' => password_hash($this->input->post('Password1'), PASSWORD_DEFAULT),
				'role_id' => 2,
				'is_active' => 1,
				'date_created' => time()
			];

			$this->db->insert('user', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congrast, Your email has been ready.<br>You can Login now!</div>');
			redirect('auth');
		}
	}
}