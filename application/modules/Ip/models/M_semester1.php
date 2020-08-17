<?php
class M_semester1 extends CI_Model
{
    function get_data()
    {
        $this->db->SELECT('semester.id, id_course, course, sks, grade, semester');
        $this->db->FROM('semester');
        $this->db->JOIN('course', 'semester.id_course=course.id');
        $this->db->JOIN('score', 'semester.id_score=score.id');
        $this->db->where('semester', '1');
        return $this->db->get();
    }
    function get($table)
    {
        return $this->db->get($table);
    }
    function get_IP1($table)
    {
        $this->db->select_sum('sks');
        $this->db->from($table);
        $this->db->JOIN('course', 'semester.id_course = course.id');
        $this->db->JOIN('score', 'semester.id_score = score.id');
        $this->db->where('semester', '1');
        return $this->db->get();
    }
}
