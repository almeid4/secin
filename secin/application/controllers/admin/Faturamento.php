<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faturamento extends CI_Controller {

	public function index()
	{
	    $data['titulo'] = "Faturamento";
	    $data['view'] = 'admin/faturamento/faturamento';
		$this->load->view('admin/template/index', $data);
	}
}