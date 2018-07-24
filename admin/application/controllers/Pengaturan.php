<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mdlpengaturan');
    }

    public function index()
    {
        $where = array('hak_akses' => 'admin');
        $data['tmpPengaturan'] = $this->mdlpengaturan->getDataPengaturan()->result();

        $this->load->view('pengaturan/dataPengaturan', $data);
    }
}

?>