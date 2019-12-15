<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
		{
			  parent::__construct();
			  $this->load->Model('Login_model');
		}
	public function index()
	{
		$data['email']=$this->input->post('email');
		$data['password']=md5($this->input->post('password'));

		$query=$this->Login_model->login_user($data);
		
		if ($query->num_rows() == 1) 
        {
            
			
			$result = $query->result();
          //  echo $result[0]->Id;
           // print_r($result);
           // exit();
		 	$session_data = array('email' => $result[0]->email,"userid"=>$result[0]->id);
			$this->session->set_userdata('user_logged_in', $session_data);
			redirect(base_url());
			
     	}

     	else 
     	{
     		$this->session->set_flashdata('wrong_email_password', 'Wrong email or password');
        	redirect(base_url());
     		
     	}
		
	}

	public function logout()
    {
        // Removing session data
        $sess_array = array('email' => '','userid'=>'');
        $this->session->unset_userdata('user_logged_in', $sess_array);
        redirect(base_url());
	}
}