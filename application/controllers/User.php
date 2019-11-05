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
		
		$this->load->model('AccountModel');
		$this->load->library('session');
		$this->load->helper('file');
		$this->load->library('upload');
    
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

			$data['glogin'] = $this->googleplus->loginURL();

			$this->load->view('side/header_signin');
			$this->load->view('signin', $data);
			$this->load->view('side/footer');
		}
	}


	public function login($email, $pass, $index_course){

			$login = $this->AccountModel->CekLogin($email, $pass);

			$this->session_member_byId($login, $index_course);

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
				
				$cek_login = $this->AccountModel->CekLogin($email, $pass, 1);

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

					$this->AccountModel->signup($useraccount);
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

	public function profile_update(){

		if(!$this->session->userdata('account_id')){
			show_404();
		}

			$data['name'] = $this->input->post('name');
			$data['email'] = $this->session->userdata('email');
			$data['instagram_id'] = $this->input->post('instagram_id');
			$data['born_date'] = $this->input->post('birthday');
			$data['phone_number'] = $this->input->post('phone_number');
			$data['gender'] = $this->input->post('gender');
			$data['address'] = $this->input->post('address');
			$account_id = $this->session->userdata('account_id');
			 
			if($_FILES["filefoto"]["name"]){

					
				$nmfile = time().preg_replace("/[^A-Za-z0-9-]/", "-", $this->input->post('name'));
				$config['upload_path'] = $_SERVER['DOCUMENT_ROOT'].'/img_user/';
				$config['allowed_types'] = 'jpg|png|jpeg';
				$config['max_size'] = 10000000;
				$config['file_name'] = $nmfile;

				$this->upload->initialize($config);
				if ($this->upload->do_upload('filefoto') ){

					$gbr = $this->upload->data();

					$data['image'] = base_url().'img_user/'.$gbr['file_name'] ;
					
					$this->AccountModel->update_profile($account_id, $data);

					if ($this->db->affected_rows()) {

						$this->session->set_flashdata('signup_alert', '<div class="alert alert-success" role="alert">
							Update profile berhasil upload
							</div>') ;

						$index_course = MEMBER_UPDATE;

						$login = $this->AccountModel->account_byId($account_id);
						$this->session_member_byId($login, $index_course );


					} else {


						$this->session->set_flashdata('signup_alert', '<div class="alert alert-danger" role="alert">
								Update Profile Gagal upload save data
							</div>') ;
						redirect(base_url().'user/profile');

					}

				} else {

					$this->session->set_flashdata('signup_alert', '<div class="alert alert-danger" role="alert">
							Update Profile Gagal Upload Foto
						</div>') ;
					redirect(base_url().'user/profile');


				}

			} else {

				$this->AccountModel->update_profile($account_id, $data);

				if(!$this->db->affected_rows()){

					$this->session->set_flashdata('signup_alert', '<div class="alert alert-warning" role="alert">
							<i class="fa fa-check"></i> Tidak ada upload profile
						</div>  ') ;
					redirect(base_url().'user/profile');

				} else {

					$index_course = MEMBER_UPDATE;

					$login = $this->AccountModel->account_byId($account_id);
					$this->session_member_byId($login, $index_course );


				}



			}
	}

	public function session_member_byId($login, $index_course){

		if ($login->num_rows()>0) {

			foreach ($login->result() as $row) {
				# code...
				$data = array(         'account_id' => $row->account_id,
									   'name' => $row->name,
									   'email' => $row->email,
									   'password' => $row->password,
									   'status' => $row->status,
									   'address' => $row->address,
									   'born_date' => $row->born_date,
									   'gender' => $row->gender,
									   'role' => $row->role,
									   'image' => $row->image,
									   'instagram_id' => $row->instagram_id,
									   'phone_number' => $row->phone_number,
									   'ip_address' => $row->ip_address,
				);
				
				$this->session->set_userdata($data);

			}

			if( $this->session->userdata('role') === '2' ){
				
				if(!$index_course){

					redirect(base_url().'user/profile');
					
				} else if ($index_course === MEMBER_UPDATE){
					
					$this->session->set_flashdata('signup_alert', '<div class="alert alert-success" role="alert">
							Update Profile Berhasil
						</div>') ;
					redirect(base_url().'user/profile');
				} else {

					redirect(base_url().'course/detail/'.$index_course);

				}

			} else {

				redirect(base_url().'user/profile');

			}

		} else {

			$this->session->set_flashdata( 'login_error', '<div class="alert alert-danger" role="alert">
				Email / Password salah
			</div> <script>$( document ).ready(function() {$("#exampleModal").modal("show")});</script>');

			
			redirect(base_url().'user/signin');

		}
	}

	public function update_password(){


		$new_password = $this->input->post('new_password') ;
		$new_password_confirm = $this->input->post('new_password_confirm');

		if($new_password === $this->input->post('new_password_confirm')){
			

			$this->AccountModel->update_password($new_password_confirm);

			if(!$this->db->affected_rows()){
				
				$this->session->set_flashdata('signup_alert', '<div class="alert alert-success" role="alert">
						Update Password Berhasil
					</div>') ;
				redirect(base_url().'user/profile');
				
			} else {

				$this->session->set_flashdata('signup_alert', '<div class="alert alert-danger" role="alert">
						Update Password Gagal
					</div>') ;
				redirect(base_url().'user/profile');

			}


		} else {	

			$this->session->set_flashdata('signup_alert', '<div class="alert alert-warning" role="alert">
					Konfirmasi Password Gagal
				</div>') ;
			redirect(base_url().'user/profile');

		}
	}

	public function google_oauth(){
		if (isset($_GET['code'])) {
            
			$this->googleplus->getAuthenticate();

			// $this->session->set_userdata('login_google',true);
			// $this->session->set_userdata('user_google', $this->googleplus->getUserInfo());

			$google_account = $this->googleplus->getUserInfo();
			$index_course = $this->session->userdata('index_course');

			$this->login_google($google_account, $index_course);
			
		} else {

			show_404();
		}
	}

	public function login_google($google_account, $index_course){

		$login = $this->AccountModel->cekLoginGoogle($google_account['email']);

		if($login->num_rows() > 0){

			$this->session_member_byId($login, $index_course);

		} else {
			
			$this->create_member_google($google_account);

		}
	
	}

	public function create_member_google($google_account){

		$data_member_google = array(

			'account_id' => $google_account['id'],
			'name' => $google_account['name'],
			'email' => $google_account['email'],
			'gender' => $google_account['gender'],
			'image' => $google_account['picture'],
			'password' => md5($google_account['id']),
			'status' => 1,
			'role' => 2,
			'create_time' =>  date('Y-m-d H:i:s'),
			'update_time' =>  date('Y-m-d H:i:s'),
			'ip_address' => $_SERVER["REMOTE_ADDR"]
			
		);

		$this->AccountModel->signup($data_member_google);
		
		if(!$this->db->affected_rows()){ 

			$this->session->set_flashdata( 'login_error', '<div class="alert alert-warning" role="alert">
				Gagal Connect Server 
			</div> <script>$( document ).ready(function() {$("#exampleModal").modal("show")});</script>');

			
			redirect(base_url().'user/signin');

		} else {
			
			$login = $this->AccountModel->account_byId($google_account['id']);
			$this->session_member_byId($login, $index_course);



		}
	}

	

	public function logout(){

		$this->session->sess_destroy();
		redirect(base_url().'user/signin');
	}




}
