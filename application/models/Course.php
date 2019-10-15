<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Course extends CI_Model {


    public function one_course($data){
        
        return $this->db->get_where('course', array('index_course' => $data));

    }

    public function list_course($limit){
        
        $this->db->limit($limit);
        return $this->db->get('course');

    }
    
	
}
