<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Validator extends CI_Model {
	function image_validator($path, $default_path){
		if(file_exists(base_url() . $path)) {
			return base_url() . $path;
		} else {
			return base_url() . $path . $default_path;
		}
	}
}