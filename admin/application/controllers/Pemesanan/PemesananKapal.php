<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PemesananKapal extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('mdlpemesanan');

        if($this->session->has_userdata('hak_akses') != 'admin') {
			redirect(base_url('admin/login'));
		}
    }

    public function index() {
        $getDataK = $this->mdlpemesanan->getPemesananByKapal()->result();

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
        $id_kapal = $this->input->post('id_kapal');
        $bayar = $this->input->post('bayar');

        $dataUpdate = array(
            'bayar' => $bayar,
        );
        
        $where = array('id' => $id);

        $this->mdlpemesanan->updateStok($id_kapal);
        $this->mdlpemesanan->updateBayar('tb_tiket_kapal', $where, $dataUpdate);
        redirect(base_url('admin/pemesanan/pemesananKapal'));
    }
}