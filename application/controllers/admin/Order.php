<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Order extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('order_model');
        }
        

        public function index()
        {
            $data['orders'] = $this->order_model->tampilData();
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/bar');
            $this->load->view('admin/order/index',$data);
            $this->load->view('admin/template/footer');
        }
        

        public function detail($id){
            $data['orders'] = $this->order_model->getDataById($id);
            $this->load->view('admin/template/header',$data);
            $this->load->view('admin/order/detail',$data);
            $this->load->view('admin/template/footer');
        }

        public function edit($id){
        $data ['orders'] = $this->order_model->getDataById($id);
        $this->form_validation->set_rules('id_room', 'ID_ROOM', 'required');
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('total', 'Total', 'required');
        if ($this->form_validation->run() == FALSE) {
            # code...
            $this->load->view('admin/template/header',$data);
            $this->load->view('admin/order/edit',$data);
            $this->load->view('admin/template/footer');
        } else {
            # code...
            $this->order_model->editData();
            redirect('admin/order','refresh');
        }
        }
    
    }
    
    /* End of file Home.php */
    
?>