<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MentorModel extends CI_Model {

    public function popular_mentor($limit) {
        $this->db->distinct();     
        $this->db->select('a.*');
        $this->db->from('account a');
        $this->db->join('educational e', 'a.account_id = e.account_id');
        $this->db->where('e.educational_id >', 0);
        $this->db->limit($limit);
        $data = $this->db->get()->result_array();
        for ($i=0; $i < count($data); $i++) { 
            $data[$i]['educational'] = $this->educational_relation($data[$i]['account_id']);
        }
        return $data;
    }

    public function educational_relation($account_id) {
        $this->db->limit(1);
        $this->db->order_by("year_in", "desc");
        return $this->db->get_where('educational', array('account_id' => $account_id))->result()[0];
    }

    public function total_available_mentor($filters = array()) {
        $this->db->distinct();
        $this->db->select('a.account_id');
        $this->db->from('account a');
        $this->db->join('educational e', 'a.account_id = e.account_id');
        $this->db->where(array('e.level >' => EducatioalLevelSeniorHighSchool, 'a.role' => RoleCollegeStudent));
        if ($filters['gender']) {
            $this->db->where('a.gender', $filters['gender']);
        }
        if ($filters['institution_name']) {
            $this->db->where('e.institution_name', $filters['institution_name']);
        }
        if ($filters['city']) {
            $this->db->where('e.city', $filters['city']);
        }
        return $this->db->get()->num_rows();
    }

    public function all_mentor($filters) {
        $this->db->distinct();  
        $this->db->select('a.account_id, name, gender, about_me');
        $this->db->from('account a');
        $this->db->join('educational e', 'a.account_id = e.account_id');
        if ($filters['gender']) {
            $this->db->where('a.gender', $filters['gender']);
        }
         if ($filters['institution_name']) {
            $this->db->where('e.institution_name', $filters['institution_name']);
        }
        if ($filters['city']) {
            $this->db->where('e.city', $filters['city']);
        }
        $this->db->where('e.level >', EducatioalLevelSeniorHighSchool);
        $this->db->limit($filters['limit'], $filters['start']);
        $data = $this->db->get()->result_array();
        for ($i=0; $i < count($data); $i++) { 
            $data[$i]['educational'] = $this->educational_relation($data[$i]['account_id']);
        }
        return $data;
    }

    public function detail_mentor($educational_id){

        $this->db->join('account', 'educational.account_id = account.account_id');
        $this->db->where('educational_id', $educational_id);
        return $this->db->get('educational');
    }

}
