<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Login extends CI_Controller {

	public function __construct(){

			parent:: __construct();

			$this->load->library('form_validation');



			#$this->load->model('ion_auth_model');

			#$this->load->library('email');

	}


	public function index()

	{

		$this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[6]|valid_email');

			$this->form_validation->set_rules('senha', 'Senha', 'trim|required|min_length[6]|max_length[12]');


			$login[] = '';

			if ($this->form_validation->run() == TRUE) {


			    $identity = $this->input->post('email');

			    $password = $this->input->post('senha');

			    //$remember = ($this->input->post('manterconectado')!= NULL? TRUE : FALSE);

				$group = 1; //grupo de usuarios clientes



				//se as informações forem inseridas na table USERS e uma sessão for aberta

					$this->load->model('ion_auth_model');

			    	if ($this->ion_auth->login($identity,$password)) {

			    		redirect('homepage','refresh');

					} else {

						setMsg('msgCadastro','Algo deu errado, tente novamente!', 'erro');

						redirect('login','refresh');

					}



			}


			$data['titulo'] = 'Entrar';

			//template
			$this->load->view('site/login', $data);

	}



	public function cadastrar(){



		#valida os dados do formulario

		if ($this->ion_auth->logged_in()) {

			setMsg('msgCadastro','Você já está logado no sistema!', 'erro');

			redirect('homepage','refresh');

		}

			$this->form_validation->set_rules('nome', 'Nome', 'trim|required|min_length[6]');

			$this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[6]|valid_email|is_unique[users.email]', array('is_unique' => 'O Email já está cadastrado no sistema'));

			$this->form_validation->set_rules('senha', 'Senha', 'trim|required|min_length[6]|max_length[8]');

			$this->form_validation->set_rules('senhaconfirmacao', 'Confirmar senha', 'trim|required|min_length[6]|max_length[12]|matches[senha]', array('matches' => 'As senhas precisam ser iguais!') );

			/*$this->form_validation->set_rules('categoria', 'Categoria', 'trim|required|min_length[1]');*/



			if ($this->form_validation->run() == TRUE) {


				//echo "ok";
				$username = $this->input->post('nome');

				$password = $this->input->post('senha');

				$email = $this->input->post('email');

	    		$group = array('1'); // Sets user to clientes.



	    		//gerar um codigo de verificação caso a senha tenha trocada

			$additional_data = [];


	    		//fazer o registro na table users

	    		if ($this->ion_auth->register($username, $password, $email, $additional_data, $group)) {

					$this->load->model('areadoaluno_model', 'ussuers');

					$dados = [
						'user_id' => $this->db->insert_id(),
						'group_id' => '1'
					];

					$this->ussuers->salvanIdGroup($dados);
					//exit;

	    			        setMsg('msgCadastro','Cadastro realizado com sucesso, agora faça seu login!', 'sucesso');

					redirect('login','refresh');
					//exit;

	    		}



			}


		//template

		$this->load->view('site/cadastrar');

	}



	public function logout()

			{

				while ($this->ion_auth->logged_in()) {

					$this->ion_auth->logout();

				}

				redirect('login','refresh');


			}



}
