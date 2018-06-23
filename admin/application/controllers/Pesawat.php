<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesawat extends CI_Controller {
    public function __construct() 
    {
        parent::__construct();
    }

    public function index() 
    {

    }

    public function addPesawat() 
    {
        $this->load->view('pesawat/addPesawat');
    }

}

?>