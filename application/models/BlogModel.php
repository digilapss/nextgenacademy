<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class BlogModel extends CI_Model {

    public function one_blog($blog_id){

        $this->db->join('blog_category', 'blog.blog_category_id = blog_category.blog_category_id');
        $this->db->join('account', 'blog.create_by = account.account_id');
        $this->db->where('blog_id', $blog_id);
        return $this->db->get('blog');

    }

    public function list_blog_comment($blog_id){

        $this->db->join('account', 'blog_comment.create_by = account.account_id');
        return $this->db->get_where('blog_comment', array('blog_id' => $blog_id));
    }

    public function all_category(){
        return $this->db->get('blog_category');
    }

    public function recent_post(){

        $this->db->limit(4, 'DESC');
        // $this->db->where('blog_id', 'DESC');
        return $this->db->get('blog');
    }

    public function all_blog(){

        $this->db->join('blog_category', 'blog.blog_category_id = blog_category.blog_category_id');
        $this->db->join('account', 'blog.create_by = account.account_id', DESC);
        return $this->db->get('blog');
    }

    public function all_blog_start($get_blog){

        $this->db->join('blog_category', 'blog.blog_category_id = blog_category.blog_category_id');
        $this->db->join('account', 'blog.create_by = account.account_id');
        $this->db->limit($get_blog['limit'], $get_blog['start']);
        $this->db->order_by('blog_id', 'DESC');
        return $this->db->get('blog');
        
    }

    public function category_list_all($get_category){

        $this->db->join('blog', 'blog_category.blog_category_id = blog.blog_category_id');
        $this->db->where('category_name', $get_category);
        return $this->db->get('blog_category');

    }

    public function category_list_start($get_category){

        $this->db->join('blog', 'blog_category.blog_category_id = blog.blog_category_id');
        $this->db->limit($get_category['limit'], $get_category['start']);
        $this->db->order_by('blog_id', 'DESC');
        $this->db->where('category_name', $get_category['category']);
        return $this->db->get('blog_category');
        
    }

    public function add_category($data){

        return $this->db->insert('blog_category', $data);

    }

    public function update_category($data, $get_id){

        $this->db->set($data);
        $this->db->where('blog_category_id', $get_id);
        return $this->db->update('blog_category');

    }

    public function add_blog($data){
        
        return $this->db->insert('blog', $data);

    }

    public function blogById($blog_id){
        
        $this->db->join('blog_category', 'blog.blog_category_id = blog_category.blog_category_id');
        $this->db->where('blog_id',  $blog_id);
        return $this->db->get('blog');

    }

    public function delete_blog_id($blog_id){

        return $this->db->delete('blog', array('blog_id' => $blog_id ));
    }

    public function update_blog($data, $blog_id){
        $this->db->set($data);
        $this->db->where('blog_id', $blog_id);
        return $this->db->update('blog');
    }

    public function delete_category($blog_category_id){
       return $this->db->delete('blog_category', array('blog_category_id' =>  $blog_category_id));
    }

    

}
