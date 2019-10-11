<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class order_model extends CI_Model {
    
      public function tampilData(){
          return $this->db->get('order')->result();
      }
      

      public function getDataById($id){
        return $this->db->get_where('order',array('id'=>$id))->row_array();
      }

      public function editData(){
        $data =
        array(
          "id_room" => $this->input->post("id_room",true),
          "date" => $this->input->post("date",true),
          "total" => $this->input->post("total",true),
          "id_service" => $this->input->post("id_service",true),
        );
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('order', $data);
      }

      

    }
    
    /* End of file order_model.php */
    
?>