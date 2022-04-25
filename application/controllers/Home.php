<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
        $data['judul'] = 'Manajemen Informatika - Index';

        $this->load->view('Templates/header', $data);
		$this->load->view('Manajemen-informatika/index');
        $this->load->view('Templates/footer');
	}
}
