<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MdlPesawat extends CI_Model 
{
    public function getPesawat($table) 
    {
        return $this->db->get($table);
    }

    public function insertPesawat($table, $data) 
    {
        $this->db->insert($table, $data);
    }
}

?>