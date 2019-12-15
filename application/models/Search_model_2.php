<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Search_model_2 extends CI_Model{
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
    
        $this->db->where('vehicle.brand',$search_term['brand']);
        $this->db->or_where('vehicle.brand',$search_term['location']);
        $this->db->or_where('vehicle.brand',$search_term['zipcode']);
        $this->db->or_where('vehicle.brand',$search_term['type_car']);
        $this->db->or_where('vehicle.model',$search_term['model']);
        
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
        

        //$this->db->Like('vehicle.type',$type);
        $this->db->where('vehicle.brand','search_term');
        $this->db->or_where('vehicle.model_year','search_term');
        $this->db->or_where('vehicle.model','search_term');
        $this->db->or_where('users.location','search_term');
        $this->db->or_where('vehicle.price','search_term');
        //$this->db->or_like('vehicle.brand',$search_term);
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
     public function listing_cars_with_limit_2($to=0,$from=0,$search_term)
    {
        $this->db->where('vehicle.brand',$search_term['brand']);
        $this->db->or_where('users.location',$search_term['location']);
        $this->db->or_where('vehicle.price',$search_term['price']);
       // $this->db->or_where('vehicle.zipcode',$search_term['zipcode']);
        $this->db->or_where('vehicle.type',$search_term['type_car']);
        $this->db->or_where('vehicle.model',$search_term['model']);
        $this->db->or_where('vehicle.model_year',$search_term['year']);
      
        $this->db->select('users.id as users_id');
        $this->db->select('users.*');
        $this->db->from('users');
        $this->db->join('vehicle','users_id=users.id');
        $this->db->select('vehicle.id as vehicle_id');
        $this->db->select('vehicle.*');
        $this->db->limit($to,$from);
        //$this->db->limit(2);
        $query = $this->db->get();
            return $query->result();
    }
    public function test($search_term)
    {   
        
  
        //$this->db->Like('vehicle.type',$type);
        $this->db->where('users.location','search_term');
        $this->db->or_where('users.zipcode','search_term');
        $this->db->or_where('vehicle.brand','search_term');
        $this->db->or_where('vehicle.model','search_term');
        $this->db->or_where('vehicle.model_year','search_term');
        $this->db->or_where('vehicle.price','search_term');
        $this->db->or_where('vehicle.type','search_term');
        $this->db->select('users.id as users_id');
        $this->db->select('users.*');
        $this->db->from('users');
        $this->db->join('vehicle','users_id=users.id');
        $this->db->select('vehicle.id as vehicle_id');
        $this->db->select('vehicle.*');
        //$this->db->limit(2);
        $query = $this->db->get();
            return $query->result();
    }

    public function search_test_model($search_term,$price1)
    {   
        
       
        //$this->db->Like('vehicle.type',$type);
        //$this->db->where('users.id=',46);
        $this->db->where('users.location=',$search_term['location']);
        $this->db->where('users.zipcode=',$search_term['zipcode']);
        $this->db->where('vehicle.brand=',$search_term['brand']);
        $this->db->where('vehicle.model=',$search_term['model']);
        $this->db->where('vehicle.model_year=',$search_term['model_year']);
        //$this->db->where('vehicle.price=',$search_term['price']);
        //$this->db->where('vehicle.type=',$search_term['type']);
        $this->db->where('vehicle.price >=', $price1[0]);
        $this->db->where('vehicle.price <=', $price1[1]);
       // exit();
        
        $this->db->select('users.id as users_id');
        $this->db->select('users.id,users.location,users.zipcode');
        $this->db->from('users');
        $this->db->join('vehicle','users_id=users.id');
        $this->db->select('vehicle.id as vehicle_id');
        $this->db->select('vehicle.*');
        //$this->db->limit(1);
        $query = $this->db->get();
        $result= $query->result();
        // print_r($result);
        // exit();
        return $result;
    }
  
     public function listing_cars_with_limit_test($to=0,$from=0,$search_term)
    {
        $this->db->where('users.location',$search_term['location']);
        $this->db->or_where('users.zipcode',$search_term['zipcode']);
        $this->db->or_where('vehicle.brand',$search_term['brand']);
        $this->db->or_where('vehicle.model',$search_term['model']);
        $this->db->or_where('vehicle.model_year',$search_term['model_year']);
        $this->db->or_where('vehicle.price',$search_term['price']);
        $this->db->or_where('vehicle.type',$search_term['type']);

        $this->db->select('users.id as users_id');
        $this->db->select('users.*');
        $this->db->from('users');
        $this->db->join('vehicle','users_id=users.id');
        $this->db->select('vehicle.id as vehicle_id');
        $this->db->select('vehicle.*');
        $this->db->limit($to,$from);
        //$this->db->limit(2);
        $query = $this->db->get();
            return $query->result();
    }
}
?>
