<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Service extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('service_model');
            
        }
        

        public function index()
        {
            $data['services'] = $this->service_model->tampilData();
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/bar');
            $this->load->view('admin/service/index',$data);
            $this->load->view('admin/template/footer');
        }
    
    }
    
    /* End of file Service.php */
    
?>