<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Search_model extends CI_Model{
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
    public function get_results($search_term='default')
    {
        // Use the Active Record class for safer queries.
        $this->db->select('brand,discription,model');
        $this->db->from('vehicle');
        $this->db->where('brand',$search_term);
        $this->db->or_where('discription',$search_term);
        $this->db->or_where('model',$search_term);

        // Execute the query.
        $query = $this->db->get();

        // Return the results.
        return $query->result_array();
    }
    public function count($id)
    {
            $this->db->select('id');
            $this->db->from('vehicle');
            $this->db->where('users_id', $id);
            $query = $this->db->get();
            return $query->num_rows();
    }
    public function listing_cars_with_limit($to=0,$from=0,$search_term)
    {
        
        $this->db->where('vehicle.brand',$search_term);
        $this->db->or_where('vehicle.type',$search_term);
        $this->db->or_where('vehicle.title',$search_term);
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
    public function search_cars($search_term)
    {   
        

        $this->db->Like('vehicle.type',$search_term);
        $this->db->or_like('vehicle.title',$search_term);
        $this->db->or_like('vehicle.model',$search_term);
        $this->db->or_like('vehicle.fuel_type',$search_term);
        $this->db->or_like('vehicle.engien_type',$search_term);
        $this->db->or_like('vehicle.engine_disc',$search_term);
        $this->db->or_like('vehicle.discription',$search_term);
        //$this->db->Like('vehicle.brand','bmw');
        $this->db->or_like('vehicle.brand',$search_term);
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
  
}
?>
