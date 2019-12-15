<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_orders extends Auth_Controller {

	function __construct()
		{
			  parent::__construct();
			  $this->load->helper(array('form', 'url'));
			  $this->load->Model('Home_model');
			  $this->load->Model('Admin_orders_model');
			
			
		}
public function insert()
	{
		$data['name'] = $this->input->post('name');
		$data['email'] = $this->input->post('email');
		$data['phone']=$this->input->post('phone');
		$data['message'] = $this->input->post('message');
		$data['vehicle_id'] = $this->input->post('vehicle_id');
		$data['created_date'] =date('Y-m-d H:i:s');

		$this->Admin_orders_model->create_orders($data);
		echo "Thank you";
            //redirect(base_url('admin_orders/orders_list'));
	}	


public function orders_list()  //add_buyers() // show Testimonials
	{
		$data['orders'] = $this->Admin_orders_model->get_orders();
		$this->load->view('admin/orders/orders_list',$data);
	}
	
   
    public function delete_row($id) {   
    $id=$this->uri->segment(3);
		//$accessories_id=$accessories_id->accessories_id;
		$this->Admin_orders_model->delete_orders($id);	
		//redirect(base_url()."vehicle/my_vehicles");;
		redirect('admin_orders/orders_list');

    }
}