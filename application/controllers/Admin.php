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

		if($this->session->userdata('role') == 1){
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

		if(!$this->session->userdata('account_id')){
            redirect(base_url());
		} 
		
		$data['all_category'] = $this->BlogModel->all_category();

		$this->load->view('side/header');
		$this->load->view('blog/admin/category', $data);
		$this->load->view('side/footer');
	}

	public function blog(){

		if(!$this->session->userdata('account_id')){
            redirect(base_url());
		} 

        $config['base_url'] = base_url()."admin/blog/" ;
        $config['total_rows'] = $this->BlogModel->all_blog()->num_rows();
        $data['total_blog'] = $config['total_rows'] ;
        $config['per_page'] = 5;

        $this->pagination->initialize($config);

        $data = array(
        //   'role' =>  ,
          'limit' => $config['per_page'],
          'start' => $this->uri->segment(3)
        );

        $data['all_blog'] = $this->BlogModel->all_blog_start($data);
        $data['links'] = $this->pagination->create_links();


		$data['category'] = $this->BlogModel->all_category();

		
		$this->load->view('side/header');
		$this->load->view('blog/admin/add_blog', $data);
		$this->load->view('side/footer');

	}

	public function add_blog(){
		if(!$this->session->userdata('account_id')){
            redirect(base_url());
		} 

		$data['title'] = $this->input->post('title');
		$data['description'] = $this->input->post('deskripsi');
		$data['blog_category_id'] = $this->input->post('category');
		$data['create_by'] = $this->session->userdata('account_id');
		$data['ip_address'] = $_SERVER["REMOTE_ADDR"];
		
		$config['upload_path']          = './blog_image/';
		$config['allowed_types']        = 'jpeg|jpg|png';
		$config['max_size']             = 2000;

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload('blogfile')) {

			$this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert"><small>Gagal Upload Blog</small></div>');

			redirect(base_url().'admin/blog');

		} else {

			$do_upload = $this->upload->data();
			$data['image_blog'] = $do_upload['file_name'];
			
			$this->BlogModel->add_blog($data);
			if(!$this->db->affected_rows()){ 
				# code...
				$this->session->set_flashdata('alert', '<div class="alert alert-danger" role="alert"><small>Gagal Tambah Blog</small></div>');

				redirect(base_url().'admin/blog');

			} else {

				$this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert"><small>Berhasil Tambah Blog</small></div>');

				redirect(base_url().'admin/blog');
			}

		}
		
	}

	public function edit_blog($blog_id){
		if(!$this->session->userdata('account_id')){
            redirect(base_url());
		} 

		$blog = $this->BlogModel->blogById($blog_id);

		// var_dump($blog);
		foreach ($blog->result() as $row_blog) {
			# code...
			$data['title'] = $row_blog->title;
			$data['blog_id'] = $row_blog->blog_id;
			$data['description'] = $row_blog->description;
			$data['image_blog'] = $row_blog->image_blog;
			$data['category_name'] = $row_blog->category_name;
			$data['blog_category_id'] =	$row_blog->blog_category_id;
			
		}
		
		
		$data['category'] = $this->BlogModel->all_category();

		// var_dump($data);

		$this->load->view('side/header');
		$this->load->view('blog/admin/blog_edit.php', $data);
		$this->load->view('side/footer');

	}

	public function delete_blog($blog_id){
		if(!$this->session->userdata('account_id')){
            redirect(base_url());
		} 

		$this->BlogModel->delete_blog_id($blog_id);

		$this->session->set_flashdata('alert', '<div class="alert alert-info" role="alert"><p>Delete Blog Success</p></div>');

		redirect(base_url().'admin/blog');



	}

}
