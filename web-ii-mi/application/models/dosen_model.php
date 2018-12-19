<?php 
defined('BASEPATH') OR exit('No direct cript access allowed');

class dosen_model extends CI_Model {
	public function all()
	{
		//select * from mahasiswa
		return $this->db->get('dosen')->result();
	}
}


 ?>