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

    public function getPemesananByPesawat()
    {
        $query = "SELECT tb_tiket_pesawat.id, username, nama_pesawat, tgl_keberangkatan, kode_transaksi, keberangkatan, tujuan, jumlah_tiket, harga, harga_total, tgl_pemesanan, bayar 
                    FROM tb_tiket_pesawat INNER JOIN tb_users ON tb_tiket_pesawat.`id_user` = tb_users.`id` 
                        INNER JOIN tb_pesawat ON tb_tiket_pesawat.`id_pesawat` = tb_pesawat.`id`";
        
        return $this->db->query($query);
    }

    public function getPemesananByKapal()
    {
        $query = "SELECT tb_tiket_kapal.id, username, nama_kapal, tgl_keberangkatan, kode_transaksi, pelabuhan_asal, pelabuhan_tujuan, jumlah_tiket, harga, harga_total, tgl_pemesanan, bayar 
                    FROM tb_tiket_kapal INNER JOIN tb_users ON tb_tiket_kapal.`id_user` = tb_users.`id` 
                        INNER JOIN tb_kapal ON tb_tiket_kapal.`id_kapal` = tb_kapal.`id`";
        
        return $this->db->query($query);
    }

    public function getAllPemesananPesawat($tgl_pemesanan) 
    {
        $query = "SELECT * FROM tb_tiket_pesawat INNER JOIN tb_users 
                    ON tb_tiket_pesawat.`id_user` = tb_users.`id` 
                        INNER JOIN tb_pesawat ON tb_tiket_pesawat.`id_pesawat` = tb_pesawat.`id` 
                        WHERE tgl_pemesanan = '$tgl_pemesanan' AND bayar = '1'";

        return $this->db->query($query);
    }

    public function getAllPemesananKapal($tgl_pemesanan) 
    {
        $query = "SELECT * FROM tb_tiket_kapal INNER JOIN tb_users 
                    ON tb_tiket_kapal.`id_user` = tb_users.`id` 
                        INNER JOIN tb_kapal ON tb_tiket_kapal.`id_kapal` = tb_kapal.`id`
                        WHERE tgl_pemesanan = '$tgl_pemesanan' AND bayar = '1'";

        return $this->db->query($query);
    }

    public function getAllPemesananPesawatBulan($bulan) 
    {
        $query = "SELECT * FROM tb_tiket_pesawat INNER JOIN tb_users 
                    ON tb_tiket_pesawat.`id_user` = tb_users.`id` 
                        INNER JOIN tb_pesawat ON tb_tiket_pesawat.`id_pesawat` = tb_pesawat.`id` 
                        WHERE MONTH(tgl_pemesanan) = '$bulan' AND bayar = '1'";

        return $this->db->query($query);
    }

    public function getAllPemesananKapalBulan($bulan) 
    {
        $query = "SELECT * FROM tb_tiket_kapal INNER JOIN tb_users 
                    ON tb_tiket_kapal.`id_user` = tb_users.`id` 
                        INNER JOIN tb_kapal ON tb_tiket_kapal.`id_kapal` = tb_kapal.`id`
                        WHERE MONTH(tgl_pemesanan) = '$bulan' AND bayar = '1'";

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