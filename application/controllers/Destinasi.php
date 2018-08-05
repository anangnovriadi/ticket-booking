<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Destinasi extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('destinasi/destinasi');
    }
}

?>