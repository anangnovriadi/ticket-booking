<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MdlPelanggan extends CI_Model
{
    public function getPelanggan($table)
    {
        return $this->db->get_where($table, array('hak_akses' => 'user'));
    }
}

?>