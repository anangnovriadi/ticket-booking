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

    public function add() 
    {
        $this->load->view('pesawat/addPesawat');
    }

    public function create() 
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

        redirect(base_url('admin/pesawat/add'));
    }

    public function edit($id) 
    {
        $where = array('id' => $id);

        $data['tmpEditPesawat'] = $this->mdlpesawat->editPesawat('tb_pesawat', $where)->result();
        $this->load->view('pesawat/editPesawat', $data);
    }

    public function update()
    {
        $id = $this->input->post('id');
        $nama_pesawat = $this->input->post('nama_pesawat');
        $keberangkatan = $this->input->post('keberangkatan');
        $tujuan = $this->input->post('tujuan');
        $jam_keberangkatan = $this->input->post('jam_keberangkatan');
        $jam_tiba = $this->input->post('jam_tiba');
        $kode_pesawat = $this->input->post('kode_pesawat');
        $kelas_penerbangan = $this->input->post('kelas_penerbangan');
        $stok = $this->input->post('stok');
        $harga = $this->input->post('harga');
        $status = $this->input->post('tersedia');
        $reg = array(',00', 'Rp', '.');
        $regStr = array('', '', '');

        $hargaStr = str_replace($reg, $regStr, $harga);

        $dataUpdate = array(
            'id' => $id,
            'nama_pesawat' => $nama_pesawat,
            'keberangkatan' => $keberangkatan,
            'tujuan' => $tujuan,
            'jam_keberangkatan' => $jam_keberangkatan,
            'jam_tiba' => $jam_tiba,
            'harga' => $hargaStr,
            'kode_pesawat' => $kode_pesawat,
            'kelas_penerbangan' => $kelas_penerbangan,
            'tersedia' => $tersedia
        );

        $where = array('id' => $id);

        $this->mdlpesawat->updatePesawat('tb_pesawat', $where, $dataUpdate);
        $this->session->set_flashdata('message', 'Success Update');

        redirect(base_url('admin/pesawat'));
    }

    public function delete($id)
    {
        $where = array('id' => $id);

        $this->mdlpesawat->deletePesawat('tb_pesawat', $where);
        redirect(base_url('admin/pesawat'));
    }

}

?>