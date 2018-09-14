<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('mdlinserttiket');
        $this->load->model('mdlinserttiketkapal');
        $this->load->model('mdlloginuser');
    }

    public function details($id_encode = null) {
        $id_decode = base64_decode(urldecode($id_encode));
        $id = array('id' => $id_decode);
        $data['query'] = $this->db->get_where('tb_pesawat', $id)->result();
        
        $this->load->view('transaksi', $data);
    }

    public function detailsKapal($id_encode = null) {
        $id_decode = base64_decode(urldecode($id_encode));
        $id = array('id' => $id_decode);
        $data['query'] = $this->db->get_where('tb_kapal', $id)->result();

        $this->load->view('transaksiKapal', $data);
    }

    public function pembayaran() {
        if($this->session->userdata('hak_akses') == 'user') {
            $id_pesawat = $this->input->post('id_pesawat');
            $tgl_keberangkatan = $this->input->post('tgl_keberangkatan');
            $jumlah_penumpang = $this->input->post('jumlah_pen');
            $total_harga = $this->input->post('total_harga');
            $id_user = $this->session->userdata('id');
            
            $dataInsert = array(
                'id' => '',
                'id_user' => $id_user,
                'id_pesawat' => $id_pesawat,
                'tgl_keberangkatan' => $tgl_keberangkatan,
                'jumlah_tiket' => $jumlah_penumpang,
                'harga_total' => $total_harga,
                'bayar' => 0
            );

            $this->mdlinserttiket->insert('tb_tiket_pesawat', $dataInsert);
            $this->session->set_userdata('tgl_keberangkatan', $dataInsert['tgl_keberangkatan']);
            $this->session->set_userdata('jumlah_tiket', $dataInsert['jumlah_tiket']);
            $this->session->set_userdata('harga_total', $dataInsert['harga_total']);
            
            redirect(base_url('/pembayaran'));
        } else {
            redirect(base_url('/login'));
        }
    }

    public function pembayaranKapal() {
        if($this->session->userdata('hak_akses') == 'user') {
            $id_kapal = $this->input->post('id_kapal');
            $tgl_keberangkatan = $this->input->post('tgl_keberangkatan');
            $jumlah_penumpang = $this->input->post('jumlah_pen');
            $total_harga = $this->input->post('total_harga');
            $id_user = $this->session->userdata('id');
            
            $dataInsert = array(
                'id' => '',
                'id_user' => $id_user,
                'id_kapal' => $id_kapal,
                'tgl_keberangkatan' => $tgl_keberangkatan,
                'jumlah_tiket' => $jumlah_penumpang,
                'harga_total' => $total_harga,
                'bayar' => 0
            );

            $this->mdlinserttiketkapal->insert('tb_tiket_kapal', $dataInsert);
            $this->session->set_userdata('tgl_keberangkatan', $dataInsert['tgl_keberangkatan']);
            $this->session->set_userdata('jumlah_tiket', $dataInsert['jumlah_tiket']);
            $this->session->set_userdata('harga_total', $dataInsert['harga_total']);
            
            redirect(base_url('/pembayaran'));
        } else {
            redirect(base_url('/login'));
        }
    }
}

?>