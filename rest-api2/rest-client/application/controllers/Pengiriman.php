<?php

class Pengiriman extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pengiriman_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Pengiriman';
        $data['pengiriman'] = $this->Pengiriman_model->getAllPengiriman();
        if( $this->input->post('keyword') ) {
            $data['pengiriman'] = $this->Pengiriman_model->cariDataPengiriman();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('pengiriman/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Tambah Data Pengiriman'; 

        $this->form_validation->set_rules('name','Nama', 'required|trim');
        $this->form_validation->set_rules('penerima','Penerima', 'required|trim');
        $this->form_validation->set_rules('email','Email', 'required|trim');
        $this->form_validation->set_rules('alamat','Alamat', 'required|trim');
        $this->form_validation->set_rules('hp','Nomor Hp', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('pengiriman/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Pengiriman_model->tambahDataPengiriman();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('pengiriman
                ');
        }
    }

    public function hapus($id)
    {
        $this->Pengiriman_model->hapusDataPengiriman($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('pengiriman');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Pengiriman';
        $data['pengiriman'] = $this->Pengiriman_model->getPengirimanById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('Pengiriman/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Pengiriman';
        $data['pengiriman'] = $this->Pengiriman_model->getPengirimanById($id);
        $data['paket'] = ['Normal - 25000', 'Express - 30000', 'Hell - 45000'];

       $this->form_validation->set_rules('name','Nama', 'required|trim');
        $this->form_validation->set_rules('penerima','Penerima', 'required|trim');
        $this->form_validation->set_rules('email','Email', 'required|trim');
        $this->form_validation->set_rules('alamat','Alamat', 'required|trim');
        $this->form_validation->set_rules('hp','Nomor Hp', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('pengiriman/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Pengiriman_model->ubahDataPengiriman();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('pengiriman');
        }
    }

}
