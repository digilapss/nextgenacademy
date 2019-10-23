<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ScheduleModel extends CI_Model {

    public function course_min_slot($course_id){

        $this->db->set('quota', 'quota - 1' , FALSE);
        $this->db->where('course_id', $course_id);
        $this->db->update('schedule');

    }
    
	
}
