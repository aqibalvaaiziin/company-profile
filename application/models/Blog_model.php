<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class blog_model extends CI_Model {
    
      public function tampilData(){
        $value = $this->db->get('blog')->result();
        return $value;
      }
      
      public function tambahData($upload)
        {
            $data = array(
                'title' => $this->input->post('title',true),
                'desc' => $this->input->post('desc', true),
                'date' => $this->input->post('date', true),
                'author' => $this->input->post('author', true),
                'view' => $this->input->post('view', true),
                'image' => $upload['file']['file_name'],
            );

            $this->db->insert('blog', $data);
        }
      
      public function upload(){    
        $config['upload_path'] = './uploads/blog/';    
        $config['allowed_types'] = 'jpg|png|jpeg';

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
    
    /* End of file blog_model.php */
    
?>