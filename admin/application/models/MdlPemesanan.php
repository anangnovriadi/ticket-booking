<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MdlPemesanan extends CI_Model
{
    public function getPemesananKapal($table)
    {
        return $this->db->get($table);
    }

    public function getPemesananPesawat($table)
    {
        return $this->db->get($table);
    }

    public function getKapalById($where) {
        $query = $this->db->query("SELECT * FROM tb_kapal WHERE id = '$where'");
        return $query;
    }

    public function getPesawatById($where) {
        $query = $this->db->query("SELECT * FROM tb_pesawat WHERE id = '$where'");
        return $query;
    }

    public function getUsersById($where) {
        $query = $this->db->query("SELECT * FROM tb_users WHERE id = '$where'");
        return $query;
    }

    public function editBayar($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function updateBayar($table, $where, $data)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}

?>