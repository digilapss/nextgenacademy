<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class EducationalModel extends CI_Model {

    public function all_educational(){
        return $this->db->get('educational');
    }

}