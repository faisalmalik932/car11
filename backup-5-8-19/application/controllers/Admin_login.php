<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login extends CI_Controller {

	function __construct()
		{
			  parent::__construct();
			  $this->load->Model('Admin_login_model');
			
			
		}
	public function index()
	{
		
		$this->load->view('admin/login/login');
		
	}
	public function login()
	{
		
		$data['email']=$this->input->post('email');
		$data['password']=md5($this->input->post('password'));

		$query=$this->Admin_login_model->login_admin($data);
		

		if ($query->num_rows() == 1) 
        {
            
			
			$result = $query->result();
          //  echo $result[0]->Id;
           // print_r($result);
           // exit();
		 	$session_data = array('email' => $result[0]->email,"userid"=>$result[0]->id);
			$this->session->set_userdata('admin_logged_in', $session_data);
			redirect(base_url()."admin_panel");
			
     	}

     	else 
     	{
     		$this->session->set_flashdata('admin_wrong_email_password', 'Wrong email or password');     
     		redirect(base_url()."admin_login");
     	}
		
	}
	public function logout()
    {
        // Removing session data
        $sess_array = array('email' => '','userid'=>'');
        $this->session->unset_userdata('admin_logged_in', $sess_array);
        redirect(base_url()."admin_login");
	}

	
	
	
}