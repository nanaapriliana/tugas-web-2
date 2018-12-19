<?php 

/**
* 
*/
class pengumuman extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pengumuman_model'); //kenalan
		//do your magic here
	}
	
	public function index()
	{
		$data['judul'] = 'pengumuman';
		$data['sub_judul'] = 'Halaman pengumuman';
		$data['halaman'] = 'admin/v_pengumuman'; //content

		$data['isi_tabel'] = $this->pengumuman_model->all();

		$this->load->view ('admin/v_tamplate',$data);
		// $sisi_tabel = $this->pengumuman_model->all();
		// print_r($isi_tabel);
	}
	public function Tambah() 
	{
//		echo "fungsi Tambah";
		$data['judul'] = ' Tambah pengumuman';
		$data['sub_judul'] = 'Tambah pengumuman';
		$data['halaman'] = 'admin/v_tambah_pengumuman'; //content

	//	$data['isi_tabel'] = $this->pengumuman_model->all();

		$this->load->view ('admin/v_tamplate',$data);
	}

	public function proses_tambah()
	{
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$penulis = $this->input->post('penulis');

		$objek = array(
		 'judul' => $judul,
		 'isi' => $isi,
		 'penulis' => $penulis

		);

		if ($this->pengumuman_model->create($objek)) {
	
			$this->session->set_flashdata('info', 'Data Berhasil disimpan');
			redirect('admin/pengumuman');

		}else{

			$this->session->set_flashdata('info', 'Data Gagal disimpan');
			redirect('admin/pengumuman');

		}

	//	var_dump($objek);
	}
	public function hapus($kode) 
	{
		if ($this->pengumuman_model->remove($kode)) {


			$this->session->set_flashdata('info', 'Data Berhasil dihapus');
			redirect('admin/pengumuman');

		}else{

			$this->session->set_flashdata('info', 'Data Gagal dihapus');
			redirect('admin/pengumuman');

		}

	}
	public function edit($id)
	{
		
//		echo "Halaman Edit";
		$data['judul'] = 'edit pengumuman';
		$data['sub_judul'] = 'edit pengumuman';
		$data['halaman'] = 'admin/v_edit_pengumuman'; //content

	    $data['isi_data'] = $this->pengumuman_model->get_id($id);

	    // var_dump($data);

		$this->load->view ('admin/v_tamplate',$data);
	}
	public function proses_edit()
	{
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		$penulis = $this->input->post('penulis');

		$id = $this->input->post('id_pengumuman'); 

		$objek = array(
		 'judul' => $judul,
		 'isi' => $isi,
		 'penulis' => $penulis

		);

		if ($this->pengumuman_model->update($id , $objek)) {
	
			$this->session->set_flashdata('info', 'Data Berhasil di Update');
			redirect('admin/pengumuman');

		}else{

			$this->session->set_flashdata('info', 'Data Gagal di Update');
			redirect('admin/pengumuman');
	}

	

}

}