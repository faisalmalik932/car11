<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	function __construct()
		{
			  parent::__construct();
			  $this->load->Model('Home_model');
			  $this->load->Model('Contact_model');
			  $this->load->helper('form');

		}
	public function index()
	{
		$sdata=$this->session->userdata('user_logged_in');
		$id=$sdata['userid'];
		$data['user_data']=$this->Home_model->user_data_with_id($id);
		$this->load->view('common/header', $data);		
		$this->load->view('contact/contact_us');
		$this->load->view('common/footer');
	}
	public function submit()
	{
			 $data['f_name']=$this->input->post('f_name');
			 $data['email']=$this->input->post('email');
			 $data['p_number']=$this->input->post('p_number');
			 $data['msg']=$this->input->post('msg');
			$done= $this->Contact_model->submited($data);
			if($done == '')
			{
	    		redirect(base_url(), 'location');
			}
	}
	public function insert()
	{
		$data['name'] = $this->input->post('name');
		$data['email'] = $this->input->post('email');
		$data['phone']=$this->input->post('phone');
		$data['message'] = $this->input->post('message');
		//$data['vehicle_id'] = $this->input->post('vehicle_id');
		$data['created_date'] =date('Y-m-d H:i:s');

		$this->Contact_model->insert_m($data);
		echo "Thank you";
            //redirect(base_url('admin_orders/orders_list'));
	}	

}
?>