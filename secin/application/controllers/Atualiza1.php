<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Atualiza1 extends CI_Controller {
    public function __construct(){
        parent:: __construct();
        $this->load->model('solicitacota_model');
        $this->load->model('solicitacao_model');
       // $this->load->model('atualizamodulo_model');
        $this->load->library('form_validation');
        $this->load->model('ion_auth_model');
        $this->load->model('submissao_model');

        if(!$this->ion_auth->logged_in()){
            redirect('login', 'refresh');
        }
    }

    public function index(){

        $user = $this->ion_auth->user()->row();
        $data['data_solicitacoes'] = $this->submissao_model->getSolicitacoes($user->id);
        $data['data_user'] = $user;
        $data['titulo'] = "Solicitações";
        $data['view'] = 'site/atualizacota';
        $this->load->view('site/template/index', $data);
    }
}
