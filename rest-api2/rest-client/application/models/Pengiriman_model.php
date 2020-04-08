<?php 

use GuzzleHttp\Client;

class Pengiriman_model extends CI_model {

    private $_client;

    public function __construct(){

        $this->_client = new Client

        ([
            'base_uri' => 'http://localhost/rest-api2/rest-server/api/'
        ]);
    }

    public function getAllPengiriman()
    {
        // return $this->db->get('mahasiswa')->result_array();


        $response = $this->_client->request('GET', 'input',[
            
            'query' => [
                'input' => 'a123'
            ] 

         ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];

    }


        public function getPengirimanById($id)
    {
        //return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();


        $response = $this->_client->request('GET', 'input',[
            
            'query' => [
                'input' => 'a123',
                'id' => $id
            ]

         ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'][0];
    }

    public function tambahDataPengiriman()
    {
        $data = [
            'name' => ($this->input->post('name', true)),
                'penerima' => ($this->input->post('penerima', true)),
                'email' => ($this->input->post('email', true)),
                'alamat' => ($this->input->post('alamat', true)),
                'hp' => ($this->input->post('hp', true)),
                'paket' => ($this->input->post('paket', true)),
            'input' => 'a123'
        ];

        $response = $this->_client->request('POST', 'input',['form_params' => $data
    ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;

        
    }

    public function hapusDataPengiriman($id)
    {
        // $this->db->where('id', $id);
        //$this->db->delete('mahasiswa', ['id' => $id]);

        $response = $this->_client->request('DELETE', 'input',['form_params' => [
            'input' => 'a123',
            'id' => $id
        ]
    ]);


        $result = json_decode($response->getBody()->getContents(), true);
        return $result;


    }


    public function ubahDataPengiriman()
    {
        $data = [
            'name' => ($this->input->post('name', true)),
                'penerima' => ($this->input->post('penerima', true)),
                'email' => ($this->input->post('email', true)),
                'alamat' => ($this->input->post('alamat', true)),
                'hp' => ($this->input->post('hp', true)),
                'paket' => ($this->input->post('paket', true)),
                "id" => $this->input->post('id', true),
            'input' => 'a123'
        ];

        $response = $this->_client->request('PUT', 'input',['form_params' => $data
    ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;

    }

    public function cariDataPengiriman()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('name', $keyword);
        $this->db->or_like('penerima', $keyword);
        $this->db->or_like('email', $keyword);
        $this->db->or_like('hp', $keyword);
        $this->db->or_like('paket', $keyword);

        $response = $this->_client->request('GET', 'input',[
            
            'query' => [
                'input' => 'a123',
            ]

         ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }
}