<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regist extends CI_Controller {


	public function index()
	{


		$data = array(
			'data' => $this->db->get("t_jurusan")->result()
			
			 
		);


	

		
		$this->load->view('regist', $data);
	}


	public function cek()
	{
	
		$data = array(
			'nama' => $_POST['nama'], 
			'asal_sekolah' => $_POST['sekolah'],
			'alamat' => $_POST['alamat'],
			'no_hp' => $_POST['no_hp'],
			'jurusan' => $_POST['Jurusan_yang_di_pilih'],
			
		);
		// insert 
		$this->db->insert("t_pendaftar", $data);

		// get data
		$sql = $this->db->where($data)->get("t_pendaftar")->row();


		$data_user = array(
			'username' => $_POST['username'],
			'password' => md5($_POST['password']),
			'id_pendaftar' => $sql->id, 
			'status' => '1',
			'jabatan' => '2',
		);

		// insert 
		$this->db->insert("t_login", $data_user);

	

		
		$message = "/";
	
		 redirect($message);
	}


	public function status()
	{


		$data = array(
			'data' => $this->db->query("SELECT a.*, b.status FROM t_pendaftar a LEFT JOIN t_login b ON b.id_pendaftar = a.id")->result()
	
			
			 
		);


	

		
		$this->load->view('status', $data);
	}


}