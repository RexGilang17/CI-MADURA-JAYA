<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function index()
	{
		$data = [
			"base" => base_url(), // untuk include CSS/JS
			"menu" => "dash",
			"page" => "page/home"
		];
		$this->load->view('layout/layout', $data);
	}
}
