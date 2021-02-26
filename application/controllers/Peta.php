<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peta extends CI_Controller {

	public function index()
	{
		$data['data_rw'] = $this->db->query("
        SELECT
		a.rw,

		(SELECT 
		COUNT(b.rt)
		FROM
		datasebarancovid b
		WHERE
		b.rw=a.rw
		) as jml_rt,

		(SELECT 
		COUNT(b.rt)
		FROM
		datasebarancovid b
		WHERE
		b.rw=a.rw AND
		b.kasus=0
		) as jml_rt_0_kasus,

		(SELECT 
		SUM(b.kasus)
		FROM
		datasebarancovid b
		WHERE
		b.rw=a.rw
		) as kasus,

		(SELECT 
		COUNT(b.rt)
		FROM
		datasebarancovid b
		WHERE
		b.rw=a.rw AND
		b.kasus>=1 AND b.kasus<=5
		) as kasus_kuning,
		
		(SELECT 
		COUNT(b.rt)
		FROM
		datasebarancovid b
		WHERE
		b.rw=a.rw AND
		b.kasus>=6 AND b.kasus<=10
		) as kasus_oranye,
		
		(SELECT 
		COUNT(b.rt)
		FROM
		datasebarancovid b
		WHERE
		b.rw=a.rw AND
		b.kasus>10
		) as kasus_merah

		FROM
		datasebarancovid a
		GROUP BY a.rw
		")->result_array();

		$data['keterangan'] = $this->db->query("
		SELECT
		ket,
		jml
		FROM
		keterangan
		")->result_array();

		$data['keterangan_detail'] = $this->db->query("
		SELECT
		ket,
		jml
		FROM
		keterangan_detail
		")->result_array();
		
		$this->load->view('peta', $data);
	}

	public function GetJumlahRTTerdampak($rw,$status)
	{
		if ($status=='kuning') {
			$data = $this->db->query("
			SELECT
				rt
			FROM
				datasebarancovid
			WHERE rw=".$rw." AND kasus>=1 AND kasus<=5
			")->result_array();

		} else if($status=='oranye') {
			$data = $this->db->query("
			SELECT
				rt
			FROM
				datasebarancovid
			WHERE rw=".$rw." AND kasus>=1 AND kasus<=5
			")->result_array();

		} else if($status=='merah') {
			$data = $this->db->query("
			SELECT
				rt
			FROM
				datasebarancovid
			WHERE rw=".$rw." AND kasus>=1 AND kasus<=5
			")->result_array();
		}

		$string = '';
		foreach ($data as $key) { 
			$string .= ','.$key['rt']; 
		}

		return substr($string,1);
	}
}