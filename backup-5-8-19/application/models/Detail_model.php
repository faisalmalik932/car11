<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Detail_model extends CI_Model{
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
        //$rowcount = $query->num_rows();
        $query = $this->db->get();
        return $query->result();
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
     public function vehicle_views_with_id($vehicle_id)
    {
        $this->db->where('vehicle.id',$vehicle_id);
        $this->db->set('views', 'views+1',FALSE);
        $this->db->update('vehicle');   
    }
    public function vehicle_related_data()
    {
        $this->db->select('vehicle.id as vehicle_id');
        $this->db->select('vehicle.*');
        $this->db->from('vehicle');
        $this->db->join('accessories','accessories_id=accessories.id');
        $this->db->select('accessories.id as accessories_id');
        $this->db->select('accessories.*');
        $this->db->order_by('vehicle.id', 'DESC');
        $this->db->limit(4);
        $query = $this->db->get();
            return $query->result();
    }
    public function vehicle_multipleimage_with_id($vehicle_id)
    {
        $this->db->select('multipleimages');
        $this->db->from('multipleimg');
        $this->db->where('vehicle_id', $vehicle_id);
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result();   
        //$ret = $query->row();
        //return $ret->multipleimages;
    }
    
}
?>
