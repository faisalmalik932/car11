<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends Auth_Controller {

	function __construct()
		{
			  parent::__construct();
			  $this->load->helper(array('form', 'url'));
			  $this->load->Model('Home_model');
			  $this->load->Model('Orders_model');
			
			
		}
	public function insert()
	{
		$data['name'] = $this->input->post('name');
		$data['email'] = $this->input->post('email');
		$data['phone']=$this->input->post('phone');
		$data['message'] = $this->input->post('message');
		$data['vehicle_id'] = $this->input->post('vehicle_id');
		$data['created_date'] =date('Y-m-d H:i:s');

		$this->Orders_model->create_orders($data);
		echo "Thank you";
	}	
}