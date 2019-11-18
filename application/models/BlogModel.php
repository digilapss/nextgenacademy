<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class BlogModel extends CI_Model {

    public function one_blog($blog_id){

        $this->db->join('blog_category', 'blog.blog_category_id = blog_category.blog_category_id');
        $this->db->join('account', 'blog.create_by = account.account_id');
        $this->db->where('blog_id', $blog_id);
        return $this->db->get('blog');

    }
}
