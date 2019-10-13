<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Blog extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Blog_model');
            
        }
        

        public function index()
        {
            $data['blogs'] = $this->Blog_model->tampilData();
            if ($this->input->post('keyword')) {
                # code...
                $data['blogs'] = $this->Blog_model->cariDataBlog();
            }
            $this->load->view('user/template/header');
            $this->load->view('user/blog/index',$data);
            $this->load->view('user/template/footer');
        }
    
    }
    
    /* End of file Blog.php */
    
?>