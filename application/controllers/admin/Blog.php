<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Blog extends CI_Controller {

        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('blog_model');
        }
        
    
        public function index()
        {
            $data['blogs'] = $this->blog_model->tampilData();
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/bar');
            $this->load->view('admin/blog/index',$data);
            $this->load->view('admin/template/footer');
        }

        public function tambah(){
            if ($this->form_validation->run() == FALSE) {    
                $this->load->view('admin/template/header');
                $this->load->view('admin/template/bar');
                $this->load->view('admin/blog/tambah');
                $this->load->view('admin/template/footer');
            } else {
                $upload = $this->blog_model->upload();
                if ($upload['result'] == 'success') {
                    $this->blog_model->tambahData($upload);
                    $this->session->set_flashdata('add', 'New Blog added');
                    redirect('admin/blog');
                }else{
                    echo $upload['error'];
                }
            }
        }
    
    }
    
    /* End of file Blog.php */
    
?>