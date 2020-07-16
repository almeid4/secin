<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Cota2 extends CI_Controller {



	public function index()

	{

		$dadosProfessores='';
		if ($this->ion_auth->logged_in()) {
			$dadosProfessores = $this->ion_auth->user()->row();

			$data['titulo'] = 'Solicitar cota';

			$data['data_user']  = $dadosProfessores;

			$data['view'] = 'site/cota2';

			$this->load->view('site/template/index', $data);
		}else{
			redirect('login','refresh');
		}

	}

}
