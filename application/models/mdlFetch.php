<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MdlFetch extends CI_Model {
    public function getDataPAsal() {
        return $this->db->query('SELECT DISTINCT keberangkatan FROM tb_pesawat')->result();
    }

    public function getDataPTujuan() {
        return $this->db->query('SELECT DISTINCT tujuan FROM tb_pesawat')->result();
    }

    public function getDataKAsal() {
        return $this->db->query('SELECT DISTINCT pelabuhan_asal FROM tb_kapal')->result();
    }

    public function getDataKTujuan() {
        return $this->db->query('SELECT DISTINCT pelabuhan_tujuan FROM tb_kapal')->result();
    }

    public function deleteTransPesawat() {
        $query = "DELETE FROM tb_tiket_pesawat WHERE DATEDIFF(CURDATE(), tgl_pemesanan) < 1 AND bayar = '0'";

        return $this->db->query($query);
    }

    public function deleteTransKapal() {
        $query = "DELETE FROM tb_tiket_kapal WHERE DATEDIFF(CURDATE(), tgl_pemesanan) < 1 AND bayar = '0'";

        return $this->db->query($query);
    }
}

?>