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
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/bar');
            $this->load->view('admin/blog/index');
            $this->load->view('admin/template/footer');
        }

        public function tambah(){
            $this->form_validation->set_rules('nama', 'Nama', array('required', 'min_length[4]'));
            $this->form_validation->set_rules('nim', 'Nim', 'required|numeric');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            if ($this->form_validation->run() == FALSE) {
                # code...
                $this->load->view('admin/template/header');
                $this->load->view('admin/template/bar');
                $this->load->view('admin/blog/tambah');
                $this->load->view('admin/template/footer');
            } else {
                # code...
                $this->mahasiswa_model->tambaData();
                redirect('admin/blog','refresh');
            }
            
        }
    
    }
    
    /* End of file Blog.php */
    
?>