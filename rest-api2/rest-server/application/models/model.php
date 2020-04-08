<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class model extends CI_Model{

	public function cariDataNama()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->like('alamat', $keyword); $this->db->or_like('name', $keyword); $this->db->or_like('email', $keyword);
		return $this->db->get('input')->result_array();
	}

	public function getDataById($id)
	{
		return $this->db->get_where('barang', ['id' => $id ])->row_array();
	}

	public function getDetailById($id)
	{
		return $this->db->get_where('barang', ['id' => $id ])->row_array();
	}

	public function ubahDataById()
	{
		$data =
			[
				'name' => ($this->input->post('name', true)),
				'penerima' => ($this->input->post('penerima', true)),
				'email' => ($this->input->post('email', true)),
				'alamat' => ($this->input->post('alamat', true)),
				'hp' => ($this->input->post('hp', true)),
				'paket' => ($this->input->post('paket', true))
			];

			$this->db->where('id', $this->input->post('id'));
			$this->db->update('barang', $data);
	}
}