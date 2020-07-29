<?php
class M_edit extends CI_Model
{
    function get_data($table)
    {
        $this->db->SELECT('*');
        $this->db->FROM($table);
        $this->db->WHERE('username', $this->session->userdata('username'));
        return $this->db->get();
    }
    function update($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
