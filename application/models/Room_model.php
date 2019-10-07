<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class room_model extends CI_Model {
    
        public function tampilData(){
            $value = $this->db->get('room')->result();
            return $value;
        }
    
        public function tambaData(){
            $data =
            array(
              "name" => $this->input->post("name",true),
              "people" => $this->input->post("people",true),
              "type" => $this->input->post("type",true),
              "service" => $this->input->post("service",true),
              "price" => $this->input->post("price",true),
            );
            $this->db->insert('room',$data);
          }

    }
    
    /* End of file room_model.php */
    
?>