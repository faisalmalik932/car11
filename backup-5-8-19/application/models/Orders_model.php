<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Orders_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
     public function create_orders($data) 
    {
        $this->db->insert('orders', $data);
    }
}
?>
    
   