<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Perfil extends CI_Controller {

	public function __construct(){

		parent:: __construct();

		$this->load->model('areadoprofessor_model');
		$this->load->model('minicursos_model');
		$this->load->model('submissao_model');

	
	}


	public function index()

	{
		$dadosProfessores='';
		if ($this->ion_auth->logged_in()) {
			$dadosProfessores = $this->ion_auth->user()->row();

			$data['titulo'] = 'Solicitações';

			$data['data_user']  = $dadosProfessores;

			$data['data_solicitacoes'] = $this->submissao_model->getSolicitacoes($dadosProfessores->id);

            $data['view'] = 'site/perfil';

			$this->load->view('site/template/index', $data);
		}else{
			redirect('login','refresh');
		}

	}

}
