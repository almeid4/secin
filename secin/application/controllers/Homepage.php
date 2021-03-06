<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Homepage extends CI_Controller {

	public function __construct(){

		parent:: __construct();

		$this->load->model('areadoprofessor_model');
		$this->load->model('minicursos_model');

	}

	public function index()

	{

		$dadosProfessores='';
		if ($this->ion_auth->logged_in()) {

			$dadosProfessores = $this->ion_auth->user()->row();

			$data['titulo'] = 'Página inicial';

			$data['data_user']  = $dadosProfessores;

			$data['view'] = 'site/home';

			$this->load->view('site/template/index', $data);
		}else{
			redirect('login','refresh');
		}

	}

}
