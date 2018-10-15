<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mdlpembayaran');

        if($this->session->has_userdata('hak_akses') != 'admin') {
			redirect(base_url('admin/login'));
		}
    }

    public function index()
    {
        $data['tmpBank'] = $this->mdlpembayaran->getBankPemb('tb_cms_pembayaran')->result();
        $this->load->view('pembayaran/pembayaran', $data);
    }

    public function create()
    {        
        $config['upload_path'] = '../assets';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '100';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';
        // $config['file_name'] = $_FILES['picture']['name'];

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        
        if(!$this->upload->do_upload('gambar')) {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
            $this->session->set_flashdata('msg_error', implode($error));

            redirect(base_url('admin/pembayaran'));
        } else {
            $file_name = $this->upload->data('file_name');
            // $file = $file_name['file_name'];
            $nama_bank = $this->input->post('nama_bank');
            $atas_nama = $this->input->post('atas_nama');
            $no_rek = $this->input->post('no_rekening');
            $dataInsert = array(
                'nama_bank' => $nama_bank,
                'atas_nama' => $atas_nama,
                'no_rekening' => $no_rek,
                'img_bank' => $file_name
            );

            $this->mdlpembayaran->addBankPemb('tb_cms_pembayaran', $dataInsert);
            $this->session->set_flashdata('message', 'Success Add');

            redirect(base_url('admin/pembayaran'));
        }
    }

    public function delete($id)
    {
        $where = array('id' => $id);
        $this->mdlpembayaran->delBankPemb('tb_cms_pembayaran', $where);

        redirect(base_url('admin/pembayaran'));
    }
}

?>