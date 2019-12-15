<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_buyers extends CI_Controller {

	function __construct()
		{
			  parent::__construct();
			  $this->load->Model('Home_model');
			  $this->load->Model('Admin_buyers_model');
			
			
		}
	public function add_buyers()
	{
		
		$this->load->view('admin/buyers/add_buyers');
		
	}
	public function block_buyers()
	{
		$this->load->view('admin/buyers/block_buyers');
	}
	public function buyers_list()
	{
		$this->load->view('admin/buyers/buyers_list');
		
	}
	public function remove_buyers()
	{
		$this->load->view('admin/buyers/remove_buyers');
		
	}
	
}