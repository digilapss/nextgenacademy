<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class AccountModel extends CI_Model {
	
	public function CekLogin($email, $pass){

        $this->db->where('email', $email);
        $this->db->where('password', md5($pass));
        
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
    
    // public function user_id($user) {

    //     return $this->db->get_where('user', array('id_user' => $user));

    // }
    // public function all_user() {

    //     return $this->db->get('users');

    // }
	
}
