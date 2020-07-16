<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Solicitacota_model extends CI_Model {


    public function insert($dados=null){
        $this->db->insert('solicitacoes',$dados);
    }
    public function busca($id=null){
        $this->db->where('id', $id);
        $this->db->limit(1);
        $query = $this->db->get('solicitacoes');
        return  $query;
    }
    public function buscaIdCota($id_user=null){
        $this->db->where('user_id', $id_user);
        $this->db->limit(1);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('solicitacoes');
    }
    public function update($id=null, $dados=null){
        $this->db->set($dados);
        $this->db->where('id', $id);
        $this->db->update('solicitacoes');
    }
    public function delete($id=null){
        $this->db->where('id', $id);
        $this->db->delete('solicitacoes');
    }

    function alterarData($data) {
      $this->db->where('user_id', $data['user_id']);
      $this->db->set($data);
      return $this->db->update('solicitacoes', $data);
    }

}
