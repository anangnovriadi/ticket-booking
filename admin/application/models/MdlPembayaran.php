<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MdlPembayaran extends CI_Model
{
    public function getBankPemb($table)
    {
        return $this->db->get($table);
    }

    public function addBankPemb($table, $data)
    {
        $this->db->insert($table, $data);
    }
}

?>