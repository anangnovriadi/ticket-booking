<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mdlpelanggan');
    }

    public function index()
    {
        $getDataK = $this->mdlpelanggan->getPelanggan('tb_users')->result();
        $data['tmpPelanggan'] = $getDataK;

        $this->load->view('pelanggan/dataPelanggan', $data);
    }
}

?>