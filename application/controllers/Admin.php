<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		$this->load->model('BlogModel');
		$this->load->library('session');
    
        ini_set('display_error','off');
		error_reporting(0);

		if($this->session->userdata('role') == 2){
            redirect(base_url());
        } 
    
    }   
    
    public function dashboard(){
		$this->load->view('side/header');
        $this->load->view('admin/dashboard');
		$this->load->view('side/footer');
    }

    public function course(){

       
		$this->load->view('side/header');
        $this->load->view('admin/course');
		$this->load->view('side/footer');
    }

    public function sv_course(){
		echo '';
		
	}

	public function blog_category(){

		$data['all_category'] = $this->BlogModel->all_category();

		$this->load->view('side/header');
		$this->load->view('blog/admin/category', $data);
		$this->load->view('side/footer');
	}

}
