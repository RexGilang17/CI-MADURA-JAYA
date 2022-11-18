<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataBarang extends CI_Controller
{

	function __construct()
	{
		
		parent ::__construct();
		$this->load->model('Master', 'ms');
	}

	public function index()
	{
		$data = [
			"base" => base_url(),
			"menu" => "barang",
			"page" => "page/master/barang/data"
		];
		$data["databarang"] = $this->ms->getAll('barang')->result();
		$this->load->view('layout/layout', $data);
	}

	public function add()
	{
		$data = [
			"base" => base_url(),
			"menu" => "barang",
			"page" => "page/master/barang/add"
		];
		$data['url_post'] = 'tambah_aksi';
		$data['kode'] = $this->ms->kodebv2('CAW', 'kdbarang', 'barang', 3, 4);
		$this->load->view('layout/layout', $data);
	}
	function tambah_aksi()
	{
		$kodebarang = $this->input->post('kodebarang');
		$nm_barang = $this->input->post('nm_barang');
		$stock_mn = $this->input->post('stock_mn');
		$data = array(
			'kdbarang' => $kodebarang,
			'nmbarang' => $nm_barang,
			'stok_mn' => $stock_mn,
		);
		$this->ms->input_data('barang', $data);
		redirect('Databarang/add');
	}

	public function delete($id)
	{
		$this->ms->delete('barang', $id, 'kdbarang');
		redirect('Databarang');
	}
	//End table view

	public function edit($id)
	{
		$data = array(
			"base" => base_url(),
			"menu" => "barang",
			"page" => "page/master/barang/edit",
		);

		$row = $this->ms->getby_id('barang', $id, 'kdbarang')->row();
		$data['kodebarang'] = $row->kdbarang;
		$data['nm_barang'] = $row->nmbarang;
		$data['stock_mn'] = $row->stok_mn;
		$data['url_post'] = '../edit_aksi';
		$this->load->view('layout/layout',$data);
	}

	function edit_aksi()
	{
		$kodebarang = $this->input->post('kodebarang');
		$nm_barang = $this->input->post('nm_barang');
		$stock_mn = $this->input->post('stock_mn');
		$data = array(
			'nmbarang' => $nm_barang,
			'stok_mn' => $stock_mn,
		);
		$this->ms->update_data('barang', $data, $kodebarang, 'kdbarang');
		redirect('Databarang/edit/' . $kodebarang);
	}



}
