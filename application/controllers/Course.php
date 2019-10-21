<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {

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
		
		$this->load->model('Login');
		$this->load->model('CourseModel');
		$this->load->model('PaymentModel');
		
		$this->load->library('session');
    
        ini_set('display_error','off');
        error_reporting(0);
    
    }   
    
    public function detail(){
    	$page_index = substr($_SERVER[ "REQUEST_URI" ], strrpos($_SERVER[ "REQUEST_URI" ], '/') + 1);

    	$course_detail = $this->CourseModel->one_course($page_index);

		if($course_detail->num_rows() > 0){

			foreach($course_detail->result() as $row_course_detail){

				$data['course_title'] = $row_course_detail->title ;
				$data['course_name_pemateri'] = $row_course_detail->name ;
				$data['course_kategori'] = $row_course_detail->course_category_name ;
				$data['course_objective'] = $row_course_detail->objective ;
				$data['course_eligibility'] = $row_course_detail->eligibility ;
				$data['course_outline'] = $row_course_detail->outline ;
				$data['course_preview'] = $row_course_detail->preview ;
				$data['course_image'] = $row_course_detail->image_course ;
				$data['course_fee'] = $row_course_detail->fee ;
				$data['course_quota'] = $row_course_detail->quota ;
				$data['course_start_time'] = $row_course_detail->start_time ;
				$data['course_finish_time'] = $row_course_detail->finish_time ;
				$data['course_index_course'] = $row_course_detail->index_course ;
				
			}

			$this->load->view('side/header');
			$this->load->view('course_detail', $data);
			$this->load->view('side/footer');

		} else {
			show_404();
		}
    }

    public function course(){

        if($this->session->userdata('role') !== 'mentor'){
            redirect(base_url());
        }

		$this->load->view('side/header');
        $this->load->view('admin/course');
		$this->load->view('side/footer');
    }

	public function apply_course($index_course){

		if(!$this->session->userdata('account_id')){
			
			$this->session->set_userdata('index_course', $index_course);
			redirect(base_url().'user/signin');

		} else {

			$one_course = $this->CourseModel->one_course($index_course);

			if($one_course->num_rows() > 0){

				foreach($one_course->result() as $row_course_detail){

					$data['course_title'] = $row_course_detail->title ;
					$data['course_name_pemateri'] = $row_course_detail->name ;
					$data['course_kategori'] = $row_course_detail->course_category_name ;
					$data['course_objective'] = $row_course_detail->objective ;
					$data['course_preview'] = $row_course_detail->preview ;
					$data['course_fee'] = $row_course_detail->fee ;
					$data['course_quota'] = $row_course_detail->quota ;
					$data['course_start_time'] = $row_course_detail->start_time ;
					$data['course_finish_time'] = $row_course_detail->finish_time ;
					$data['course_index_course'] = $row_course_detail->index_course ;
					$data['course_schedule_id'] = $row_course_detail->schedule_id ;
					
				}

				$apply_course_data = array(

					'class_id' => '',
					'schedule_id' => $course_schedule_id,
					'account_id' => $this->session->userdata('account_id'),
					'payment_id' => 1,
					'create_time' => date('Y-m-d H:i:s'),
					'update_time' => date('Y-m-d H:i:s'),
					'update_by' => $course_nama_pemateri,
					'status' => 1, 
					'ip_address' => $_SERVER["REMOTE_ADDR"],
				);

				$data = array(
					
					'payment_id' => '',
					'gateway_id' => '',
					'status' => 1,
					'payment_evidence' => '',
					'create_time' => date('Y-m-d H:i:s'),
					'update_time' => date('Y-m-d H:i:s'),
					'create_by' => $course_nama_pemateri,
					'ip_address' => $_SERVER["REMOTE_ADDR"],

				);

				$payment = $this->PaymentModel->add_payment($data);
				echo $payment ;

				// $this->CourseModel->apply_course($apply_course_data);
			
				// if(!$this->db->affected_rows()){
					
				// }

				
			}

		}

	}

	public function apply_course_wa($index_course){

		if(!$index_course){
			show_404();
		} else {

			if(!$this->session->userdata('account_id')){
				show_404();
			}
			
			$data['index_course'] = $index_course ;

			$this->load->view('side/header_signin');
			$this->load->view('apply_course_wa', $data);
			$this->load->view('side/footer');
		}

	}	

}
