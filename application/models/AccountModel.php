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

    // education soft delete data
    public function soft_delete_education($data) {
        $this->db->set('status', StatusDeleted);
        $this->db->set('update_time', 'NOW()', false);
        $this->db->where('account_id', $data['account_id']);
        $this->db->where('status', StatusActive);
        return $this->db->update('educational');
    }

    public function educational($account_id){
        return $this->db->get_where('educational', array('account_id' => $account_id, 'status' => StatusActive))->result();
    }


    // public function user_id($user) {

    //     return $this->db->get_where('user', array('id_user' => $user));

    // }
    // public function all_user() {

    //     return $this->db->get('users');

    // }
	
}
