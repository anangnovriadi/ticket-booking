<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {
    public function __construct() {
        parent::__construct();

        $this->load->model('mdlsearch');
    }

    public function result() {
        $asal = $this->input->post('kota_asal');
        $tujuan = $this->input->post('kota_tujuan');
        $data['pesawat'] = $this->mdlsearch->getPesawat($asal, $tujuan);
        $sessionAll = array(
            'asal' => $asal,
            'tujuan' => $tujuan
        );
        $this->load->view('resultSearch', $data);
    }

    public function viewSearch() {
        $this->load->view('resultSearch');
    }
}

?>