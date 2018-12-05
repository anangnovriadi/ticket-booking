<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MdlWelcome extends CI_Model 
{
    public function getTotPemesananPesawat($table) 
    {
        return $this->db->get($table);
    }

    public function getTotPemesananKapal($table) 
    {
        return $this->db->get($table);
    }

    public function getStokTiketPesawat($table) 
    {
        return $this->db->get($table);
    }

    public function getStokTiketKapal($table) 
    {
        return $this->db->get($table);
    }
}

?>