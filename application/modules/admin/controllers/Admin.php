<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('admin_model');
	}

	public function index()
	{
		$data['barang'] = $this->db->get('barang')->result();
		admin_page('index', $data);
	}
	
	public function tambah()
	{
		$model = $this->admin_model;
		$validation = $this->form_validation;
		$validation->set_rules($model->barang_rules());
		if ($validation->run()) {
			$model->tambah();
		} else {
			admin_page('tambah_form');
		}
	}

	public function edit()
	{
		$model = $this->admin_model;
		$validation = $this->form_validation;
		$validation->set_rules($model->barang_rules());
		if ($validation->run()) {
			$model->edit();
		} else {
			$id = $this->uri->segment('3');
			$data['barang'] = $this->db->get_where('barang', ['id' => $id])->row();
			admin_page('edit_form', $data);
		}
	}
	public function hapus()
	{
		$this->admin_model->hapus();
	}
}
