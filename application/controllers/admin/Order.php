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
        
        public function tambah(){
            
            if ($this->form_validation->run() == FALSE) {
                # code...
                $this->load->view('admin/template/header');
                $this->load->view('admin/template/bar');
                $this->load->view('admin/order/tambah');
                $this->load->view('admin/template/footer');
            } else {
                # code...
                echo "<script>console.log('jalan bawah');</script>" ;
                $this->order_model->tambahData();
                // redirect('admin/order','refresh');
            }
            
        }
    
    }
    
    /* End of file Home.php */
    
?>