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
    
        ini_set('display_error','off');
        error_reporting(0);
    
    }

    public function index(){

        $config['base_url'] = base_url()."blog/index/" ;
        $config['total_rows'] = $this->BlogModel->all_blog()->num_rows();
        $data['total_blog'] = $config['total_rows'] ;
        $config['per_page'] = 2;

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

}
