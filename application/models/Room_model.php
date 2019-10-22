<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class room_model extends CI_Model {
    
        public function tampilData(){
            $value = $this->db->get('room')->result();
            return $value;
        }

        public function tampilDataGroup(){
            $this->db->group_by('name');
            $this->db->order_by('id');
            
            return $this->db->get('room')->result();
        }    

        public function getDataById($id){
            return $this->db->get_where('room',array('id'=>$id))->row_array();
        }
    
        
        public function tambahData($upload)
        {
            $data = array(
                'name' => $this->input->post('varName',true),
                'people' => $this->input->post('people', true),
                'type' => $this->input->post('type', true),
                'service' => $this->input->post('service', true),
                'price' => $this->input->post('price', true),
                'status' => $this->input->post('status', true),
                'desc' => $this->input->post('desc', true),
                'image' => $upload['file']['file_name'],
            );
            $this->db->insert('room', $data);
        }

        public function upload(){    
            $config['upload_path'] = './uploads/rooms/';    
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

        public function hapusData($id){
            $this->hapusDataImage($id);
            return $this->db->delete('room',array('id' => $id));
        }

        private function hapusDataImage($id)
        {
            $room = $this->getDataById($id);
            $filename = $room['image'];
            unlink(FCPATH."uploads/rooms/".$filename);
        }

        public function editData($upload,$id){
            $uploads;
            if($upload > 0){
                $uploads = $upload['file']['file_name'];
            }
            else{
                $uploads = $this->input->post('tempImg');
            }
            $data = array(
                'name' => $this->input->post('varName',true),
                'people' => $this->input->post('people', true),
                'type' => $this->input->post('type', true),
                'service' => $this->input->post('service', true),
                'price' => $this->input->post('price', true),
                'status' => $this->input->post('status', true),
                'desc' => $this->input->post('desc', true),
                'image' => $uploads,
            );
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('room', $data);
            }

            public function availableRoom(){
                if($_GET['roomName'] == 'Premium Single'){
                    return $this->db->get_where('room',array('status'=>'Available','name'=>'Premium Single'))->result();
                }
                else if($_GET['roomName'] == 'Premium Double'){
                    return $this->db->get_where('room',array('status'=>'Available','name'=>'Premium Double'))->result();
                }
                else if($_GET['roomName'] == 'Premium Duluxe'){
                    return $this->db->get_where('room',array('status'=>'Available','name'=>'Premium Duluxe'))->result();
                }
                else if($_GET['roomName'] == 'Premium Family'){
                    return $this->db->get_where('room',array('status'=>'Available','name'=>'Premium Family'))->result();
                }
            }
        
            public function getDataService(){
                $this->db->order_by('id', 'desc');
                return $this->db->get('packageservice')->result();
                
            }

    }
    
    /* End of file room_model.php */
    
?>