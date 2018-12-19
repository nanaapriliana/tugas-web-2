<?php 

class Home extends CI_Controller
{
	public function index()
	{
	//	echo "admin/Home";

		$data ['judul'] = 'dashboard';
		$data['sub_judul'] = 'Halaman Utama';
		$data['halaman'] = 'admin/v_index';

		$this->load->view ('admin/v_tamplate',$data);
	}

	public function coba()
	{
		$data['judul'] = 'Coba';
		$data['sub_judul'] = 'Halaman Coba';
		$data['halaman'] = 'admin/v_coba';

		$this->load->view ('admin/v_tamplate',$data);
	}

	public function pengumuman()
	{
		$data['judul'] = 'pengumuman';
		$data['sub_judul'] = 'Halaman pengumuman';
		$data['halaman'] = 'admin/v_pengumuman';

		$this->load->view ('admin/v_tamplate',$data);
	}


	
	

}

 ?>