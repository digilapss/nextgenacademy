<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class EducationalModel extends CI_Model {

    public function all_educational(){
        return $this->db->get('educational');
    }

    public function city_list() {
    	$this->db->distinct();
    	$this->db->select('city');
    	$this->db->where('level > ', EducatioalLevelSeniorHighSchool);
        $this->db->order_by('city', 'asc');
    	return $this->db->get('educational')->result_array();
    }

    public function institution_list() {
    	$this->db->distinct();
    	$this->db->select('institution_name');
    	$this->db->where('level > ', EducatioalLevelSeniorHighSchool);
        $this->db->order_by('institution_name', 'asc');
    	return $this->db->get('educational')->result_array();
    }

}