<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Admin_blogs_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
	
     public function brands_data_with_id($id)
    {
        $this->db->where('id',$id);
        $this->db->select('*');
        $this->db->from('brands');
        $query = $this->db->get();
        return $query->result();
    }
     public function submit_blogs($data)
    {
        $this->db->insert('blog',$data);
    }
    public function blogs_data()
    {
        $this->db->select('*');
        $this->db->from('blog');
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
    }
    public function status_model($id,$status)
    {
        $this->db->select('status');
        $this->db->from('blog');
        $this->db->set('status', $status);
        $this->db->where('id', $id);
        $this->db->update('blog');
    }
}
?>
