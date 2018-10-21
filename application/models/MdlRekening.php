<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MdlRekening extends CI_Model
{
    public function getRekening($table)
    {
        return $this->db->get($table);
    }
}

?>