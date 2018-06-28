<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alamat extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mdlalamat');
    }

    public function index()
    {
        $where = array('id' => 1);
        $data['tmpAlamat'] = $this->mdlalamat->getDataAlamat('tb_cms_alamat', $where)->result();

        $this->load->view('alamat/dataAlamat', $data);
    }

    public function update()
    {
        $id = $this->input->post('id');
        $alamat = $this->input->post('alamat');
        $telepon = $this->input->post('no_telepon');
        $hp = $this->input->post('no_hp');

        $dataAlamat = array(
            'nama_kantor' => $alamat,
            'telepon' => $telepon,
            'hp' => $hp
        );

        $where = array('id' => $id);

        $this->mdlalamat->updateAlamat('tb_cms_alamat', $where, $dataAlamat);
        redirect(base_url('admin/alamat'));
    }
}

?>