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
            // $this->form_validation->set_rules('nama', 'Nama', array('required', 'min_length[4]'));
            // $this->form_validation->set_rules('nim', 'Nim', 'required|numeric');
            // $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            if ($this->form_validation->run() == FALSE) {
                # code...
                $this->load->view('admin/template/header');
                $this->load->view('admin/template/bar');
                $this->load->view('admin/blog/tambah');
                $this->load->view('admin/template/footer');
            } else {
                
                $config = array(
                    'upload_path'=>'./uploads',
                    'allowed_types'=>'jpg|png|jpeg',
                    'max_size'=>5086
                    );
                $this->load->library('upload', $config);
                $this->upload->do_upload('image');
                $finfo = $this->upload->data();
                $image_name = $finfo['file_name'];

                $title = $this->input->post('title',true);
                $desc = $this->input->post('desc',true);
                $auth = $this->input->post('auth',true);
                $view = $this->input->post('view',true);

                $data_blog = array(
					'nama'=>$nama,
					'title'=>$title,
					'desc'=>$desc,
                    'date'=>now(),
                    'author'=>$auth,
                    'view'=>$view,
                    'image'=> $image_name
                );
                
                $config = array(
                    'source_image'=>'/asssets/uploads/'.$image_name,
                    'image_library'=>'gd2',
                    'new_image'=>'uploads/',
                    'maintain_ratio'=>true,
                    'width'=>150,
                    'height'=>200
                );
                $this->load->library('image_lib',$config2);
                $this->image_lib->resize();
                $this->blog_model->tambahData($data_blog);
                redirect('admin/blog','refresh');
            }
            
        }
    
    }
    
    /* End of file Blog.php */
    
?>