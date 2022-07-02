<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
	}

	public function cek()
	{
		$data = array(
			'username' => $_POST['username'], 
			'password' => md5($_POST['password']),
			
		);

		$sql = 	$this->db->where($data)->get("t_login")->row();

		if(!empty($sql)){
			$data_session =  array(

				'username' => $sql->username,
				'id_pendaftar' =>$sql->id_pendaftar
				
			);
			  $this->session->set_userdata($data_session);

			  if(empty($sql->id_pendaftar)){
				$message = "anggota";
			  }else{
				if($sql->status =='1'){
					$data_session = array(
						'error' => 'Menunggu verifikasi admin',
					);
		
					$this->session->set_userdata($data_session);
					$message = "/";
				}else{
					$message = "users";
				}
				
			  }
		
			
		}else{

			$data_session = array(
				'error' => 'error',
			);

			$this->session->set_userdata($data_session);
			$message = "/";
		}
	
		 redirect($message);
	}


	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('password');

		redirect('/');
	}
}
