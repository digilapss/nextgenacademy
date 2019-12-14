<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

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
		
		$this->load->model('BlogModel');
		$this->load->library('session');
		$this->load->library('upload');
    
        ini_set('display_error','off');
        error_reporting(0);
    
    }

    public function index(){

        $config['base_url'] = base_url()."blog/index/" ;
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

        // $data['all_blog'] = $this->BlogModel->all_blog();
        $data['category_blog'] = $this->all_category(); 
        $data['recent_post'] = $this->recent_post(); 

        $this->load->view('side/header');
        $this->load->view('blog/blog_list', $data);
        $this->load->view('side/footer');


    }

    public function page(){

        $url1 = $this->uri->segment(3);
        $url2 = $this->uri->segment(4);
        $url3 = $this->uri->segment(5);

        $tahun = substr($url1,4);
        $bulan = substr($url1,2,-4);
        $tgl = substr($url1,0,-6);

        $blog_title = preg_replace("/[^a-zA-Z0-9]/", " ", $url3);
        $blog_tgl = $tahun.'-'.$bulan.'-'.$tgl ;

        $blog_data = $this->BlogModel->one_blog($url2, $blog_tgl, $blog_title);
        
        foreach($blog_data->result() as $row_data){

            $data['blog_id'] = $row_data->blog_id;
            $data['blog_category_id'] = $row_data->blog_category_id;
            $data['image_blog'] = $row_data->image_blog;
            $data['image_user'] = $row_data->image;
            $data['title'] = $row_data->title;
            $data['tag'] = $row_data->tag;
            $data['description'] = $row_data->description;
            $data['status'] = $row_data->status;
            $data['total_comment'] = $row_data->total_comment;
            $data['create_time'] = $row_data->create_time;
            $data['update_time'] = $row_data->update_time;
            
            $data['name'] = $row_data->name;

            $data['category_name'] = $row_data->category_name;
        }
        
        $data['comment_blog'] = $this->list_blog_comment($data['blog_id']); 
        $data['category_blog'] = $this->all_category(); 
        $data['recent_post'] = $this->recent_post(); 

        // var_dump($data['blog_id']);
        

        $this->load->view('side/header');
        $this->load->view('blog/content', $data);
        $this->load->view('side/footer');

    }

    public function list_blog_comment($blog_id){
        return  $this->BlogModel->list_blog_comment($blog_id);
    }

    public function all_category(){
        return  $this->BlogModel->all_category(); 
    }

    public function recent_post(){
        return  $this->BlogModel->recent_post(); 
    }

    public function category(){

        $get_category = $this->uri->segment(3);
        if(!$get_category || empty($get_category)){
            show_404();
        }

        $config['base_url'] = base_url()."blog/category/".$get_category."/" ;
        $config['total_rows'] = $this->BlogModel->category_list_all($get_category)->num_rows();
        $data['total_blog'] = $config['total_rows'] ;
        $config['per_page'] = 5;

        $this->pagination->initialize($config);

        $data = array(
          'category' => $get_category ,
          'limit' => $config['per_page'],
          'start' => $this->uri->segment(4)
        );

        $data['list_cateory'] = $this->BlogModel->category_list_start($data);
        $data['links'] = $this->pagination->create_links();

        // $data['all_blog'] = $this->BlogModel->all_blog();
        $data['category_blog'] = $this->all_category(); 
        $data['recent_post'] = $this->recent_post(); 
        
        
        $this->load->view('side/header');
        $this->load->view('blog/category_list', $data);
        $this->load->view('side/footer');

    }


    public function add_category(){
        
		if($this->session->userdata('role') == 2){
            redirect(base_url());
        } 
		if(!$this->session->userdata('account_id')){
            redirect(base_url());
        } 


        $data['category_name'] = $this->input->post('category');
        $data['status'] = $this->input->post('status');

        if(empty($this->input->post('category'))) {
            
            redirect(base_url().'admin/blog_category');
        }

        $this->BlogModel->add_category($data);
        
        if(!$this->db->affected_rows()){
            
            $this->session->set_flashdata('alert', '<div class="alert alert-danger" role="alert">
                <p>Gagal</p>
            </div>  ') ;
            redirect(base_url().'admin/blog_category');

        } else {

            redirect(base_url().'admin/blog_category');
            
        }
    }

    public function update_category($get_id){
        
        $data['category_name'] = $this->input->post('category');
        $data['status'] = $this->input->post('status');
        if(empty($data['category_name'])) {
            
            redirect(base_url().'admin/blog_category');
        }

        $this->BlogModel->update_category($data, $get_id);
        
        if(!$this->db->affected_rows()){
            
            $this->session->set_flashdata('alert', '<div class="alert alert-danger" role="alert">
                <p>Gagal</p>
            </div>');

            redirect(base_url().'admin/blog_category');

        } else {

            $this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">
                <p>Update Berhasil</p>
            </div>  ') ;

            redirect(base_url().'admin/blog_category');
            
        }
    }

    public function update_blog($blog_id){

        $data['title'] = $this->input->post('title');
        $data['description'] = $this->input->post('deskripsi');
        $data['blog_category_id'] = $this->input->post('category');

        $this->BlogModel->update_blog($data, $blog_id);

        if(!$this->db->affected_rows()){

            $this->session->set_flashdata('alert', '<div class="alert alert-danger" role="alert">
                <p>Gagal update Blog</p>
            </div>  ') ;

            redirect(base_url().'admin/edit_blog/'.$blog_id);

        } else {

            $this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">
                <p>Berhasil update Blog</p>
            </div>  ') ;

            redirect(base_url().'admin/edit_blog/'.$blog_id);
        }
        
        
    }


}
