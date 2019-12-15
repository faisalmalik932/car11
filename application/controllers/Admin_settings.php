<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_settings extends CI_Controller {

	function __construct()
		{
			  parent::__construct();
			  $this->load->Model('Admin_settings_model');
			
		}
	public function emailsetting()
	{
		
		$this->load->view('admin/settings/emailsetting');
		
	}
	public function gsetting()
	{
		$this->load->view('admin/settings/gsetting');
	}
	public function paysetting()
	{
		$this->load->view('admin/settings/paysetting');
		
	}
	public function stfsetting()
	{
		$this->load->view('admin/settings/stfsetting');
		
	}
	
}