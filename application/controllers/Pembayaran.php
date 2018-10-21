<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('mdlrekening');
    }

    public function index() {
        $data['tmpRekening'] = $this->mdlrekening->getRekening('tb_cms_pembayaran')->result();

        $this->load->view('pembayaran', $data);
    }
}

?>