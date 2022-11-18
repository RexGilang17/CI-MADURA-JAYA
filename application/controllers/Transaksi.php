<?php
defined('BASEPATH') or exit('No direct script access allowed');

class transaksi extends CI_Controller
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
			"menu" => "transaksi",
			"page" => "page/master/transaksi/data"
		];
		$data["transaksi"] = $this->ms->getAll('transaksi_h')->result();
		$this->load->view('layout/layout', $data);
	}

	public function add()
	{
		
		$query_cust = array (
			"select" => "a.* ",
			"table" => " customer a order by a.id ASC",
			"join" => "",
			"where" => "",
		);
		$res_cust = $this->ms->getAlljoin ($query_supp)-> result_array
		();
		$e = 0;
		foreach ($res_ as $rowcust) {
			$data ['default']['supplier'][$e]['value'] = $rowcust
			['id'];
			$data ['default']['supplier'][$e]['display'] = $rowcust
			['nm_cust'];
			$e++;
		}

		$query_cust = array (
			"select" => "a.* ",
			"table" => " customer a order by a.id ASC",
			"join" => "",
			"where" => "",
		);
		$res_cust = $this->ms->getAlljoin ($query_supp)-> result_array
		();
		$e = 0;
		foreach ($res_cust as $rowcust) {
			$data ['default']['supplier'][$e]['value'] = $rowcust
			['id'];
			$data ['default']['supplier'][$e]['display'] = $rowcust
			['nm_cust'];
			$e++;
		}

		$data = [
			"base" => base_url(),
			"menu" => "transaksi",
			"page" => "page/master/transaksi/add"
		];
		$data['url_post'] = 'tambah_aksi';
		$data['kode'] = $this->ms->kodebv2('TR', 'id_trans', 'transaksi_h', 2, 4);
		$this->load->view('layout/layout', $data);
	}
	function tambah_aksi()
	{
		$id_trans = $this->input->post('id_trans');
		$jns_trans = $this->input->post('jns_trans');
		$tgl_trans = $this->input->post('tgl_trans');
		$ref_id = $this->input->post('ref_id');
		$supp_id = $this->input->post('supp_id');
		$cust_id = $this->input->post('cust_id');
		$data = array(
			'id_trans' => $id_trans,
			'jns_trans' => $jns_trans,
			'tgl_trans' => $tgl_trans,
			'ref_id' => $ref_id,
			'supp_id' => $supp_id,
			'cust_id' => $cust_id,
		);
		$this->ms->input_data('transaksi_h', $data);
		redirect('Transaksi/add');
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
