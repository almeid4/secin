<?php

defined('BASEPATH') OR exit('No direct script access allowed');


$valor = $_POST["selecione"];

if ($valor == 1){
    header('Location: cota');
}
else{
    header('Location: cota2');
}
class Processa extends CI_Controller {



	public function index()

	{


		$this->load->view('site/processa');

	}

}