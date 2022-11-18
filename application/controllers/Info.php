<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Info extends CI_Controller
{


	public function index()
	{
		$data = [
			"base" => base_url(),
			"menu" => "info",
			"nama" => "My Name",
			"notlp" => "My Number",
			"alamat" => "My Adress",
			"page" => "page/info/info"
		];
		$this->load->view('layout/layout', $data);
	}

	/////////////////////////////////// BIODATA /////////////////////////////////////
	public function biodata()
	{
		$data = [
			"base" => base_url(),
			"nama" => "Mohammad Nurrahman",
			"notlp" => "0897 7367 8732",
			"alamat" => "Jl Gatot Subroto km 09, Kp Cikoneng Ilir, Ds Gandasari, Kec. Jatiuwung Kota Tangerang",
			"page" => "page/info/biodata"
		];
		$this->load->view('layout/layout', $data);
	}

	/////////////////////////////////// KALKULATOR /////////////////////////////////////
	public function kalkulator($angka, $angka2)
	{
		$data = [
			"base" => base_url(),
			"angka" => $angka,
			"angka2" => $angka2,
			"page" => "page/info/kalkulator"
		];
		$this->load->view('layout/layout', $data);
	}

	/////////////////////////////////// CV /////////////////////////////////////
	public function cv()
	{
		$data = [
			"base" => base_url(),
			"page" => "page/info/cv"
		];
		$this->load->view('layout/layout', $data);
	}
}
