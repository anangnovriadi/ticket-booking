<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masukan extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mdlkomplainmasukan');

        if($this->session->has_userdata('hak_akses') != 'admin') {
			redirect(base_url('admin/login'));
		}
    }

    public function index()
    {
        $getMasukan = $this->mdlkomplainmasukan->getMasukan('masukan')->result();
        $data['tmpMasukan'] = $getMasukan;

        $this->load->view('feedback/masukan', $data);
    }
}

?>