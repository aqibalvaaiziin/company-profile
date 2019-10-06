<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class blog_model extends CI_Model {
    
        public function tambaData(){
            $data =
            array(
              "nama" => $this->input->post("nama",true),
              "nim" => $this->input->post("nim",true),
              "email" => $this->input->post("email",true),
              "jurusan" => $this->input->post("jurusan",true),
            );
            $this->db->insert('mahasiswa',$data);
          }
    
    }
    
    /* End of file blog_model.php */
    
?>