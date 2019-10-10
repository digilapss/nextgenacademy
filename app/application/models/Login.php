<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Model {
	
	public function CekLogin($email, $pass, $index){

        if($index === 0 ){

            $inipass = md5($pass);
        
            $this->db->where('email', $email);
            $this->db->where('password', $inipass);
            
            return $this->db->get('account');

        } else if($index === 1 ){
    
            $this->db->where('email', $email);
            
            return $this->db->get('account');

        }
		
    }

    public function signup($data){
        
        return $this->db->insert('account', $data);

    }
    
    // public function user_id($user) {

    //     return $this->db->get_where('user', array('id_user' => $user));

    // }
    // public function all_user() {

    //     return $this->db->get('users');

    // }
	
}
