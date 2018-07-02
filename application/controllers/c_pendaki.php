<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pendaki extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_query');
		$this->load->library('form_validation');
		$this->load->helper('url','html');

	}

	public function index()
	{
		$data = $this->m_query->dataPendaki();
		$this->load->view('v_pendaki', ['data'=>$data]);
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
			$pendaki = (['noktp'=>$noktp,
							'nama'=>$nama,
							'alamat'=>$alamat,
							'nohp'=>$nohp]);
			$data = array_merge($pendaki);
			if ($this->m_query->TambahPendaki($data) == false) 
			{
				$this->session->set_flashdata('pesan','Data Anda Sudah Tersimpan di database');
				$this->load->view('v_pendaki');	
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
}