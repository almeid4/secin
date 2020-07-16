<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Solicitacao extends CI_Controller {
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
        $data['data_user'] = $user;
        $data['titulo'] = "Solicitações";
        $data['view'] = 'site/quantidade';
        $this->load->view('site/template/index', $data);
    }
    public function atualizamodulo(){

	$user = $this->ion_auth->user()->row();

        $data = array(
                    'user_id' => $user->id,
                    'titulo' => $this->input->post('titulo'),
                    'opcao1' => $this->input->post('op1'),
                    'opcao2' => $this->input->post('op2')
                    );
        $alt = $this->submissao_model->alterarData($data);
        if($alt){

          setMsg('msgCadastro','Alteração realizada com sucesso!', 'successo');
          redirect('edit', 'refresh');

        }
        //$data['data_solicitacoes'] = $this->submissao_model->getSolicitacoes($user->id);
        //$data['view'] = 'site/atualizacota';
        //$data['data_user'] = $user;
        //$this->load->view('site/template/index', $data);

   }

    public function atualizamodulo2(){

        $user = $this->ion_auth->user()->row();

        $data = array(
                    'user_id' => $user->id,
                    'titulo2' => $this->input->post('titulo2'),
                    'opcao11' => $this->input->post('op11'),
                    'opcao12' => $this->input->post('op12')
                    );
        $alt = $this->submissao_model->alterarData($data);
        if($alt){

          setMsg('msgCadastro','Alteração realizada com sucesso!', 'successo');
          redirect('edit', 'refresh');

        }

        //$data['data_solicitacoes'] = $this->submissao_model->getSolicitacoes($user->id);
        //$data['view'] = 'site/atualizacota2';
        //$data['data_user'] = $user;
        //$this->load->view('site/template/index', $data);
    }


     public function atualizar2(){

        $dadosprofessores = '';
        if ($this->ion_auth->logged_in()) {
            $dado = array(
              //'titulo' => $this->input->post('titulo'),
              //'opcao1' => $this->input->post('op1'),
              //'opcao2' => $this->input->post('op2'),
              'titulo2' => $this->input->post('titulo2'),
              'opcao11' => $this->input->post('op11'),
              'opcao12' => $this->input->post('op12')
            );
            $dadosProfessores = $this->ion_auth->user()->row();
            $id = $dadosProfessores->id;
            $result = $this->solicitacao_model->recuperaDados($id);
            $this->solicitacota_model->update($id, $dado);
        }else{
            redirect('login', 'refresh');
        }

     }

    public function core(){

       $user = $this->ion_auth->user()->row();
       $id_user = $user->id;
       $idCota = $this->solicitacota_model->buscaIdCota($id_user);
       $informacoesCota = $this->solicitacota_model->busca($idCota->idCota);
       echo '<pre>';
       print_r($idCota);
       echo '</pre>';
       exit;
       if($idCota != null){
        //atualiza
        $informacoes;
            if($informacoesCota->titulo2 != null){
                $informacoes['titulo'] = $this->input->post('titulo');
                $informacoes['opcao1'] = $this->input->post('op1');
                $informacoes['opcao2'] = $this->input->post('op2');
                $informacoes['titulo2'] = $this->input->post('titulo2');
                $informacoes['opcao11'] = $this->input->post('op11');
                $informacoes['opcao12'] = $this->input->post('op12');
                $informacoes['user_id'] = $id_user;
            }else{
                $informacoes['titulo'] = $this->input->post('titulo');
                $informacoes['opcao1'] = $this->input->post('op1');
                $informacoes['opcao2'] = $this->input->post('op2');
                $informacoes['titulo2'] = null;
                $informacoes['opcao11'] = null;
                $informacoes['opcao12'] = null;
                $informacoes['user_id'] = $id_user;
            }
        $this->solicitacota_model->update($idCota, $informacoes);

        //fim atualiza
       }else{
        //registra

        $informacoes;
        if($this->input->post('titulo2') != null){
            $informacoes['titulo'] = $this->input->post('titulo');
            $informacoes['opcao1'] = $this->input->post('op1');
            $informacoes['opcao2'] = $this->input->post('op2');
            $informacoes['titulo2'] = $this->input->post('titulo2');
            $informacoes['opcao11'] = $this->input->post('op11');
            $informacoes['opcao12'] = $this->input->post('op12');
            $informacoes['user_id'] = $id_user;
        }else{
            $informacoes['titulo'] = $this->input->post('titulo');
            $informacoes['opcao1'] = $this->input->post('op1');
            $informacoes['opcao2'] = $this->input->post('op2');
            $informacoes['titulo2'] = null;
            $informacoes['opcao11'] = null;
            $informacoes['opcao12'] = null;
            $informacoes['user_id'] = $id_user;
        }
        $this->solicitacota_model->insert($informacoes);
        //fim registra
       }
       redirect('homepage', 'refresh');

    }
}

