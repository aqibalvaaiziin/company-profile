<?php
  
  defined('BASEPATH') OR exit('No direct script access allowed');
  
  class admin_model extends CI_Model {
  
    public function tampilData(){
      return $this->db->get('admin')->result();
    }

    public function setActive($id){
      $data=array('status' => 'Active');
      $this->db->where('id', $id);
      $this->db->update('admin', $data);  
    }

    public function setDisactive($id){
      $data=array('status' => 'Not Active');
      $this->db->where('id', $id);
      $this->db->update('admin', $data);  
    }

    public function getDataById($id){
      return $this->db->get_where('admin',array('id'=>$id))->result();
    }
  
  }
  
  /* End of file admin_model.php */
  
?>