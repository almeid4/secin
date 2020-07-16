<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Solicitacao_model extends CI_Model {

    public function doInserte($dados=null){
        $this->db->insert('solicitacoes', $dados);

    }
    public function toUpdate($id=null, $dados=null){
        if(isset($id)){
          $this->db->update('solicitacoes', $dados);
        }
    }

    public function recuperaDados($id=null){
        $this->db->where('id', $id);
        $this->db->get('solicitacoes')->row;

    }
}
