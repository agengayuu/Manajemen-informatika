<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {

	public function index()
	{
        $data['judul'] = 'Manajemen Informatika - Matakuliah';

        $this->load->view('Templates/header', $data);
		$this->load->view('Manajemen-informatika/matakuliah');
        $this->load->view('Templates/footer');
	}
}
