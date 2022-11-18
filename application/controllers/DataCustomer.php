<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataCustomer extends CI_Controller
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
			"menu" => "customer",
			"page" => "page/master/customer/data"
		];
		$this->load->view('layout/layout', $data);
	}

	public function add()
	{
		$data = [
			"base" => base_url(),
			"menu" => "customer",
			"page" => "page/master/customer/add"			
		];
		$data['kode'] = $this->ms->kodebv2('CST', 'id', 'customer', 3, 4);
		$this->load->view('layout/layout', $data);
	}
	function tambah_aksi()
	{
		$kodecust = $this->input->post('kodecust');
		$nm_cust = $this->input->post('nm_cust');
		$telp = $this->input->post('telp');
		$alamat = $this->input->post('alamat');
		$data = array(
			'id' => $kodecust,
			'nm_cust' => $nm_cust,
			'telp' => $telp,
			'alamat' => $alamat,
		);
		$this->ms->input_data('customer', $data);
		redirect('Datacustomer/add');
	}

	public function delete($id)
	{
		$this->ms->delete('customer', $id, 'id');
		redirect('Datacustomer');
	}
	//End table view

	public function edit($id)
	{
		$data = array(
			"base" => base_url(),
			"menu" => "customer",
			"page" => "page/master/customer/edit",
		);

		$row = $this->ms->getby_id('customer', $id, 'id')->row();
		$data['id'] = $row->kodecust;
		$data['nm_cust'] = $row->nm_cust;
		$data['telp'] = $row->telp;
		$data['alamat'] = $row->alamat;
		$data['url_post'] = '../edit_aksi';
		$this->load->view('layout/layout',$data);
	}

	function edit_aksi()
	{
		$kodecust = $this->input->post('kodecust');
		$nm_cust = $this->input->post('nm_cust');
		$telp = $this->input->post('telp');
		$alamat = $this->input->post('alamat');
		$data = array(
			'nm_cust' => $nm_cust,
	
		);
		$this->ms->update_data('barang', $data, $kodecust, 'kdbarang');
		redirect('Databarang/edit/' . $kodecust);
	}


}
