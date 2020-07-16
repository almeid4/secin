<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Solicitacoes extends CI_Controller {

    public function __construct(){

        parent:: __construct();

        $this->load->model('solicitacao_model');

        $this->load->library('email');

        $this->load->library('form_validation');

	$this->load->model('submissao_model');
        $this->load->model('ion_auth_model');

        #$this->load->library('email');

    }

    public function index()

	{


        $dadosProfessores='';
	    if ($this->ion_auth->logged_in()) {
            $dadosProfessores = $this->ion_auth->user()->row();

           // $this->form_validation->set_rules('titulo', 'Titulo');


            $data['data_solicitacoes'] = $this->submissao_model->getSolicitacoes($dadosProfessores->id);

            $size = count($data['data_solicitacoes']);

            if ($size >= 1){
                setMsg('msgCadastro','Você não pode enviar mais solicitações!', 'erro');

			    redirect('cota','refresh');
            }else{
                $dadosSolicitacao['titulo'] = $this->input->post('titulo');
                $dadosSolicitacao['opcao1'] = $this->input->post('op1');
                $dadosSolicitacao['opcao2'] = $this->input->post('op2');

                if($this->input->post('titulo2') != null){
                    $dadosSolicitacao['titulo2'] = $this->input->post('titulo2');
                    $dadosSolicitacao['opcao11'] = $this->input->post('op11');
                    $dadosSolicitacao['opcao12'] = $this->input->post('op12');
                    $dadosSolicitacao['user_id'] = $dadosProfessores->id;
                }else{
                    $dadosSolicitacao['titulo2'] = null;
                    $dadosSolicitacao['opcao11'] = null;
                    $dadosSolicitacao['opcao12'] = null;
                    $dadosSolicitacao['user_id'] = $dadosProfessores->id;  
                }

                $aa = $this->solicitacao_model->doInserte($dadosSolicitacao);

                //Enviar email de confirmacao

                // Define o endereço de email do remetente.
                $this->email->from("fernandoalmeida@vps18005.publiccloud.com.br", 'Sistema UFOPA');
                // Define o endereço de email do destinatário.
                $this->email->to("tinhofernando44@gmail.com");
                // Define o assunto do email.
                $this->email->subject("Teste");
                // Define a mensagem de email
                $msgBody ='';
                $msgBody .= '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">';
                $msgBody .= '<html>';
                $msgBody .= '<head>';
                $msgBody .= '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
                $msgBody .= '<title>Confirmação de Solicitacaco</title>';
                $msgBody .= '</head>';
                $msgBody .= '<body>';
                $msgBody .= '<session>';
                $msgBody .= '<p> Olá, </p>';

                $msgBody .= '<a href="https://vitrinesantarena.com/login/atualizar_senha" target="blank" style="color:green;">Clique aqui para recuperar sua senha</a>';
                $msgBody .= '</session>';
                $msgBody .= '<p><strong>Observação:</strong> Para sua maior segurança, o código passado só terá validade até a conclusão da sua operação (redefinição de senha).</p>';
                $msgBody .= '<br><br><br>';
                $msgBody .= '<session>';
                $msgBody .= '<br>';
                $msgBody .= '<p></p>';
                $msgBody .= '</session>';
                $msgBody .= '</body>';
                $msgBody .= '</html>';

                $this->email->message($msgBody);


	        setMsg('msgCadastro','Solicitação enviada com sucesso! Aguarde o email de confirmação!', 'sucesso');

                redirect('cota','refresh');


                // Tenta enviar o email.
                /* if ($this->email->send()) {
                    setMsg('msgCadastro','Email enviado com sucesso!', 'sucesso');

                    redirect('cota','refresh');
                } else {
                    setMsg('msgCadastro','email nao enviado!', 'erro');

                    show_error($this->email->print_debugger());

                    redirect('cota','refresh');

                }*/
            }

		//$this->load->view('site/template/index', $data);
	  }else{
		redirect('login','refresh');
          }
      }


      public function atualizar(){

        $dadosprofessores = '';
        if ($this->ion_auth->logged_in()) {
	    $dado = array(
              'titulo' => $this->input->post('titulo'),
              'opcao1' => $this->input->post('op1'),
              'opcao2' => $this->input->post('op2'),
              //'titulo2' => $this->input->post('titulo2'),
              //'opcao11' => $this->input->post('op11'),
              //'opcao12' => $this->input->post('op12')
            );
            $dadosProfessores = $this->ion_auth->user()->row();
            $id = $dadosProfessores->id;
            $result = $this->solicitacao_model->recuperaDados($id);
            $this->solicitacao_model->toUpdate($id, $dado);
        }else{
            redirect('login', 'refresh');
        }

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
            $this->solicitacao_model->toUpdate($id, $dado);
        }else{
            redirect('login', 'refresh');
        }

     }

    public function formAtualiza(){
        $d = $this->ion_auth->user()->row();
	if(isset($d->titulo2) != null){
          $this->load-view('site/atualizacota2');
        }else{
          $this->load->view('site/atualizacota');
        }
    }

    public function atualizamodulo(){
        $dadosProfessores='';
        $dadosProfessores = $this->ion_auth->user()->row();
        $user = $this->ion_auth->user()->row();
        $id_user = $user->id;
        $idCota = $this->solicitacota_model->buscaIdCota($id_user);
        $informacoesCota = $this->solicitacota_model->busca($idCota);

        $data;
        if(isset($informacoesCota->titulo2)){
            $data['titulo'] = "Atualizar Informações";
            $data['view'] = 'site/cota2';
        }else{
            $data['titulo'] = "Atualizar Informações";
            $data['view'] = 'site/cota';
        }
        $data['data_user']  = $dadosProfessores;
        $this->load->view('site/template/index', $data);
    }
}

