<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_panel extends Auth_Controller {

	function __construct()
		{
			  parent::__construct();
			  $this->load->Model('Detail_model');
			
			
		}
	public function index()
	{
		
		$this->load->view('admin/index');
	
	}
	
}