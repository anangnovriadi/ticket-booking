<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesawat extends CI_Controller 
{
    public function __construct() 
    {
        parent::__construct();

        $this->load->model('mdlpesawat');
    }

    public function index() 
    {
        $getDataP = $this->mdlpesawat->getPesawat('tb_pesawat')->result();
        $data['tmpPesawat'] = $getDataP;

        $this->load->view('pesawat/dataPesawat', $data);
    }

    public function addPesawat() 
    {
        $this->load->view('pesawat/addPesawat');
    }

    public function createPesawat() 
    {
        $nama_pesawat = $this->input->post('nama_pesawat');
        $keberangkatan = $this->input->post('keberangkatan');
        $tujuan = $this->input->post('tujuan');
        $jam_keberangkatan = $this->input->post('jam_keberangkatan');
        $jam_tiba = $this->input->post('jam_tiba');
        $kode_pesawat = $this->input->post('kode_pesawat');
        $kelas_penerbangan = $this->input->post('kelas_penerbangan');
        $stok = $this->input->post('stok');
        $harga = $this->input->post('harga');
        $reg = array(',00', 'Rp', '.');
        $regStr = array('', '', '');

        $hargaStr = str_replace($reg, $regStr, $harga);

        $dataInsert = array(
            'id' => '',
            'nama_pesawat' => $nama_pesawat,
            'keberangkatan' => $keberangkatan,
            'tujuan' => $tujuan,
            'jam_keberangkatan' => $jam_keberangkatan,
            'jam_tiba' => $jam_tiba,
            'harga' => $hargaStr,
            'kode_pesawat' => $kode_pesawat,
            'kelas_penerbangan' => $kelas_penerbangan,
            'tersedia' => '1'
        );

        $this->mdlpesawat->insertPesawat('tb_pesawat', $dataInsert);
        $this->session->set_flashdata('message', 'Success Add');

        redirect(base_url('admin/pesawat/addPesawat'));
    }

}

?>