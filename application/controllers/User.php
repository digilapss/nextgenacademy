<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
		$this->load->library('session');
    
        ini_set('display_error','off');
        error_reporting(0);
    
	}
	
	public function signin(){


		if($this->session->userdata('account_id')){
			redirect(base_url());
		}

		if($this->input->post('email') && $this->input->post('password')){
			
			$email = $this->input->post('email');
			$pass = $this->input->post('password');
			$index_course = $this->session->userdata('index_course');
			$this->login($email , $pass, $index_course);

		} else {

			$this->load->view('side/header_signin');
			$this->load->view('signin');
			$this->load->view('side/footer');
		}
	}


	public function login($email, $pass, $index_course){

			$cek_login = $this->Login->CekLogin($email, $pass);

			if ($cek_login->num_rows()>0) {
				# code...
				

				foreach ($cek_login->result() as $row) {
					# code...
					$data = array(         'account_id' => $row->account_id,
										   'name' => $row->name,
										   'email' => $row->email,
										   'password' => $row->password,
										   'status' => $row->status,
										   'address' => $row->address,
										   'gender' => $row->gender,
										   'role' => $row->role,
										   'image' => $row->image,
										   'phone_number' => $row->phone_number,
										   'ip_address' => $row->ip_address,
										);
					
					$this->session->set_userdata($data);

				}

				if( $this->session->userdata('role') === '2' ){
					
					if(!$index_course){

						redirect(base_url());
						
					} else {

						redirect(base_url().'course/detail/'.$index_course);

					}

				} else {


					redirect(base_url());

				}
   
			} else {

				$this->session->set_flashdata( 'login_error', '<div class="alert alert-danger" role="alert">
					Email / Password salah
				</div> <script>$( document ).ready(function() {$("#exampleModal").modal("show")});</script>');

				
				redirect(base_url().'user/signin');

			}
	}

	public function signup()
	{

		if (

			$this->input->post('full_name') && 
			$this->input->post('phone_number') && 
			$this->input->post('email') && 
			$this->input->post('password') && 
			$this->input->post('repeat_password')

		) {

			$full_name = $this->input->post('full_name') ;
			$phone_number = $this->input->post('phone_number') ;
			$email = $this->input->post('email') ;
			$pass = $this->input->post('password');
			$index_course = $this->session->userdata('index_course');
			# code...

			if ($pass === $this->input->post('repeat_password') ){
				
				$cek_login = $this->Login->CekLogin($email, $pass, 1);

				if ($cek_login->num_rows()>0) {

					$this->session->set_flashdata('signup_alert', '<div class="alert alert-danger" role="alert">
						Email anda sudah terdaftar, silahkan <a href="'.base_url().'user/signin">Signin</a>
					</div>  ');
					redirect(base_url().'user/signup');

					
				} else {

					$useraccount = array (
						'name' => $full_name,
						'phone_number' => $phone_number,
						'email' => $email,
						'password' => md5($this->input->post('password')),
						'status' => 1,
						'role' => 2,
					);

					$this->Login->signup($useraccount);
					if(!$this->db->affected_rows()){
					
						$this->session->set_flashdata('signup_alert', '<div class="alert alert-danger" role="alert">
							Ulangi Password tidak cocok
						</div>  ') ;
						redirect(base_url().'user/signup');

					} else {

						if(!$index_course){

							$this->session->set_flashdata('login_error', '<div class="alert alert-success" role="alert">
								Registrasi Sukses, Silahkan login
							</div>') ;
							
							redirect(base_url().'user/signin');
							
						} else {
							
							$this->login($email, $pass, $index_course);

						}

						
					}
				}
				

			} else {

				$this->session->set_flashdata('repeat_pass', 'Ulangi Password tidak cocok') ;
				$this->session->set_flashdata('full_name', $full_name ) ;
				$this->session->set_flashdata('phone_number', $phone_number) ;
				$this->session->set_flashdata('email', $email );
				$this->session->set_flashdata('password', $this->input->post('password') );
				$this->session->set_flashdata('repeat_password', $this->input->post('repeat_password')); 
				$this->load->view('signup');

			}

		} else {

			$this->load->view('side/header_signin');
			$this->load->view('signup');
			$this->load->view('side/footer');
		}
	}


	public function profile(){

		$this->load->view('side/header');
		$this->load->view('member_profile');
		$this->load->view('side/footer');

	}

	public function logout(){


		$this->session->sess_destroy();
		redirect(base_url().'user/signin');
	}




}
