<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Admin_orders_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
     public function create_orders($data) 
    {
        $this->db->insert('orders', $data);
    }

    public function get_orders() 
    {
        $this->db->select('*');
        $this->db->from('orders');/*
        $this->db->order_by("name", "asc");*/
        $query = $this->db->get();
        return $query->result();
    }
    public function delete_orders($id)
    {
        $this->db->delete('orders',array('id'=>$id));
    }
    
}
?>
    
   