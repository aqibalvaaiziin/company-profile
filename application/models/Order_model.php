<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class order_model extends CI_Model {
    
        public function tampilData(){
            return $this->db->get('order')->result();
        }
    
    }
    
    /* End of file order_model.php */
    
?>