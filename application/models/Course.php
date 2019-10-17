<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Course extends CI_Model {


    public function one_course($data){
        
        $this->db->select('*');
        $this->db->from('course c');
        $this->db->join('schedule s' , 'c.course_id = s.course_id');
        $this->db->join('course_category b ' , 'c.course_category_id = b.course_category_id');
        $this->db->join('account a' , 'a.account_id = s.account_id');
        $this->db->where('index_course', $data);
        return $this->db->get();

        // select a.account_id, name from
        // course c
        // join schedule s on c.course_id = s.course_id
        // join account a on a.account_id = s.account_id
        // where c.course_id = 1
        // return $this->db->get_where('course', array('index_course' => $data));

    }

    public function list_course($limit){

        
        $this->db->select('*');
        $this->db->from('course c');
        $this->db->join('schedule s' , 'c.course_id = s.course_id');
        $this->db->join('course_category b ' , 'c.course_category_id = b.course_category_id');
        $this->db->join('account a' , 'a.account_id = s.account_id');
        $this->db->limit($limit);
        return $this->db->get();



    }
    
	
}
