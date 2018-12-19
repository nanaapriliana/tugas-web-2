<?php 
defined('BASEPATH') OR exit('No direct cript access allowed');

class Mahasiswa_model extends CI_Model {
	public function all()
	{
		//select * from mahasiswa
		return $this->db->get('mahasiswa')->result();
	}
	public function create($object)
	{
		return $this->db->insert('mahasiswa', $object);
	}
	public function remove($id)
	{
		$this->db->where('nim',$id);
		return $this->db->delete('mahasiswa');
	}
}


 ?>