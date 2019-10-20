<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Order extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('room_model');
            
        }
        

        public function index()
        {
            $data['rooms'] = $this->room_model->tampilDataGroup();
            $this->load->view('user/template/header');
            $this->load->view('user/order/index',$data);
            $this->load->view('user/order/room',$data);
            $this->load->view('user/order/order',$data);
            $this->load->view('user/template/footer');
        }
    
    }
    /* End of file Order.php */
?>