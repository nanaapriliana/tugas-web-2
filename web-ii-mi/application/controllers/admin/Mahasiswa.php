<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mahasiswa_model');
	}

	public function index()
	{
		$data['judul'] = 'Mahasiswa';
		$data['sub_judul'] = 'Halaman Mahasiswa';
		$data['halaman'] = 'admin/v_mahasiswa';
		$data['isi_tabel'] = $this->mahasiswa_model->all();

		$this->load->view('admin/v_tamplate',$data);

	}
	public function tambah()
	{
		$data['judul'] = 'Mahasiswa';
		$data['sub_judul'] = 'Halaman Mahasiswa';
		$data['halaman'] = 'admin/v_mahasiswa_tambah';
		$data['isi_tabel'] = $this->mahasiswa_model->all();

		$this->load->view('admin/v_tamplate',$data);

	}
	public function proses_tambah()
	{
		$job = array(
			'nim' =>$this->input->post('NIM'),
			'nama_mahasiswa' =>$this->input->post('nama_mahasiswa'),
			'program_studi' => $this->input->post('program_studi')
		);
		$this->mahasiswa_model->create($job);
		
		redirect ('admin/mahasiswa','refresh');
	}
	public function hapus($nim)
	{
		$this->mahasiswa_model->remove($nim);
		redirect('admin/mahasiswa','refresh');
	}
}