<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Room extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('room_model');            
        }
        

        public function index()
        {
            $data['rooms'] = $this->room_model->tampilData();
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/bar');
            $this->load->view('admin/room/index',$data);
            $this->load->view('admin/template/footer');
        }

        public function tambah(){
            
            if ($this->form_validation->run() == FALSE) {
              # code...
                $this->load->view('admin/template/header');
                $this->load->view('admin/template/bar');
                $this->load->view('admin/room/tambah');
                $this->load->view('admin/template/footer');
            } else {
              # code...
              $this->room_model->tambaData();
              redirect('admin/room','refresh');
            }
          }
    
    }
    
    /* End of file Room.php */
    
?>