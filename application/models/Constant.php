<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Constant extends CI_Model {

	function gender() {
		return array(
			GenderMale => "Laki-laki", 
			GenderFemale => "Perempuan"
		);
	}

	function educational_level() {
		return array(
			EducatioalLevelElementarySchool => "SD",
			EducatioalLevelJuniorHighSchool => "SMP",
			EducatioalLevelSeniorHighSchool => "SMA",
			EducatioalLevelDiploma1 => "Diploma 1",
			EducatioalLevelDiploma2 => "Diploma 2",
			EducatioalLevelDiploma3 => "Diploma 3",
			EducatioalLevelBachelor1 => "Sarjana 1",
			EducatioalLevelBachelor2 => "Sarjana 2",
			EducatioalLevelBachelor3 => "Sarjana 3",
		);
	}

	function achievement_level() {
		return array(
			InstitutionLevel => "Sekolah/Institusi",
			RegionalLevel => "Regional",
			NasionalLevel => "Nasional",
			InternationalLevel => "Internasional",
		);
	}

	public function role_level() {
		return array(
			RoleSeniorHighSchool => "Siswa/i",
			RoleCollegeStudent => "Mahasiswa/i",
		);
	}
	
}