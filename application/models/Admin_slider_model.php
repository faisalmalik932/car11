<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Admin_slider_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

     public function create_slider($data) 
    {
        $this->db->insert('slider', $data);
    }
    public function get_slider() 
    {
        $this->db->select('*');
        $this->db->from('slider');/*
        $this->db->order_by("name", "asc");*/
        $query = $this->db->get();
        return $query->result();
    }
    public function post_model_update($data, $id)
    {
        $this->db->where('id',$id);
        $this->db->update('slider',$data);
    }
     /*function delete($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('testimonials');
    }
    public function did_delete_row($id){
  $this -> db -> where('user_id', $id);
  $this -> db -> delete('users');
}*/
    public function delete_slider($id)
    {
        $this->db->delete('slider',array('id'=>$id));
    }
    
}
?>
    
    <!-- /*public function user_data_with_id($id)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id', $id);
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result();
    }
    public function account_types()
    {
        $this->db->select('id,name');
        $this->db->from('user_types');
        $query = $this->db->get();
        return $query->result();
    }
    public function recent_cars($type)
    {
            $this->db->where('vehicle.type',$type);
        $this->db->select('vehicle.id as vehicle_id');
        $this->db->select('vehicle.*');
        $this->db->from('vehicle');
        $this->db->join('accessories','accessories_id=accessories.id');
        $this->db->select('accessories.id as accessories_id');
        $this->db->select('accessories.*');
        //$this->db->limit(2);
        $query = $this->db->get();
            return $query->result();
    }
    public function recent_featured()
    {
        $this->db->where('vehicle.featured',1);
        $this->db->select('vehicle.id as vehicle_id');
        $this->db->select('vehicle.*');
        $this->db->from('vehicle');
        $this->db->join('accessories','accessories_id=accessories.id');
        $this->db->select('accessories.id as accessories_id');
        $this->db->select('accessories.*');
        //$this->db->limit(2);
        $query = $this->db->get();
            return $query->result();
    }
     public function cars_stats_model($newcar)
    {
       $this->db->select('vehicle.*');
       $this->db->from('vehicle');
       $this->db->where('vehicle.type',$newcar);
        $query = $this->db->get();
        return $query->num_rows();
       
    }
       public function cars_stats_model_1($usedcar)
    {
       $this->db->select('vehicle.*');
       $this->db->from('vehicle');
       $this->db->where('vehicle.type',$usedcar);
        $query = $this->db->get();
        return $query->num_rows();
       
    }
   public function trending_vechicle()
    {
        //$this->db->where('vehicle.featured',1);
        $this->db->select('vehicle.id as vehicle_id');
        $this->db->select('vehicle.*');
        $this->db->from('vehicle');
        $this->db->join('accessories','accessories_id=accessories.id');
        $this->db->select('accessories.id as accessories_id');
        $this->db->select('accessories.*');
        $this->db->order_by('vehicle.views','DESC');
        $this->db->limit(3);
        //$this->db->limit(2);
        $query = $this->db->get();
            return $query->result();
    }*/
 -->