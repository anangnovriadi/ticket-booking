<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MdlKomplain extends CI_Model {
    public function insert($table, $data) {
        $this->db->insert($table, $data);
    }
}

?>