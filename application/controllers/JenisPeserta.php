<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JenisPeserta extends CI_Controller {
	public function index()
	{
        $data['title'] = 'Jenis Peserta';
        $data['menu'] = 'jenis_peserta';
		$data['jenis_peserta'] = $this->db->get('kategori_peserta')->result();
		$this->load->view('templates/admin/header.php', $data);
		$this->load->view('jenis_peserta/index.php', $data);
		$this->load->view('templates/admin/footer.php');
	}
}