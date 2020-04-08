<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class model extends CI_Model{

	public function getEditById($id){
		$this->db->where('id', $id);
		$query = $this->db->get('input');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}
	}