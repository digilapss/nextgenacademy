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
		
		$this->load->model('AccountModel');
		$this->load->model('CourseModel');
		$this->load->model('Converter');
		$this->load->model('ClassModel');
		$this->load->model('ScheduleModel');
		$this->load->model('PaymentModel');
		$this->load->library('session');
    
        ini_set('display_error','off');
        error_reporting(0);
    
	}   
	
	public function member(){

		if(!$this->session->userdata('account_id')){
			redirect(base_url().'user/signin');
		}

		// $account_id = $this->session->userdata('account_id');
		
		// $data['list_course_member'] = $this->CourseModel->course_member($account_id);

		$this->load->view('side/header');
		$this->load->view('course_member', $data);
		$this->load->view('side/footer');
		
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
				$data['course_fee'] = $this->Converter->rupiah($row_course_detail->fee) ;
				$data['course_quota'] = $row_course_detail->quota ;
				$data['course_start_time'] = $row_course_detail->start_time ;
				$data['course_finish_time'] = $row_course_detail->finish_time ;
				$data['course_index_course'] = $row_course_detail->index_course ;
				$data['course_schedule_id'] = $row_course_detail->schedule_id ;
				
			}

			$account_id = $this->session->userdata('account_id');
			if(!$this->session->userdata('account_id')){

				$data['member_apply'] = 0 ;

			} else {

				$ck_applycourse = $this->ClassModel->ck_apply_course($data['course_schedule_id'], $account_id );
				
				if($ck_applycourse->num_rows() > 0){
				
					$data['member_apply'] = 1 ;

				} else {

					$data['member_apply'] = 0 ;

				}

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

					$data_course = array(
						'course_id' => $row_course_detail->course_id ,
						'course_name_pemateri' => $row_course_detail->name ,
						'course_fee;' => $row_course_detail->fee ,
						'course_quota' => $row_course_detail->quota ,
						'course_index_course' => $row_course_detail->index_course ,
						'course_schedule_id' => $row_course_detail->schedule_id ,

					) ;
				
					
				}

				$payment_data = array(

					'payment_id' => '',
					'gateway_id' => 0,
					'status' => 1,
					'payment_evidence' => '',
					'create_time' => date('Y-m-d H:i:s'),
					'update_time' => date('Y-m-d H:i:s'),
					'create_by' => $data_course['course_id'],
					'ip_address' => $_SERVER["REMOTE_ADDR"],

				);

				$payment_id = $this->PaymentModel->add_payment($payment_data);

				$apply_course_data = array(

					'class_id' => '',
					'schedule_id' => $data_course['course_schedule_id'],
					'account_id' => $this->session->userdata('account_id'),
					'payment_id' => $payment_id,
					'create_time' => date('Y-m-d H:i:s'),
					'update_time' => date('Y-m-d H:i:s'),
					'status' => $data_course['course_fee'] === 0 ? 1 : 2 , 
					'ip_address' => $_SERVER["REMOTE_ADDR"],
				);

				$this->ClassModel->add_class($apply_course_data);
				
				if(!$this->db->affected_rows()){ 
					
					redirect(base_url().'course/detail/'.$index_course);

				} else {

					$this->ScheduleModel->course_min_slot($data_course['course_id']);

					if(!$this->db->affected_rows()){ 

						redirect(base_url().'course/detail/'.$index_course);

					} else {

						redirect(base_url().'course/member');
					}

				}

				
			}

		}

	}
	

	public function apply_course_wa($index_course){

		if(!$index_course){
			show_404();
		} else {

			if(!$this->session->userdata('account_id')){
				redirect(base_url().'course/apply_course/'.$index_course);
			}
			
			$data['index_course'] = $index_course ;

			$this->load->view('side/header_signin');
			$this->load->view('apply_course_wa', $data);
		}

	}	

}
