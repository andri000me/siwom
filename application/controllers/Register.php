<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$sesi = $this->session->userdata('id_user');
		if($sesi != null) {
			redirect(base_url().'home','refresh');
		} else {
			$this->load->view('user/signup');
		}
	}

	public function aksi_register(){
		$this->load->model('user_m');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$data = array(
			'nama' => $nama,
			'email' => $email,
			'password' => $password,
			'status' => 'unverified'
		); 
		if($this->user_m->create($data)) {
			$result = $this->user_m->read_where(array('email' => $email));
			$user = $result->row();
			$sesi = array('id_user' => $user->id_user);
			$this->session->set_userdata($sesi);
			//$this->output->cache('10080');
			redirect(base_url());
		} else {
			$this->session->set_flashdata('status_register', 'Maaf Pendaftaran Gagal Silahkan Coba lagi.');
			$this->load->view('user/register');
		}
	}
}
