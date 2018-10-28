<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kapal extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mdlkapal');

        if($this->session->has_userdata('hak_akses') != 'admin') {
			redirect(base_url('admin/login'));
		}
    }

    public function index()
    {
        $getDataK = $this->mdlkapal->getKapal('tb_kapal')->result();
        $data['tmpKapal'] = $getDataK;

        $this->load->view('kapal/dataKapal', $data);
    }

    public function add()
    {
        $this->load->view('kapal/addKapal');
    }

    public function create()
    {
        $nama_kapal = $this->input->post('nama_kapal');
        $kode_kapal = $this->input->post('kode_kapal');
        $asal = $this->input->post('pelabuhan_asal');
        $tujuan = $this->input->post('pelabuhan_tujuan');
        $jam_keberangkatan = $this->input->post('jam_keberangkatan');
        $jam_tiba = $this->input->post('jam_tiba');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');
        $reg = array(',00', 'Rp', '.');
        $regStr = array('', '', '');

        $hargaStr = str_replace($reg, $regStr, $harga);

        $dataInsert = array(
            'id' => '',
            'nama_kapal' => $nama_kapal,
            'kode_kapal' => $kode_kapal,
            'pelabuhan_asal' => $asal,
            'pelabuhan_tujuan' => $tujuan,
            'jam_keberangkatan' => $jam_keberangkatan,
            'jam_tiba' => $jam_tiba,
            'harga' => $hargaStr,
            'tersedia' => 1,
            'stok' => $stok
        );

        $this->mdlkapal->insertKapal('tb_kapal', $dataInsert);
        $this->session->set_flashdata('message', 'Success Add');

        redirect(base_url('admin/kapal/add'));
    }

    public function edit($id)
    {
        $where = array('id' => $id);
        $data['tmpEditKapal'] = $this->mdlkapal->editKapal('tb_kapal', $where)->result();

        $this->load->view('kapal/editKapal', $data);
    }

    public function update()
    {
        $id = $this->input->post('id');
        $nama_kapal = $this->input->post('nama_kapal');
        $kode_kapal = $this->input->post('kode_kapal');
        $asal = $this->input->post('pelabuhan_asal');
        $tujuan = $this->input->post('pelabuhan_tujuan');
        $jam_keberangkatan = $this->input->post('jam_keberangkatan');
        $jam_tiba = $this->input->post('jam_tiba');
        $harga = $this->input->post('harga');
        $status = $this->input->post('status');
        $stok = $this->input->post('stok');
        $reg = array(',00', 'Rp', '.');
        $regStr = array('', '', '');

        $hargaStr = str_replace($reg, $regStr, $harga);

        $dataUpdate = array(
            'nama_kapal' => $nama_kapal,
            'kode_kapal' => $kode_kapal,
            'pelabuhan_asal' => $asal,
            'pelabuhan_tujuan' => $tujuan,
            'jam_keberangkatan' => $jam_keberangkatan,
            'jam_tiba' => $jam_tiba,
            'harga' => $hargaStr,
            'tersedia' => $status,
            'stok' => $stok
        );
        
        $where = array('id' => $id);

        $this->mdlkapal->updateKapal('tb_kapal', $where, $dataUpdate);
        redirect(base_url('admin/kapal'));
    }

    public function delete($id)
    {
        $where = array('id' => $id);

        $this->mdlkapal->deleteKapal('tb_kapal', $where);
        redirect(base_url('admin/kapal'));
    }
}

?>