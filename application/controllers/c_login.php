<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url', 'html');
		$this->load->library('form_validation');
		$this->load->model('m_query');
		/*$this->load->controllers('c_pendaki');*/
	}
	public function index()
	{
		if ($this->session->userdata('level') == "admin") {
			redirect('c_admin');
		}
		$this->load->view('v_login');		
	}

	public function user_login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('pass', 'Pass', 'required|min_length[3]');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
		if ($this->form_validation->run()) {
			$username = $this->input->post('username');
			$pass = $this->input->post('pass');
			$this->m_query->login($username, $pass);
			// redirect(site_url().'c_pendaki');
		} else {
			$this->index();
		}
	}

	public function pendaki()
	{
		$this->load->view('v_pendaki');
	}

	public function keluar()
	{
		$this->session->sess_destroy();
		redirect('c_login','refresh');
	}

}

/* End of file c_login.php */
/* Location: ./application/controllers/c_login.php */