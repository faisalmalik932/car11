<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct()
		{
			  parent::__construct();
			  $this->load->Model('Register_model');
		}
	public function index()
	{
	    $data['Firstname']=$this->input->post('Firstname');
        
		$data['Lastname']=$this->input->post('Lastname');
        $data['Email']=$this->input->post('Email');
		$data['password']=md5($this->input->post('password'));
       
		
		//Check Unique User

		$is_unique=$this->Register_model->emailchk($data['email']);
		$count=0;
		foreach($is_unique as $dataemchks)
		{
			$count++;
		}
		if ($count>0) 
		{
			 $this->session->set_flashdata('email_already_exist', 'Email Already Exist Login To Continue');
       		 redirect(base_url());
       		 exit();
		}

		//Register User

        //$this->Register_model->register_user($data);
        //$this->session->set_flashdata('successfully_registered', 'Registration Successful Login To Continue');

        //Email
        $e_name = $data['name'];

		$e_email = $data['email'];
		$body = "\n\nWelcome ".$e_name." You Have Registered Successfully At Auto Sand Wheels. \n\n";
		$sub = 'Auto Sand Wheels';
		$from = 'info@caradvisercorp.com';
		$to = $e_email;
		$to2="nabeelgemini2@gmail.com";
		$header = '-f caradvisercorp@caradvisercorp.com';
		mail($to, $sub, $body, $from, $header);
		mail($to2, $sub, $body, $from, $header);

		redirect(base_url());
	}
}