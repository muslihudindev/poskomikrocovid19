<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peta extends CI_Controller {

	public function index()
	{
		$data['data_rw'] = $this->db->query("
        SELECT
		a.rw,
		(SELECT 
		SUM(b.kasus)
		FROM
		datasebarancovid b
		WHERE
		b.rw=a.rw
		) as jumlah_kasus_perrw
		FROM
		datasebarancovid a
		GROUP BY a.rw
		")->result_array();
		
		$this->load->view('peta', $data);
	}
}