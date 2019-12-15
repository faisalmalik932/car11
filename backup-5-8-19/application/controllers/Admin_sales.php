<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_sales extends CI_Controller {

	function __construct()
		{
			  parent::__construct();
			  $this->load->Model('Admin_sales_model');
			
			
		}
	public function invoice()
	{
		
		$this->load->view('admin/sales/invoice');
	
	}
	public function invoices()
	{
		
		$this->load->view('admin/sales/invoices');
	
	}
	public function nquote()
	{
		
		$this->load->view('admin/sales/nquote');
	
	}
	public function nrecurring()
	{
		
		$this->load->view('admin/sales/nrecurring');
	
	}
	public function payment()
	{
		
		$this->load->view('admin/sales/payment');
	
	}
	public function quote()
	{
		
		$this->load->view('admin/sales/quote');
	
	}
	public function recurring()
	{
		
		$this->load->view('admin/sales/recurring');
	
	}
		public function taxeport()
	{
		
		$this->load->view('admin/sales/taxeport');
	
	}
}