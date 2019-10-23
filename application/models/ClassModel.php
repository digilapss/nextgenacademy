<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ClassModel extends CI_Model {

    public function add_class($data){
        
        return $this->db->insert('class', $data);

    }

    public function ck_apply_course($schedule_id, $account_id){

        return  $this->db->get_where('class', array('schedule_id' => $schedule_id, 'account_id' => $account_id));
    }
    
	
}
