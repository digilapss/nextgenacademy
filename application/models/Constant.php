<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Constant extends CI_Model {

	function gender() {
		return array(GenderMale => "Laki-laki", GenderFemale => "Perempuan");
	}

}