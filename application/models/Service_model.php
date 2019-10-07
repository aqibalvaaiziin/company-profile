<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class service_model extends CI_Model {
    
        public function tampilData(){
            return $this->db->get('service')->result();
        }
    
    }
    
    /* End of file Service.php */
    
?>