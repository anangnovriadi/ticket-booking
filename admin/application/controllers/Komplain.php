<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komplain extends CI_Controller 
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
        $getKomplain = $this->mdlkomplainmasukan->getKomplain('komplain')->result();
        $data['tmpKomplain'] = $getKomplain;

        $this->load->view('feedback/komplain', $data);
    }
}

?>