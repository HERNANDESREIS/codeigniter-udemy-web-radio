<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restrict extends CI_Controller {

	
	public function index()
	{
		//	GERAR UMA HASH	 BASE DA HASH  
		//echo password_hash("buzao",PASSWORD_DEFAULT);
		$this->template->show('login.php');


		//$this->load->Model('Usuario_Model');
		//print_r( $this->Usuario_Model->get_user_data('lento'));
	}
}
