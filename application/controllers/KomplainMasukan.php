<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KomplainMasukan extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mdlkomplain');
    }

    public function create()
    {
        $nama_lengkap = $this->input->post('nama_lengkap');
        $jenis = $this->input->post('jenis');
        $email = $this->input->post('email');
        $pesan = $this->input->post('pesan');
        $no_telpon = $this->input->post('no_telpon');

        $dataInsert = array(
            'id' => '',
            'nama_lengkap' => $nama_lengkap,
            'email' => $email,
            'jenis' => $jenis,
            'pesan' => $pesan,
            'no_telpon' => $no_telpon,
        );

        $this->mdlkomplain->insert('tb_komplain_masukan', $dataInsert);
        $this->session->set_flashdata('message_success', 'Masukan atau Komplain anda terkirim');
        return redirect($this->agent->referrer());
    }
}

?>