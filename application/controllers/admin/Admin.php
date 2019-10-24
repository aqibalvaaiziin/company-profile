<?php
  
  defined('BASEPATH') OR exit('No direct script access allowed');
  
  class Admin extends CI_Controller {

    
    public function __construct()
    {
      parent::__construct();
      $this->load->model('admin_model');
    }
    
  
    public function index()
    {
      $data['admins'] = $this->admin_model->tampilData();
      $this->load->view('admin/template/header');
      $this->load->view('admin/template/bar');
      $this->load->view('admin/admin/index',$data);
      $this->load->view('admin/template/footer');
    }

    public function changeStatus($id){
      $cek = $this->admin_model->getDataById($id);
      foreach($cek as $c){
        if($c->status == 'Active'){
          $this->admin_model->setDisactive($id);
          redirect('admin/admin','refresh');
        }else{
          $this->admin_model->setActive($id);
          redirect('admin/admin','refresh');
        }
      }
    }
  
  }
  
  /* End of file Register.php */
  
?>