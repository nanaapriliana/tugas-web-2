<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function index()
	{
		echo "ini controller Mahasiswa";
	}

	
	
	public function profil()
	{
		echo "Nama : Nana Apriliana <br>";
		echo "Nim : 1700320020 <br>";
		echo "Email : nanaapriliana640@gmail.com <br>";
	}	

	public function dosen($param1='')
	{
		echo "Nama Dosen".$param1;
	}
	public function krs(, $m='')
	{
		echo "Hello saudara... <br> nama saya ".$m." <br> salam lemper";
	}

	
}


