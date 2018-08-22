<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MdlSearch extends CI_Model {
    public function getPesawat($asal, $tujuan) {
        $this->db->select('*');
        $this->db->from('tb_pesawat');
        $this->db->like('keberangkatan', $asal);
        $this->db->like('tujuan', $tujuan);

        return $this->db->get()->result();
    }
}

?>