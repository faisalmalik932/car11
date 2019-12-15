<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Profile_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
	
    public function profile_update_model($id,$data)
    {
       $this->db->where('id', $id);
        return $this->db->update('users', $data);
    }
    
}
?>
