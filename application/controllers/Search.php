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
        $tgl_keberangkatan = $this->input->post('tgl_keberangkatan');
        $data['pesawat'] = $this->mdlsearch->getPesawat($asal, $tujuan);
        
        $this->session->set_userdata('tgl', $tgl_keberangkatan);
        $this->load->view('resultSearch', $data);
    }

    public function resultKapal() {
        $pelabuhan_asal = $this->input->post('pelabuhan_asal');
        $pelabuhan_tujuan = $this->input->post('pelabuhan_tujuan');
        $tgl_keberangkatan = $this->input->post('tgl_keberangkatan');
        $data['kapal'] = $this->mdlsearch->getKapal($pelabuhan_asal, $pelabuhan_tujuan);

        $this->session->set_userdata('tgl', $tgl_keberangkatan);
        $this->load->view('resultSearchKapal', $data);
    }

    public function viewSearch() {
        $this->load->view('resultSearch');
    }
}

?>