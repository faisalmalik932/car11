<?php

if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Compare_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function my_compare_model()
    {
        $this->db->select('vehicle.id as vehicle_id');
        $this->db->select('vehicle.*');
        $this->db->from('vehicle');
        $this->db->join('accessories', 'accessories_id = accessories.id'); 
        $this->db->select('accessories.id as accessories_id');
        $this->db->select('accessories.*');
        $this->db->limit(3);
        $query = $this->db->get();
        
        return $query->result();
    }
    public function my_compare_model_with_session_values($new_vid)
    {
        $this->db->select('vehicle.id as vehicle_id');
        $this->db->select('vehicle.*');
        $this->db->from('vehicle');
        $this->db->where('vehicle.id',$new_vid[0]);
        if(isset($new_vid[1])){$this->db->or_where('vehicle.id',$new_vid[1]);}
        if(isset($new_vid[2])){$this->db->or_where('vehicle.id',$new_vid[2]);}
        $this->db->join('accessories', 'accessories_id = accessories.id'); 
        $this->db->select('accessories.id as accessories_id');
        $this->db->select('accessories.*');
        $this->db->limit(3);
        $query = $this->db->get();
        
        return $query->result();
    }    
    public function vehicle_acc($vehicle_id)
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
    
    public function my_comapre_model_with_limit($to=0,$from=0,$id)
    {
            $this->db->select('*');
            $this->db->from('vehicle');
            $this->db->where('users_id',$id);
            $this->db->order_by('status', 'desc');
            $this->db->limit($to,$from);
            $query = $this->db->get();
            return $query->result();
    } 

    }
    ?>