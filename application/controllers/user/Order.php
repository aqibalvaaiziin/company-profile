<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Order extends CI_Controller {
    
        public function index()
        {
            $this->load->view('user/template/header');
            $this->load->view('user/order/index');
            $this->load->view('user/template/footer');
        }
    
    }
    /* End of file Order.php */
?>