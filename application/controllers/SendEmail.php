<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SendEmail extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() { 
        $this->load->library('email');
        $config['protocol']    = 'smtp';
        $config['smtp_host']    = 'ssl://smtp.gmail.com';
        $config['smtp_port']    = '465';
        $config['smtp_timeout'] = '7';
        $config['smtp_user']    = 'anangnov99@gmail.com';
        $config['smtp_pass']    = 'ansav45gma';
        $config['charset']    = 'iso-8859-1';
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'html'; 
        $config['validation'] = TRUE; 
        $this->email->initialize($config);

        $from_email = "admin.renijaya@gmail.com"; 
        $to_email = "novriadi@twiscode.com"; 
        $data = array(
            'user' => 'anang'
        );
        $this->load->library('email'); 
        
        $templates = $this->load->view('email/sendemail.php', $data, TRUE);
        $this->email->from($from_email, 'Admin Reni Jaya Travel'); 
        $this->email->to($to_email);
        $this->email->subject('Pembayaran Reni Jaya Travel'); 
        $this->email->message($templates); 
        $this->email->send();
        print_r('success');
    } 
}