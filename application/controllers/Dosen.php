<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

	public function index()
	{
        $data['judul'] = 'Manajemen Informatika - Dosen';

        $this->load->view('Templates/header', $data);
		$this->load->view('Manajemen-informatika/dosen');
        $this->load->view('Templates/footer');
	}
}
