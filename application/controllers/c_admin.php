<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

	public function index()
	{
		$data['title']='Halaman Beranda';
		$data['content']='v_berita.php';
		
		$this->load->view('admin/v_template', $data);
	}

	
}

?>