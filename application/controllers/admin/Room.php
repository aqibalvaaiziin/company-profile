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

        public function tambah()
        {
            $this->form_validation->set_rules('varName', 'Name', 'required');
            $this->form_validation->set_rules('people', 'People', 'required');
            $this->form_validation->set_rules('type', 'Type', 'required');
            $this->form_validation->set_rules('service', 'Service', 'required');
            $this->form_validation->set_rules('price', 'Price', 'required|numeric');
            if ($this->form_validation->run() == FALSE) {    
                $this->load->view('admin/template/header');
                $this->load->view('admin/template/bar');
                $this->load->view('admin/room/tambah');
                $this->load->view('admin/template/footer');
            } else {
                $upload = $this->room_model->upload();
                if ($upload['result'] == 'success') {
                    $this->room_model->tambahData($upload);
                    $this->session->set_flashdata('add', 'New Product added');
                    redirect('admin/room');
                }else{
                    echo $upload['error'];
                }       
            }
        }

        public function detail($id){
            $data['room'] = $this->room_model->getDataById($id);
            $this->load->view('admin/template/header',$data);
            $this->load->view('admin/room/detail',$data);
            $this->load->view('admin/template/footer');
        }

        public function hapus($id){
            $this->room_model->hapusData($id);
            $this->session->set_flashdata('flash-data', 'dihapus');
            redirect('admin/blog','refresh');     
        }

    
    }
    
    /* End of file Room.php */
    
?>