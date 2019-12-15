<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	function __construct()
		{
			  parent::__construct();
			  $this->load->Model('Home_model');
			  $this->load->Model('Profile_model');
			if(!$this->session->userdata('user_logged_in'))
		    {
			    redirect(base_url());
		    }
		}
	public function index()
	{
		
		$sdata=$this->session->userdata('user_logged_in');
		$id=$sdata['userid'];
		
		$data['user_data']=$this->Home_model->user_data_with_id($id);
		$this->load->view('common/header', $data);
		$this->load->view('user_profile/profile_settings', $data);
		$this->load->view('common/footer');
	}

	public function profile_update()
	{
		$data['name']=$this->input->post('name');
		$data['phone_no']=$this->input->post('phone_no');
		$data['dob']=$this->input->post('dob');
		$data['address']=$this->input->post('address');
		$data['country']=$this->input->post('country');
		$data['city']=$this->input->post('city');
		$data['password']=md5($this->input->post('password'));
		$data['fb_id']=$this->input->post('fb_id');
		$data['twitter_id']=$this->input->post('twitter_id');
		$data['linkedin_id']=$this->input->post('linkedin_id');
		$data['gplus_id']=$this->input->post('gplus_id');
		$data['name']=$this->input->post('name');
		$sdata=$this->session->userdata('user_logged_in');
		$id=$sdata['userid'];
		$this->Profile_model->profile_update_model($id,$data);
		redirect(base_url()."profile");

	}
}