<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PemesananPesawat extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('mdlpemesanan');
    }

    public function index() {
        $getDataK = $this->mdlpemesanan->getPemesananPesawat('tb_tiket_pesawat')->result();

        foreach($getDataK as $row) {
            $getPesawat = $this->mdlpemesanan->getPesawatById($row->id_pesawat)->result();
            $data['tmpPesawat'] = $getPesawat;
        }

        foreach($getDataK as $row) {
            $getUsers = $this->mdlpemesanan->getUsersById($row->id_user)->result();
            $data['tmpUsers'] = $getUsers;
        }

        $data['tmpPemPesawat'] = $getDataK;
        
        $this->load->view('pemesanan/dataPemesananPesawat', $data);
    }

    public function edit($id)
    {
        $where = array('id' => $id);
        $data['tmpEditPemPesawat'] = $this->mdlpemesanan->editBayar('tb_tiket_pesawat', $where)->result();

        $this->load->view('pemesanan/editPemesananPesawat', $data);
    }

    public function update()
    {
        $id = $this->input->post('id');
        $bayar = $this->input->post('bayar');

        $dataUpdate = array(
            'id' => '',
            'bayar' => $bayar,
        );
        
        $where = array('id' => $id);

        $this->mdlpemesanan->updateBayar('tb_tiket_pesawat', $where, $dataUpdate);
        redirect(base_url('admin/pemesanan/pemesananPesawat'));
    }
}