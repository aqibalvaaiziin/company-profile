<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class order_model extends CI_Model {
    
      public function tampilData(){
          return $this->db->get('orders')->result();
      }
      

      public function getDataById($id){
        return $this->db->get_where('orders',array('id'=>$id))->row_array();
      }
      
      public function getDataService(){
        $this->db->order_by('id', 'desc');
        return $this->db->get('packageservice')->result();
      }

      public function tampilDataGroup(){
        $this->db->group_by('name');
        $this->db->order_by('id');
        return $this->db->get('room')->result();
      }
      
      public function dataKamar($name){
        $this->db->select('room.*,statusRoom.status');
        $this->db->from('room');
        $this->db->join('statusRoom', 'room.id = statusRoom.id_room');
        $this->db->where(array('statusRoom.status'=>'Available','room.name' => $name));    
        $query = $this->db->get()->result();
        return $query;
    }  

      public function getTotal(){
        $this->db->select('orders.*,room.price,packageservice.price,sum(room.price+packageservice.price)');
        $this->db->from('orders');
        $this->db->join('room', 'orders.idRoom = room.id');
        $this->db->join('room', 'orders.idService = packageservice.id');
        
        
        
      }

      public function tambahDataOrder(){

        
          $data = array(
            'idCust' => $this->input->post('custId'),
            'idRoom' => $this->input->post('roomNumber'),
            'idService' => $this->input->post('service'),
            'date'  => $this->input->post('dateOrder')
          );
      }

      public function tambahDataCustomer(){

      }

      public function cetakLaporan(){

      }

    }
    
    /* End of file order_model.php */
    
?>