<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_transaction extends CI_Controller {

	function __construct()
		{
			  parent::__construct();
			  $this->load->Model('Home_model');
			  $this->load->Model('Admin_transactions_model');
			
			
		}
	public function balance()
	{
		
		$this->load->view('admin/transections/balance');
		
	}
	public function deposit()
	{
		$this->load->view('admin/transections/deposit');
	}
	public function expense()
	{
		$this->load->view('admin/transections/expense');
		
	}
	public function transfer()
	{
		$this->load->view('admin/transections/transfer');
		
	}
	public function treport()
	{
		$this->load->view('admin/transections/treport');
		
	}
	public function view_tsaction()
	{
		$this->load->view('admin/transections/view_tsaction');
		
	}
	
}