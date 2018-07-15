<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		/*$this->load->model('m_query');
		$this->load->library('form_validation');
		$this->load->helper('url','html');*/
		$sess=$this->session->userdata('session_user');
		// print_r($sess); die;
		if ($sess['level']!='admin') {
			redirect(base_url().'c_login/keluar');
		}

	}
	public function index()
	{
		$data['title']='Halaman Beranda';
		$data['content']='v_index.php';

		$this->load->view('admin/v_template', $data);
		// $this->load->view('admin/v_index.php', $data);
	}

	// public function ($value='')
	// {
	// 	// code...
	// }

}

?>
