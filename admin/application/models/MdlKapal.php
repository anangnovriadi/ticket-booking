<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MdlKapal extends CI_Model
{
    public function getKapal($table)
    {
        return $this->db->get($table);
    }

    public function insertKapal($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function editKapal($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function updateKapal($table, $where, $data)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function deleteKapal($table, $where)
    {
        $this->db->delete($table, $where);
    }
}


?>