<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('mdlinserttiket');
        $this->load->model('mdlloginuser');
    }

    public function details($id_encode = null) {
        $id_decode = base64_decode(urldecode($id_encode));
        $id = array('id' => $id_decode);
        $data['query'] = $this->db->get_where('tb_pesawat', $id)->result();

        $this->load->view('transaksi', $data);
    }

    public function pembayaran() {
        if($this->session->userdata('hak_akses') == 'user') {
            $id_pesawat = $this->input->post('id_pesawat');
            $tgl_keberangkatan = $this->input->post('tgl_keberangkatan');
            $jumlah_penumpang = $this->input->post('jumlah_pen');
            $total_harga = $this->input->post('total_harga');
            
            $dataInsert = array(
                'id' => '',
                'id_pesawat' => $id_pesawat,
                'tgl_keberangkatan' => $tgl_keberangkatan,
                'jumlah_tiket' => $jumlah_penumpang,
                'harga_total' => $total_harga,
                'bayar' => 0
            );

            $this->mdlinserttiket->insert('tb_tiket_pesawat', $dataInsert);
            redirect(base_url('/pembayaran'));
        } else {
            redirect(base_url('/login'));
        }
    }
}

?>