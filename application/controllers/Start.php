<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Start extends CI_Controller {

	public function index()
	{ 
		if ($this->Admin_model->verifyUser()) {
			$this->load->view('header');
			$this->load->view('welcome_message');
			$this->load->view('footer');
		} 
		
	}

	public function getDashboard()
	{
		$data['grafik'] = $this->Admin_model->getDatasebaran();
		$data['grafikdetail'] = $this->Admin_model->getDatasebaranDetail();
		$data['grafikbar'] = $this->Admin_model->getKeterangan();

		echo json_encode($data);
	}
}
