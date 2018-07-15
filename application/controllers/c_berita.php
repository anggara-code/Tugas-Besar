<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_berita extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_query');
		$this->load->model('m_user');
		$this->load->library('form_validation');
		$this->load->helper('url','html');
		$sess=$this->session->userdata('session_user');
		// print_r($sess); die;
		if ($sess['level']!='admin') {
			redirect(base_url().'c_login/keluar');
		}

	}

	public function index()
	{
		$data['title']='Berita';
		$data['content']='v_berita.php';
		$data['data'] = $this->m_user->get_all();

		$this->load->view('admin/v_template', $data);
	}

	public function insertBerita()
	{
		/*$data['title']='Insert Berita';
		$data['content']='berita/v_insert.php';

		$this->load->view('admin/v_template', $data);*/
		$this->form_validation->set_rules('judul', 'judul', 'required');
		$this->form_validation->set_rules('isi', 'isi', 'required');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
		if ($this->form_validation->run())
		{
			$fileName = $_FILES['foto']['name'];
			$config['upload_path']          = './assets/images/upload/berita/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['file_name']           = $fileName;


                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('foto'))
                {
                        $error = array('error' => $this->upload->display_errors());
 						$this->index();
                }
                else
                {
                        $this->upload->data();

                        $judul = $this->input->post('judul');
						$isi = $this->input->post('isi');
						$foto = $this->input->post('foto');
						$berita = array('judul'=>$judul,
							'isi'=>$isi,
							'waktu'=>date('Y-m-d H:i:s'),
							'foto'=>$fileName);
			// $data = array_merge($pendaki);
						if ($this->m_query->TambahBerita($berita) == false) 
						{
							$this->session->set_flashdata('pesan','Data Anda Sudah Tersimpan di database');
							redirect('C_berita','refresh');
						}
						else
						{
							$this->index();
						}
                        /*$this->load->view('upload_success', $data);*/
                }

			
		} 
		else
		{
			$this->index();
		}
	}
	public function updateBerita()
	{
		/*$data['title']='Insert Berita';
		$data['content']='berita/v_insert.php';

		$this->load->view('admin/v_template', $data);*/
		$this->form_validation->set_rules('judul', 'judul', 'required');
		$this->form_validation->set_rules('isi', 'isi', 'required');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
		if ($this->form_validation->run())
		{
			$fileName = $_FILES['foto']['name'];
			$config['upload_path']          = './assets/images/upload/berita/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['file_name']           = $fileName;


                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('foto'))
                {
                        $error = array('error' => $this->upload->display_errors());
 						$this->index();
                }
                else
                {
                        $this->upload->data();

                        $judul = $this->input->post('judul');
						$isi = $this->input->post('isi');
						$foto = $this->input->post('foto');
						$berita = array('judul'=>$judul,
							'isi'=>$isi,
							'waktu'=>date('Y-m-d H:i:s'),
							'foto'=>$fileName);
			// $data = array_merge($pendaki);
						if ($this->db->where('id',$this->input->post('id'))->set($berita)->update('tb_berita') == false)
						{
							$this->session->set_flashdata('pesan','Data Anda Sudah Tersimpan di database');
							redirect('C_berita','refresh');
						}
						else
						{
							$this->index();
						}
                        /*$this->load->view('upload_success', $data);*/
                }

			
		} 
		else
		{
			$this->index();
		}
	}
	public function baca()
	{
		$data['title']='Berita';
		/*$data['content']='bacaberita.php';*/
		$data['data'] = $this->m_user->get_all();

		$this->load->view('bacaberita', $data);
	}
	/*public function EditPendaki($data)
	{
		$data = $this->m_query->AmbilDataPendaki($no);
		$this->load->view('v_editpendaki', ['data'=>$data]);
	}*/

}
