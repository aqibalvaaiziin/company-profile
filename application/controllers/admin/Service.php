<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Service extends CI_Controller {
    
        public function index()
        {
            $this->load->view('admin/template/header');
            $this->load->view('admin/template/bar');
            $this->load->view('admin/service/index');
            $this->load->view('admin/template/footer');
        }
    
    }
    
    /* End of file Service.php */
    
?>