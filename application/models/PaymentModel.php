<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class PaymentModel extends CI_Model {

    public function add_payment($data){

        return $this->db->insert('payment',$data);

    }

	
}
