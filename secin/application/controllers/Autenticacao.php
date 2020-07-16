<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Autenticacao extends CI_Controller {

	public function __construct(){

		parent:: __construct();

		$this->load->model('areadoprofessor_model');
		$this->load->model('minicursos_model');
	}


    public function index()

	{


			$data['titulo'] = 'Solicitar cota';

			$data['view'] = 'site/autenticacao';

			$this->load->view('site/autenticacao');

    }


}
