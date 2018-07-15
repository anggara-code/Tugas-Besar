<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_query extends CI_Model {

	var $table = "users";

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function login($username, $pass)
		{
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where(['username'=>$username, 'pass'=>$pass]);
			$return = $this->db->get('');
			if ($return->num_rows() > 0) {
				$rows = $return->row_array();
				
				$this->session->set_userdata('session_user',$rows);
				redirect('c_admin');
				
				// echo "sukses";
			}
			else{
				$this->session->set_flashdata('pesan', 'username dan password tidak valid');
				redirect('C_login','refresh');
			}
		}	

	public function dataPendaki()
	{
		$this->db->select('*');
		/*$this->db->from('tb_pendaki');*/
		$this->db->order_by('no', 'asc');
		$data = $this->db->get('tb_pendaki');
		return $data;
	}
	public function dataBerita()
	{
		$this->db->select('*');
		/*$this->db->from('tb_pendaki');*/
		$this->db->order_by('no', 'asc');
		$data = $this->db->get('tb_berita');
		return $data;
	}


		public function TambahPendaki($data)
		{
			// $data=array(
			// 	'noktp' => $this->input->post('noktp'),
			// 	'nama' => $this->input->post('nama'),
			// 	'alamat' => $this->input->post('alamat'),
			// 	'nohp' => $this->input->post('nohp'));
			$this->db->insert('tb_pendaki',$data);
		}
		public function TambahBerita($data)
		{
			// $data=array(
			// 	'noktp' => $this->input->post('noktp'),
			// 	'nama' => $this->input->post('nama'),
			// 	'alamat' => $this->input->post('alamat'),
			// 	'nohp' => $this->input->post('nohp'));
			$this->db->insert('tb_berita',$data);
		}

	/*public function AmbilDataPendaki($no)
	{
		$data = $this->db->where(['no'=>$no])
						 ->get("tb_pendaki");
		if ($data->num_rows() > 0) {
			return $data->row();
		}
	}*/
}

/* End of file m_query.php */
/* Location: ./application/models/m_query.php */