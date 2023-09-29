<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function checklogin()
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		$q = $this->db->get_where('admin', array('username' => $username, 'password' => md5($password)));
		if($q->num_rows() > 0){
			$row = $q->row();
			$data = array(
				"username" => $row->username,
				"nama" => $row->nama,
				"id" => $row->id
			);
			$this->session->set_userdata($data);
			redirect('main');
		}else{
			$this->session->set_flashdata('msg', 'error');
			redirect('welcome');
		}
	}
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('welcome');
	}
}
