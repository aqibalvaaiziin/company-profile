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
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/bar');
            $this->load->view('admin/blog/index',$data);
            $this->load->view('admin/template/footer');
        }

        public function tambah(){
            $this->form_validation->set_rules('title','Title','trim|required|min_length[5]');
            
            if ($this->form_validation->run() == FALSE) {    
                $this->load->view('admin/template/header');
                $this->load->view('admin/template/bar');
                $this->load->view('admin/blog/tambah');
                $this->load->view('admin/template/footer');
            } else {
                $upload = $this->Blog_model->upload();
                if ($upload['result'] == 'success') {
                    $this->Blog_model->tambahData($upload);
                    $this->session->set_flashdata('add', 'New Blog added');
                    redirect('admin/blog');
                }else{
                    echo $upload['error'];
                }
            }
        }
        
        public function detail($id){
            $data['blog'] = $this->Blog_model->getDataById($id);
            $this->load->view('admin/template/header',$data);
            $this->load->view('admin/blog/detail',$data);
            $this->load->view('admin/template/footer');
        }

        public function hapus($id){
            $this->Blog_model->hapusData($id);
            $this->session->set_flashdata('flash-data', 'dihapus');
            redirect('admin/blog','refresh');     
        }

        public function edit($id){
            $data ['blog'] = $this->Blog_model->getDataById($id);
            $this->form_validation->set_rules('title', 'Title', array('required', 'min_length[4]'));
            $this->form_validation->set_rules('desc', 'Desc', 'required|min_length[4]');
            $this->form_validation->set_rules('date', 'Date', 'required');
            $this->form_validation->set_rules('author', 'Author', 'required|min_length[4]');
            $this->form_validation->set_rules('view', 'View', 'required|numeric');
            if ($this->form_validation->run() == FALSE) {
                # code...
                $this->load->view('admin/template/header',$data);
                $this->load->view('admin/blog/edit',$data);
                $this->load->view('admin/template/footer');
            } else {
                # code...
                $this->Blog_model->editData();
                redirect('admin/blog','refresh');
            }
        }
    
    }   
    /* End of file Blog.php */
?>