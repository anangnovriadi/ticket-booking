<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('mdlfetch');
    }

    public function index()
    {
        $data['all'] = $this->mdlfetch->getData();
        $data['allKapal'] = $this->mdlfetch->getDataKapal();
        $this->load->view('home', $data);
    }	
}
