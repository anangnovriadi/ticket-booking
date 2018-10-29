<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('mdlinserttiket');
        $this->load->model('mdlinserttiketkapal');
        $this->load->model('mdlloginuser');
    }

    public function details($id_encode = null) {
        $id_decode = base64_decode(urldecode($id_encode));
        $id = array('id' => $id_decode);
        $data['query'] = $this->db->get_where('tb_pesawat', $id)->result();
        
        $this->load->view('transaksi', $data);
    }

    public function detailsKapal($id_encode = null) {
        $id_decode = base64_decode(urldecode($id_encode));
        $id = array('id' => $id_decode);
        $data['query'] = $this->db->get_where('tb_kapal', $id)->result();

        $this->load->view('transaksiKapal', $data);
    }

    public function pembayaran() {
        if($this->session->userdata('hak_akses') == 'user') {
            $id_pesawat = $this->input->post('id_pesawat');
            $tgl_keberangkatan = $this->input->post('tgl_keberangkatan');
            $jumlah_penumpang = $this->input->post('jumlah_pen');
            $total_harga = $this->input->post('total_harga');
            $penerbangan = $this->input->post('penerbangan');
            $id_user = $this->session->userdata('id');
            date_default_timezone_set("Asia/Bangkok");
            $dateNow = date('Y-m-d H:i:s');
            
            //Kode Transaksi
            $ktNum = rand(10, 100);
            $d = date('d');
            $kt = 'PS0'.$d.$ktNum;

            $dataInsert = array(
                'id' => '',
                'id_user' => $id_user,
                'id_pesawat' => $id_pesawat,
                'tgl_keberangkatan' => $tgl_keberangkatan,
                'jumlah_tiket' => $jumlah_penumpang,
                'harga_total' => $total_harga,
                'bayar' => 0,
                'tgl_pemesanan' => $dateNow,
                'kode_transaksi' => $kt,
                'penerbangan' => $penerbangan
            );

            $this->mdlinserttiket->insert('tb_tiket_pesawat', $dataInsert);
            $this->session->set_userdata('tgl_keberangkatan', $dataInsert['tgl_keberangkatan']);
            $this->session->set_userdata('jumlah_tiket', $dataInsert['jumlah_tiket']);
            $this->session->set_userdata('harga_total', $dataInsert['harga_total']);
            
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
            $email = $this->session->userdata('email');
            $data = array(
                'total_harga' => $total_harga,
                'email' => $email,
                'kode_transaksi' => $kt
            );
            $this->load->library('email'); 
            
            $templates = $this->load->view('email/sendemail.php', $data, TRUE);
            $this->email->from($from_email, 'Admin Reni Jaya Travel'); 
            $this->email->to($email);
            $this->email->subject('Pembayaran Reni Jaya Travel'); 
            $this->email->message($templates); 
            $this->email->send();

            redirect(base_url('/pembayaran'));
        } else {
            redirect(base_url('/login'));
        }
    }

    public function pembayaranKapal() {
        if($this->session->userdata('hak_akses') == 'user') {
            $id_kapal = $this->input->post('id_kapal');
            $tgl_keberangkatan = $this->input->post('tgl_keberangkatan');
            $jumlah_penumpang = $this->input->post('jumlah_pen');
            $total_harga = $this->input->post('total_harga');
            $id_user = $this->session->userdata('id');
            $email = $this->session->userdata('email');
            date_default_timezone_set("Asia/Bangkok");
            $dateNow = date('Y-m-d H:i:s');

            //Kode Transaksi
            $ktNum = rand(10, 100);
            $d = date('d');
            $kt = 'PS0'.$d.$ktNum;

            $dataInsert = array(
                'id' => '',
                'id_user' => $id_user,
                'id_kapal' => $id_kapal,
                'tgl_keberangkatan' => $tgl_keberangkatan,
                'jumlah_tiket' => $jumlah_penumpang,
                'harga_total' => $total_harga,
                'bayar' => 0,
                'tgl_pemesanan' => $dateNow,
                'kode_transaksi' => $kt
            );

            $this->mdlinserttiketkapal->insert('tb_tiket_kapal', $dataInsert);
            $this->session->set_userdata('tgl_keberangkatan', $dataInsert['tgl_keberangkatan']);
            $this->session->set_userdata('jumlah_tiket', $dataInsert['jumlah_tiket']);
            $this->session->set_userdata('harga_total', $dataInsert['harga_total']);
            
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
            // $to_email = "novriadi@twiscode.com"; 
            $email = $this->session->userdata('email');
            $data = array(
                'total_harga' => $total_harga,
                'email' => $email,
                'kode_transaksi' => $kt
            );
            $this->load->library('email'); 
            
            $templates = $this->load->view('email/sendemail.php', $data, TRUE);
            $this->email->from($from_email, 'Admin Reni Jaya Travel'); 
            $this->email->to($email);
            $this->email->subject('Pembayaran Reni Jaya Travel'); 
            $this->email->message($templates); 
            $this->email->send();

            redirect(base_url('/pembayaran'));
        } else {
            redirect(base_url('/login'));
        }
    }
}

?>