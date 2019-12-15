<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Admin_vehicle_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
//Insert Post
    public function user_data_with_id($id)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id', $id);
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result();
    }
    public function post_model($data)
    {
        $this->db->insert('vehicle',$data);
    }
    public function post_accessories_model($data_access)
    {
        $this->db->insert('accessories',$data_access);
        $getid =$this->db->insert_id();
                return $getid;
    }
//End Insert Post

//Update Post
    public function post_model_update($data, $vehicle_id)
    {
        $this->db->where('id',$vehicle_id);
        $this->db->update('vehicle',$data);
    }
    public function post_accessories_model_update($data_access,$accessories_id)
    {
        $this->db->where('id',$accessories_id);
        $this->db->update('accessories',$data_access);
    }
//End Update Post
    public function my_vehicles_model($id)
    {
        $this->db->select('*');
        $this->db->from('vehicle');
        $this->db->where('users_id',$id);
        $query = $this->db->get();
        return $query->result();
    } 
    
    public function profile_update_model($id,$data)
    {
       $this->db->where('id', $id);
        return $this->db->update('users', $data);
    }

    public function status_model($id,$status)
    {
        $this->db->select('status');
        $this->db->from('vehicle');
        $this->db->set('status', $status);
        $this->db->where('id', $id);
        $this->db->update('vehicle');
    }
    public function delete_model($id,$accessories_id)
    {
        $this->db->delete('accessories',array('id'=>$accessories_id));
        $this->db->delete('vehicle',array('id'=>$id));
    }

    public function count($id)
    {
            $this->db->select('id');
            $this->db->from('vehicle');
            $this->db->where('users_id', $id);
            $query = $this->db->get();
            return $query->num_rows();
    }
    public function my_vehicles_model_with_limit($to=0,$from=0,$id)
    {
            $this->db->select('*');
            $this->db->from('vehicle');
            $this->db->where('users_id',$id);
            $this->db->order_by('status', 'desc');
            $this->db->limit($to,$from);
            $query = $this->db->get();
            return $query->result();
    }
    public function get_images($id) 
    {
        $this->db->select('*');
        $this->db->from('multipleimg');
        //$this->db->order_by("id", "desc");
        $this->db->where('vehicle_id',$id);
        $query = $this->db->get();
        return $query->result();
    }
    public function get_vehicle($vehicle_id) 
    {
        $this->db->where('vehicle.id',$vehicle_id);
        $this->db->select('vehicle.id as vehicle_id');
        $this->db->select('vehicle.*');        
        $this->db->from('vehicle');
        $this->db->join('accessories','accessories_id=accessories.id');
        $this->db->select('accessories.id as accessories_id');
        $this->db->select('accessories.*');
        //$this->db->order_by("id", "desc");
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result();
    }
    public function delete_vehicle($id)
    {
        $this->db->delete('vehicle',array('id'=>$id));
    }

    public function vehicle_data_with_id($vehicle_id)
    {
        $this->db->where('vehicle.id',$vehicle_id);
        $this->db->select('vehicle.id as vehicle_id');
        $this->db->select('vehicle.*');
        $this->db->from('vehicle');
        $this->db->join('accessories','accessories_id=accessories.id');
        $this->db->select('accessories.id as accessories_id');
        $this->db->select('accessories.*');
        $query = $this->db->get();
            return $query->result();
    }
      public function accessories_id_with_vehicle_id($id)
    {
        $this->db->where('id',$id);
        $this->db->select('accessories_id');
        $this->db->from('vehicle');
        $query = $this->db->get();
        return $query->row();
            
    }
    public function delete_multipic_checklist_m($id)
    {
        $this->db->where_in('id', $id);
        $this->db->delete('multipleimg');
    }



}
?>
