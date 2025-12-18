<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Pegawai_model');
    }

    public function index() {
        $data['pegawai'] = $this->Pegawai_model->get_all();
        $this->load->view('pegawai/index', $data);
    }

    public function tambah() {
        if ($this->input->post()) {
            $data = [
                'nama'   => $this->input->post('nama'),
                'email'  => $this->input->post('email'),
                'bidang' => $this->input->post('bidang'),
                'alamat' => $this->input->post('alamat')
            ];
            $this->Pegawai_model->insert($data);
            redirect('pegawai');
        }
        $this->load->view('pegawai/tambah');
    }

    public function edit($id) {
        if ($this->input->post()) {
            $data = [
                'nama'   => $this->input->post('nama'),
                'email'  => $this->input->post('email'),
                'bidang' => $this->input->post('bidang'),
                'alamat' => $this->input->post('alamat')
            ];
            $this->Pegawai_model->update($id, $data);
            redirect('pegawai');
        }
        $data['pegawai'] = $this->Pegawai_model->get_by_id($id);
        $this->load->view('pegawai/edit', $data);
    }

    public function hapus($id) {
        $this->Pegawai_model->delete($id);
        redirect('pegawai');
    }
}