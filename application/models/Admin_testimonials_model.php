<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Admin_testimonials_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

     public function create_testimonials($data) 
    {
        $this->db->insert('testimonials', $data);
    }
    public function get_testimonials_1() 
    {
        $this->db->select('*');
        $this->db->from('testimonials');/*
        $this->db->order_by("name", "asc");*/
        $query = $this->db->get();
        return $query->result();
    }
     /*function delete($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('testimonials');
    }
    public function did_delete_row($id){
  $this -> db -> where('user_id', $id);
  $this -> db -> delete('users');
}*/
    public function delete_testimonial($id)
    {
        $this->db->delete('testimonials',array('id'=>$id));
    }
    
}
?>
    
 