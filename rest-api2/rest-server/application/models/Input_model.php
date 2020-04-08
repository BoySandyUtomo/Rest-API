<?php

class Input_model extends CI_Model 
{

	public function  getInput($id = null)
	{

		if ( $id === null ) {
			return $this->db->get('barang')->result_array();
		} else {

			return $this->db->get_where('barang', ['id' => $id])->result_array();
		}
		
	}  

	public function deleteInput($id)
	{
 
			$this->db->delete('barang', ['id' => $id]);
			return $this->db->affected_rows();
 	}

 	public function createInput($data)
 	{
 		$this->db->insert('barang', $data);
 		return $this->db->affected_rows();
 	}


 	public function updateInput($data, $id)
 	{
 		$this->db->update('barang', $data, ['id' => $id]);
 		return $this->db->affected_rows();
 	}
}