<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MdlPengaturan extends CI_Model
{
    public function getDataPengaturan()
    {
        $query = 'SELECT tb_cms_pengaturan.`nama_admin`, 
                            tb_users.`email`, tb_users.`password`, 
                                tb_users.`username`
                                    FROM tb_cms_pengaturan
                                        INNER JOIN tb_users 
                                            ON tb_cms_pengaturan.id_users_pengaturan = tb_users.`id`';
        return $this->db->query($query);
    }

    public function updateAlamat($table, $where, $data)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}

?>