<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('mdlloginuser');
    }

    public function index() {
        $this->load->view('auth/login');
    }

    public function auth()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $pass = md5($password);

        $cek_user = $this->mdlloginuser->authUser($username, $pass);

        if($cek_user->num_rows() >= 1) 
        {
            foreach($cek_user->result() as $data) {
                $sess_data['hak_akses'] = $data->hak_akses;
                var_dump($data->username);
                $user = $data->username;

                $this->session->set_userdata($sess_data);
                $this->session->set_userdata('username', $user);

                if($this->session->userdata('hak_akses') == 'user') {
                    redirect(base_url('/'));                
                } else {
                    $this->session->set_flashdata('message', 'Username and password not found');
                    return redirect($this->agent->referrer());
                }
            }
        }
        else 
        {
            $this->session->set_flashdata('message', 'Wrong username and password');
            redirect($this->agent->referrer());
        }
    }

    public function logout() {
        if($this->session->userdata('hak_akses') == 'user') {
            $this->session->sess_destroy();
        }

        redirect($this->agent->referrer());
    }
}

?>