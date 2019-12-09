<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class AccountModel extends CI_Model {
	
	public function CekLogin($email, $pass){

        $this->db->where('email', $email);
        $this->db->where('password', md5($pass));
        
        return $this->db->get('account');
    
    }

    public function cekLoginGoogle($email){

        $this->db->where('email', $email);
        
        return $this->db->get('account');

    }

    public function signup($data){
        
        return $this->db->insert('account', $data);

    }

    public function update_profile($account_id ,$data_profile){
        $this->db->set($data_profile);
        $this->db->where('account_id', $account_id);
        $this->db->update('account');
    }
    
    public function account_byId($account_id){
        return $this->db->get_where('account', array('account_id' => $account_id));
    }

    public function update_password($new_password){

        $account_id = $this->session->userdata('account_id');
        $pwd = md5($new_password) ;
        $this->db->set('password', $pwd);
        $this->db->where('account_id', $account_id);
        return $this->db->update('account');

    }

    // education insert data
    public function insert_education($data) {
        return $this->db->insert('educational', $data);
    }

    // education update data
    public function update_education($data, $educational_id) {
        $this->db->set($data);
        $this->db->where('account_id', $data['account_id']);
        $this->db->where('educational_id', $educational_id);
        return $this->db->update('educational');
    }

    // education soft delete data
    public function soft_delete_education($account_id) {
        $this->db->set('status', StatusDeleted);
        $this->db->set('update_time', 'NOW()', false);
        $this->db->where('account_id', $account_id);
        $this->db->where('status', StatusActive);
        return $this->db->update('educational');
    }

    public function educational_list($account_id){
        return $this->db->get_where('educational', array('account_id' => $account_id, 'status' => StatusActive))->result();
    }

    // achievement insert data
    public function insert_achievement($data) {
        return $this->db->insert('achievement', $data);
    }

    // achievement update data
    public function update_achievement($data, $achievement_id) {
        $this->db->set($data);
        $this->db->where('achievement_id', $achievement_id);
        $this->db->where('account_id', $data['account_id']);
        return $this->db->update('achievement');
    }

    // achievement soft delete data
    public function soft_delete_achievement($account_id) {
        $this->db->set('status', StatusDeleted);
        $this->db->set('update_time', 'NOW()', false);
        $this->db->where('account_id', $account_id);
        $this->db->where('status', StatusActive);
        return $this->db->update('achievement');
    }

    // achievement get all data
    public function achievement_list($account_id){
        return $this->db->get_where('achievement', array('account_id' => $account_id, 'status' => StatusActive))->result();
    }


    // public function user_id($user) {

    //     return $this->db->get_where('user', array('id_user' => $user));

    // }
    // public function all_user() {

    //     return $this->db->get('users');

    // }
	
}
