<?php

if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Contact_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function submited($data)
    {
        $this->db->insert('contact_us',$data);
    }
    public function insert_m($data) 
    {
        $this->db->insert('contact', $data);
    }
}