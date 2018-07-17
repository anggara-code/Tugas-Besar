<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_tamu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_query');
		$this->load->model('m_user');
		$this->load->library('form_validation');
		$this->load->helper('url','html');
		/*$sess=$this->session->userdata('session_user');
		// print_r($sess); die;
		if ($sess['level']!='admin') {
			redirect(base_url().'c_login/keluar');
		}*/

	}

		public function index()
	{
		$data["all_berita"] = $this->m_user->get_all();
		$this->load->view('v_template', $data);
	}

	public function insertPendaki()
	{
		$this->form_validation->set_rules('noktp', 'noktp', 'required');
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('alamat', 'alamat', 'required');
		$this->form_validation->set_rules('nohp', 'nohp', 'required');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
		if ($this->form_validation->run())
		{
			$noktp = $this->input->post('noktp');
			$nama = $this->input->post('nama');
			$alamat = $this->input->post('alamat');
			$nohp = $this->input->post('nohp');
			$pendaki = array('noktp'=>$noktp,
							'nama'=>$nama,
							'alamat'=>$alamat,
							'nohp'=>$nohp);
			// $data = array_merge($pendaki);
			if ($this->m_query->TambahPendaki($pendaki) == false) 
			{
				$this->session->set_flashdata('pesan','Data Anda Sudah Tersimpan di database');
				redirect('c_tamu','refresh');
			}
			else
			{
				$this->index();
			}
		} 
		else
		{
			$this->index();
		}
	}
	
	/*public function EditPendaki($data)
	{
		$data = $this->m_query->AmbilDataPendaki($no);
		$this->load->view('v_editpendaki', ['data'=>$data]);
	}*/
	
}