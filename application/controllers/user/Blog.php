<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Blog extends CI_Controller {
    
        public function index()
        {
            $this->load->view('user/template/header');
            $this->load->view('user/blog/index');
            $this->load->view('user/template/footer');
        }
    
    }
    
    /* End of file Blog.php */
    
?>