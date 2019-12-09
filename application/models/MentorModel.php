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

}