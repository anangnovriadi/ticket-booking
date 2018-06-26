<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mdllogin');
    }

    public function index() 
    {
        $this->load->view('auth/login');
    }

    public function auth()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $pass = md5($password);

        $cek_admin = $this->mdllogin->authAdmin($username, $pass);

        if($cek_admin->num_rows() >= 1) 
        {
            foreach($cek_admin->result() as $data) {
                $sess_data['hak_akses'] = $data->hak_akses;
                $this->session->set_userdata($sess_data);

                if($this->session->userdata('hak_akses') == 'admin') {
                    redirect(base_url('admin'));
                } else {
                    $this->session->set_flashdata('message', 'User not including admin');
                    return redirect($this->agent->referrer());
                }
            }
        }
        else 
        {
            $this->session->set_flashdata('message', 'User not found');
            redirect($this->agent->referrer());
        }
    }
}

?>