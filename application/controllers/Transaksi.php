<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function details($id_encode = null) {
        $id_decode = base64_decode(urldecode($id_encode));
        $id = array('id' => $id_decode);
        $data['query'] = $this->db->get_where('tb_pesawat', $id)->result();

        $this->load->view('transaksi', $data);
    }

    public function insertTiket() {
        
    }
}

?>