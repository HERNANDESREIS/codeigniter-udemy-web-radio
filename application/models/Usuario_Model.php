<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_Model extends CI_Model {


	// atributos do banco de dados
	public  $id;
	public $nome; 
	public $codigo;
	public $permisao;
	public $login;
	public $senha;
		
	public function __construct(){
		parent::__construct();
		$this->load->database();
		//$this->
	}

	public function get_user_data($user_login){
		$this->db
		->select('id','nome', 'codigo', 'permisao', 'login', 'senha')
		->from('usuario_adm')
		->where('login',$user_login);

		$result = $this->db->get();

		if($result->num_rows()>0){
			return  $result->row();
		}else{
			return null;
		}

	}

	
}
