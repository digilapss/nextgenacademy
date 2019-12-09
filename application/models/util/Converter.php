<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Converter extends CI_Model {
	function rupiah($angka){
		if ($angka > 0) {
			$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
			return $hasil_rupiah;
		}

		return "FREE";
	}
}