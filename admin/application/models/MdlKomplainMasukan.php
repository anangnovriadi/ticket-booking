<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MdlKomplainMasukan extends CI_Model
{
    public function getKomplain($where) {
        $query = $this->db->query("SELECT * FROM tb_komplain_masukan WHERE jenis = '$where'");
        return $query;
    }

    public function getMasukan($where) {
        $query = $this->db->query("SELECT * FROM tb_komplain_masukan WHERE jenis = '$where'");
        return $query;
    }
}

?>