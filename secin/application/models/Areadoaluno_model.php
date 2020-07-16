<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Areadoaluno_model extends CI_Model
{
	public function getValuesDb(){
	    return $this->db->get('users')->result();
	}

	public function salvanIdGroup($dados=null){
		
		$this->db->insert('users_groups',$dados);

	}
	
}
