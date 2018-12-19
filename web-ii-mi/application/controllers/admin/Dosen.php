<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('dosen_model');
	}

	public function index()
	{
		$data['judul'] = 'Dosen';
		$data['sub_judul'] = 'Halaman Dosen';
		$data['halaman'] = 'admin/v_dosen';
		$data['isi_tabel'] = $this->dosen_model->all();

		$this->load->view('admin/v_tamplate',$data);

	}
	public function tambah()
	{
		$data['judul'] = 'Dosen';
		$data['sub_judul'] = 'Halaman Dosen';
		$data['halaman'] = 'admin/v_dosen_tambah';
		$data['isi_tabel'] = $this->dosen_model->all();

		$this->load->view('admin/v_tamplate',$data);

	}
}