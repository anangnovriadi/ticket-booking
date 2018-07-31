<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MdlSearch extends CI_Model {
    public function getPesawat($asal, $tujuan, $jam) {
        $this->db->select('*');
        $this->db->from('tb_pesawat');
        $this->db->like('keberangkatan', $asal);
        $this->db->like('tujuan', $tujuan);
        $this->db->like('jam_keberangkatan', $jam);

        return $this->db->get()->result();
    }
}

?>