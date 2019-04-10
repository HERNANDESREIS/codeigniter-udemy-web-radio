<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_Model extends CI_Model {

	public function check_login($email,$senha){
		//definindo o parametro from do db
		$this->db->from('usuarios');

		//definindo a clausula where da busca do db
		$this->db->where('email',$email);
		$this->db->where('senha',$senha);

		//execultando o comando no db  , e armazenado o resultado na variavel $usuarios
		$usuarios = $this->db->get();

		if($usuarios->num_rows()){//se o numero de linhas for maios q zero  tudo ok exixte usuario

			//armazenado o resultado de todos os usuarios que contenha o mesmo email e senha 
			$usuario = $usuarios->result_array();

			// retornando o usuarios exixtente
			return $usuario[0];

		}else{
			return false;
		}

	}

	
}
