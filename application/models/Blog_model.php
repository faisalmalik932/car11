<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Blog_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
	
    public function user_data_with_id($id)
    {
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->where('id', $id);
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result();
    }
    public function brands_data()
    {
        $this->db->select('*');
        $this->db->from('brands');
        $this->db->where('status=', 1);
        $query = $this->db->get();
        return $query->result();
    }
   
}
?>
