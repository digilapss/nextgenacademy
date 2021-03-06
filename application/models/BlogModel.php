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
}
