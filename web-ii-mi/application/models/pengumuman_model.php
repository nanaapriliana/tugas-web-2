<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class pengumuman_model extends CI_Model {

	public function all()
	{
		return $this->db->get('pengumuman')->result();
	}

	public function get()
	{

	}

	public function create($objek)
	{
		return $this->db->insert('pengumuman', $objek);
	}

	public function update($id , $objek)
	{
		return $this->db->where('Id' , $id)->update('pengumuman' , $objek);
	}

	public function remove($kode)
	{
		return $this->db->delete('pengumuman', array('Id' => $kode));

	}

	public function get_id($kode){
		return $this->db->where('Id', $kode)->get('pengumuman')->row();
	}


	
}






 ?>