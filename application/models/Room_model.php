<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class room_model extends CI_Model {
    
        public function tampilData(){
            $value = $this->db->get('room')->result();
            return $value;
        }
    
        
      public function tambahData($upload)
      {
          $data = array(
              'name' => $this->input->post('name',true),
              'people' => $this->input->post('people', true),
              'type' => $this->input->post('type', true),
              'service' => $this->input->post('service', true),
              'price' => $this->input->post('price', true),
              'image' => $upload['file']['file_name'],
          );
          $this->db->insert('blog', $data);
      }
      public function upload(){    
        $config['upload_path'] = './uploads/blogs/';    
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $this->load->library('upload', $config);
        if($this->upload->do_upload('image')){
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');      
            return $return;
        }else{    
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());      
            return $return;   
        }  
    }
    }
    
    /* End of file room_model.php */
    
?>