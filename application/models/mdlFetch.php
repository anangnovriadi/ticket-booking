<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MdlFetch extends CI_Model {
    public function getData() {
        return $this->db->get('tb_pesawat')->result();
    }
}

?>