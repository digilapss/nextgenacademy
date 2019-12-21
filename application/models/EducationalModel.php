<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class EducationalModel extends CI_Model {

    public function all_educational(){
        return $this->db->get('educational');
    }

    public function city_list() {
    	$this->db->distinct();
    	$this->db->select('city');
        $this->db->order_by('city');
    	return $this->db->get('educational')->result_array();
    }

}