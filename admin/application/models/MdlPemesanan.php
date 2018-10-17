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

    public function getAllPemesananPesawat($tgl_keberangkatan) 
    {
        $query = "SELECT * FROM tb_tiket_pesawat INNER JOIN tb_users 
                    ON tb_tiket_pesawat.`id_user` = tb_users.`id` 
                        INNER JOIN tb_pesawat ON tb_tiket_pesawat.`id_pesawat` = tb_pesawat.`id` 
                        WHERE tgl_keberangkatan = '$tgl_keberangkatan'";

        return $this->db->query($query);
    }

    public function getAllPemesananKapal($tgl_keberangkatan) 
    {
        $query = "SELECT * FROM tb_tiket_kapal INNER JOIN tb_users 
                    ON tb_tiket_kapal.`id_user` = tb_users.`id` 
                        INNER JOIN tb_kapal ON tb_tiket_kapal.`id_kapal` = tb_kapal.`id`
                        WHERE tgl_keberangkatan = '$tgl_keberangkatan'";

        return $this->db->query($query);
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