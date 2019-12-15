<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Listings_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
	
    public function user_data_with_id($id)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id', $id);
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result();
    }
    public function listing_cars($type)
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
    public function listing_cars_with_limit($to=0,$from=0,$type)
    {
            $this->db->where('vehicle.type',$type);
        $this->db->select('vehicle.id as vehicle_id');
        $this->db->select('vehicle.*');
        $this->db->from('vehicle');
        $this->db->join('accessories','accessories_id=accessories.id');
        $this->db->select('accessories.id as accessories_id');
        $this->db->select('accessories.*');
        $this->db->limit($to,$from);
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
    public function count($type)
    {
            $this->db->select('id');
            $this->db->from('vehicle');
            $this->db->where('type', $type);
            $query = $this->db->get();
            return $query->num_rows();
    }
    
}
?>
