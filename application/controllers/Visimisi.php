<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visimisi extends CI_Controller {

	public function index()
	{
        $data['judul'] = 'Manajemen Informatika - Visimisi';

        $this->load->view('Templates/header', $data);
		$this->load->view('Manajemen-informatika/Visimisi');
        $this->load->view('Templates/footer');
	}
}
