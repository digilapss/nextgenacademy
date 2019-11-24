<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MentorModel extends CI_Model {

    public function popular_mentor($limit){

        
        $this->db->select('*');
        $this->db->from('course c');
        $this->db->join('schedule s' , 'c.course_id = s.course_id');
        $this->db->join('course_category b ' , 'c.course_category_id = b.course_category_id');
        $this->db->join('account a' , 'a.account_id = s.account_id');
        $this->db->limit($limit);
        return $this->db->get();
    }	

}