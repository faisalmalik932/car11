<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_dealers extends CI_Controller {

	function __construct()
		{
			  parent::__construct();
			  $this->load->Model('Admin_dealers_model');
			
		}
	public function add_dealers()
	{
		
		$this->load->view('admin/dealers/add_dealers');
		
	}
	public function block_dealers()
	{
		$this->load->view('admin/dealers/block_dealers');
	}
	public function dealers_list()
	{
		$this->load->view('admin/dealers/dealers_list');
		
	}
	public function remove_dealers()
	{
		$this->load->view('admin/dealers/remove_dealers');
		
	}
	
}