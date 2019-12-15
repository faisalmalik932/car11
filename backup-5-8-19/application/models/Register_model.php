<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Register_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
        
    }
    public function register_user($data)
    {
        $this->db->insert('users',$data);
    }       
	
	public function emailchk($data)
	{
		
        $this->db->select('id');
	    $this->db->from('users');
		$this->db->where('email',$data);
		$query = $this->db->get();
        return $query->result();
	}
		
 
}
?>
