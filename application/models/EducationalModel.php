<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class EducationalModel extends CI_Model {

    public function all_educational(){
        $this->db->group_by("institution_name");
        return $this->db->get('educational');
    }

}