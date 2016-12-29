<?php
    class MY_Model extends CI_Model {
        
        protected $table_name ;
        protected $id ;
        protected $slug ;
        
        
        function data_from_post($fields){
            $data = array();
            foreach ($fields as $field){
                $data[$field] = $this->input->post($field);
            }
            return $data;
        }
        
        
        public function save($data,$id = NULL){
            if($id == FALSE){
                $this->db->insert($this->table_name,$data);
            }
            if(isset($id) && $id == TRUE){
                if(is_int($id)){
                    $id = (int) $id ; 
                    $this->db->where($this->id,$id);
                    $this->db->set($data);
                    $this->db->update($this->table_name);
                }
                else {
                    $this->db->where($this->slug,$id);
                    $this->db->set($data);
                    $this->db->update($this->table_name);
                }
                
            }
            return $this->db->insert_id();
        }


        public function get($id = NULL){
            if(isset($id) && $id == TRUE){
                $id = (int) $id;
                $this->db->where($this->id,$id);
                $query = $this->db->get($this->table_name);
            }
            else{
                $query = $this->db->get($this->table_name);
            }
            if($query->num_rows() > 0){
                return $query->result();
            }
        }
        
        public function get_all($num=NULL,$offset=NULL) {
            if($num && !$offset){
                $query = $this->db->get($this->table_name,$num);
            }
            elseif($num && $offset){
                $query = $this->db->get($this->table_name,$num,$offset);
            }
            else {
                $query = $this->db->get($this->table_name);
            }
            if($query->num_rows() > 0 ) {
                return $query->result();
            }
        }
        
        public function remove($id){
            if($id == TRUE){
                $id = (int) $id ;
                $this->db->where($this->id,$id);
                $this->db->delete($this->table_name);
            }
            else { return FALSE ;}
            return TRUE;
        }
        
        
        
        
    }