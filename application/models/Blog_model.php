<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class blog_model extends CI_Model {
    
        public function tambahData($data_blog){
          $this->db->insert('blog',$data_blog);
        }
    
    }
    
    /* End of file blog_model.php */
    
?>