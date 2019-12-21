<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mentor extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    public function __construct() {

        parent::__construct();

		$this->load->model('Constant');
		$this->load->model('CourseModel');
		$this->load->model('EducationalModel');
		$this->load->model('MentorModel');
		$this->load->model('util/Converter');
		$this->load->model('util/Validator');
        ini_set('display_error','off');
        error_reporting(0);
    
    }
    
    public function index() {
        $config['base_url'] = base_url()."mentor/index/" ;
        $config['total_rows'] = $this->MentorModel->total_available_mentor();
        $data['total_mentor'] = $config['total_rows'] ;
        $config['per_page'] = 5;

        $this->pagination->initialize($config);

        $filters = array(
        //   'role' =>  ,
          'limit' => $config['per_page'],
          'start' => $this->uri->segment(3)
        );
        
        $data['mentor'] = $this->MentorModel->all_mentor($filters);
        $data['links'] = $this->pagination->create_links();

        $data['educational'] = $this->EducationalModel->all_educational();
        $data['city_list'] = $this->EducationalModel->city_list();
		$data['gender'] = $this->Constant->gender();


        $this->load->view('side/header');
        $this->load->view('mentors/mentor_list', $data);
        $this->load->view('side/footer');

    }	
    
    public function detail(){
        $get_id = $this->uri->segment(3);
        if (empty($get_id)) {
            # code...
            show_404();
        }

        $data['o_O'] = $this->MentorModel->detail_mentor($get_id);

        foreach ($data['o_O']->result() as $value) {
            # code...
            $data['profile_mentor'] = $value ;
        }

        

        $this->load->view('side/header');
        $this->load->view('mentors/mentor_profile', $data);
        $this->load->view('side/header');
    }


    public function search(){
        
        $filters['role'] = 2;

        $filters['gender'] = $this->input->get('gender');
        $filters['institution_name'] = $this->input->get('institution_name');
        $filters['city'] = $this->input->get('city');


        $config['base_url'] = base_url()."mentor/index/" ;
        $config['total_rows'] = $this->MentorModel->total_available_mentor($filters);
        $data['total_mentor'] = $config['total_rows'] ;
        $config['per_page'] = 5;


        $this->pagination->initialize($config);


        $filters['limit'] = $config['per_page'] ;
        $filters['start'] = $this->uri->segment(3);
        
        $data['mentor'] = $this->MentorModel->all_mentor($filters);
        $data['links'] = $this->pagination->create_links();

		$data['educational'] = $this->EducationalModel->all_educational();
        $data['city_list'] = $this->EducationalModel->city_list();
        $data['gender'] = $this->Constant->gender();

        $this->load->view('side/header');
        $this->load->view('mentors/mentor_list', $data);
        $this->load->view('side/footer');

    }
}
