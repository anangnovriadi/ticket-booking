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

    public function editPesawat($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function updatePesawat($table, $where, $data) 
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function deletePesawat($table, $where)
    {
        $this->db->delete($table, $where);
    }
}

?>