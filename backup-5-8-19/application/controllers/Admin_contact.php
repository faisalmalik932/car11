
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_contact extends Auth_Controller {

	function __construct()
		{
			  parent::__construct();
			  $this->load->helper(array('form', 'url'));
			  $this->load->Model('Home_model');
			  $this->load->library('Crud_custom');
			  $this->load->Model('Admin_contact_model');
			
			
		}
public function insert()
	{
		$data['name'] = $this->input->post('name');
		$data['email'] = $this->input->post('email');
		$data['phone']=$this->input->post('phone');
		$data['message'] = $this->input->post('message');
		//$data['vehicle_id'] = $this->input->post('vehicle_id');
		$data['created_date'] =date('Y-m-d H:i:s');

		$this->Admin_contact_model->create_contact($data);
		echo "Thank you";
            //redirect(base_url('admin_orders/orders_list'));
	}	


public function contact_list()  //add_buyers() // show Testimonials
	{
		$data['contacts'] = $this->Admin_contact_model->get_contact();
		$this->load->view('admin/contact/contact_list',$data);
	}
	
   
    public function delete_row($id) {   
    $id=$this->uri->segment(3);
		//$accessories_id=$accessories_id->accessories_id;
		$this->Admin_contact_model->delete_contact($id);	
		//redirect(base_url()."vehicle/my_vehicles");;
		redirect('admin_contact/contact_list');

    }
}