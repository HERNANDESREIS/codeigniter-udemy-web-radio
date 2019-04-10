<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conta extends CI_Controller {

	public function entrar(){
		$alerta = null;

		//echo var_dump($this->input->post());


		
		if($this->input->post()){
			if($this->input->post('captcha')) redirect('conta/entrar');
				
				// define as regras de validação
				$this->form_validation->set_rules('email','EMAIL','required|valid_email');
				$this->form_validation->set_rules('senha','SENHA','required|min_length[6]|max_length[20]');

				//execulta as regras de validadção
			if($this->form_validation->run() == true){

				//carrega o model usuarios_model
				$this->load->model('Usuarios_Model');

				//armazena os dados do formulario
				$email = $this->input->post('email');
				$senha = $this->input->post('senha');

				// checa  se o login e possivel atravez do metodo check_login do model
				$login_existe = $this->Usuarios_Model->check_login($email,$senha);
				
				//verrificando se os dados estao corretos
				if($login_existe){
					// login valido //
					$usuario = $login_existe;

					 // iniciar sessao e redirecional para algum lugar  restrito
					
					 // configura os dados da session
					 $session = array(
						'senha'  => $usuario['senha'],
						'email'     => $usuario['email'],
						'created'     => $usuario['created'],
						'logado' => TRUE
				);
				
				//inicia liza a session
				$this->session->set_userdata($session);
				redirect('welcome');


				}else{
					$alerta= array(
						"class" => "danger",
						"mensagem" => "Login Invalido <br> " );
					// login invalido
				}

			}else{
				$alerta= array(
					"class" => "danger",
					"mensagem" => "falha na validação do formulario <br> ".validation_errors() 
				);
			}
		}
			$dado = array(
				"alerta" => $alerta
			);
			
			$this->load->view('conta/entrar' , $dado);
	}

	public function sair(){
		$this->session->unset_userdata('logado');
		//session_destroy();
		//$this->session->sess_destroy();

		redirect('welcome');
	}
	
}
