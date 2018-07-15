<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
	}

	public function index()
	{
		$data["all_berita"] = $this->m_user->get_all();
		$this->load->view('v_template', $data);
	}

	// public function getBerita()
	// {
	// 	$data["all_berita"] = $this->m_user->get_all();
	// 	$this->load->view('admin/v_berita', $data);
	// }
	public function logout()
	{
		$this->session->unset_userdata('');
	}
}

?>
