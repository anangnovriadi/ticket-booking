<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('mdlregisteruser');
    }

    public function index() {
        $this->load->view('auth/register');
    }

    public function regUser() {
        $username = $this->input->post('username');
        $nama_lengkap = $this->input->post('nama_lengkap');
        $email = $this->input->post('email');
        $no_telp = $this->input->post('no_telp');
        $no_ktp = $this->input->post('no_ktp');
        $alamat = $this->input->post('alamat');
        $password = $this->input->post('password');
        $pass = md5($password);

        $dataInsert = array(
            'id' => '',
            'username' => $username,
            'email' => $email,
            'nama_lengkap' => $nama_lengkap,
            'no_telp' => $no_telp,
            'no_ktp' => $no_ktp,
            'alamat' => $alamat,
            'password' => $pass,
            'status' => 1,
            'hak_akses' => 'user'
        );

        $this->mdlregisteruser->insert('tb_users', $dataInsert);
        redirect(base_url('/login'));
    }
}

?>