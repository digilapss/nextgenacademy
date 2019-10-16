<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Academy extends CI_Controller {

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



    public function __construct(){

        parent::__construct();

		$this->load->model('Course');
        ini_set('display_error','off');
        error_reporting(0);
    
    }
    
    public function index($halaman = 'home') {
    
        if (file_exists(APPPATH."views/".$halaman.'.php')) {
            # code...

			$data['list_course'] = $this->Course->list_course(3) ;

			$this->load->view('side/header');
			$this->load->view($halaman, $data);
			$this->load->view('side/footer');
			

        } else {

			$course_detail = $this->Course->one_course($halaman);

			if($course_detail->num_rows() > 0){

				foreach($course_detail->result() as $row_course_detail){

					$data['course_title'] = $row_course_detail->title ;
					$data['course_kategori'] = $row_course_detail->kategori ;
					$data['course_objective'] = $row_course_detail->objective ;
					$data['course_preview'] = $row_course_detail->preview ;
					$data['course_image'] = $row_course_detail->image_course ;
				}

				$this->load->view('side/header');
				$this->load->view('course_detail', $data);
				$this->load->view('side/footer');

			} else {

				show_404();
			}

        }
    }
}


