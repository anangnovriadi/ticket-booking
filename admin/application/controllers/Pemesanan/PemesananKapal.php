<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PemesananKapal extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('mdlpemesanan');
    }

    public function index() {
        $getDataK = $this->mdlpemesanan->getPemesananKapal('tb_tiket_kapal')->result();

        foreach($getDataK as $row) {
            $getKapal = $this->mdlpemesanan->getKapalById($row->id_kapal)->result();
            $data['tmpKapal'] = $getKapal;
        }

        foreach($getDataK as $row) {
            $getUsers = $this->mdlpemesanan->getUsersById($row->id_user)->result();
            $data['tmpUsers'] = $getUsers;
        }

        $data['tmpPemKapal'] = $getDataK;
        
        $this->load->view('pemesanan/dataPemesananKapal', $data);
    }

    public function edit($id)
    {
        $where = array('id' => $id);
        $data['tmpEditPemKapal'] = $this->mdlpemesanan->editBayar('tb_tiket_kapal', $where)->result();

        $this->load->view('pemesanan/editPemesananKapal', $data);
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

        $this->mdlpemesanan->updateBayar('tb_tiket_kapal', $where, $dataUpdate);
        redirect(base_url('admin/pemesanan/pemesananKapal'));
    }
}