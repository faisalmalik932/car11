<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Admin_contact_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
     public function create_contact($data) 
    {
        $this->db->insert('contact', $data);
    }

    public function get_contact() 
    {
        $this->db->select('*');
        $this->db->from('contact');/*
        $this->db->order_by("name", "asc");*/
        $query = $this->db->get();
        return $query->result();
    }
    public function delete_contact($id)
    {
        $this->db->delete('contact',array('id'=>$id));
    }
    
}
?>
    
   