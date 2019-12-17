<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Converter extends CI_Model {
	function rupiah($angka){
		if ($angka > 0) {
			$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
			return $hasil_rupiah;
		}

		return "FREE";
	}

	function text_limit($plain_text, $max_character, $subs_text) {
		if (strlen($plain_text) > $max_character) {
			return substr($plain_text, 0, $max_character) . $subs_text; 
		}

		return $plain_text;
	}

	function get_full_date($time_stamp) {
		return date('d M Y', strtotime($time_stamp));
	}

	function get_date($time_stamp) {
		return date('d', strtotime($time_stamp));
	}

	function get_month_string($time_stamp) {
		return $this->to_indonesia_short_month(date('n', strtotime($time_stamp)));
	}

	function to_indonesia_short_month($month) {
		$ina_month = array (
			1 => 'Jan',
			'Feb',
			'Mar',
			'Apr',
			'Mei',
			'Jun',
			'Jul',
			'Agu',
			'Sep',
			'Okt',
			'Nov',
			'Des'
		);
		return $ina_month[$month];
	}
}