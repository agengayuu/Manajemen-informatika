<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Output extends CI_Controller {

	public function index()
	{
        $data['judul'] = 'Manajemen Informatika - Output';

        $this->load->view('Templates/header', $data);
		$this->load->view('Manajemen-informatika/output');
        $this->load->view('Templates/footer');
	}
}
