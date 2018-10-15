<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mdlpelanggan');

        if($this->session->has_userdata('hak_akses') != 'admin') {
			redirect(base_url('admin/login'));
		}
    }

    public function index()
    {
        $getDataK = $this->mdlpelanggan->getPelanggan('tb_users')->result();
        $data['tmpPelanggan'] = $getDataK;

        $this->load->view('pelanggan/dataPelanggan', $data);
    }
}

?>