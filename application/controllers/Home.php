<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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

		$this->load->model('CourseModel');
		$this->load->model('Converter');
        ini_set('display_error','off');
        error_reporting(0);
    
    }
    
    public function index() {
			$data['list_course'] = $this->CourseModel->list_course(3) ;
			$data['is_homepage'] = true;
			$data['header_class'] = 'transparent_background';

			$this->load->view('side/header', $data);
			$this->load->view('home');
			$this->load->view('feature');
			$this->load->view('special_course');
			$this->load->view('about_us');
			$this->load->view('partnership');
			$this->load->view('side/footer');
	}	
}