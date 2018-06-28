<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MdlAlamat extends CI_Model
{
    public function getDataAlamat($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function updateAlamat($table, $where, $data)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}

?>
