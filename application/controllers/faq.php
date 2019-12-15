<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class faq extends CI_Controller {

	function __construct()
		{
			  parent::__construct();
			  $this->load->Model('Home_model');
			
			
		}
	public function index()
	{
	
		$sdata=$this->session->userdata('user_logged_in');
		$id=$sdata['userid'];
		
		$data['user_data']=$this->Home_model->user_data_with_id($id);
		$this->load->view('common/header', $data);
		//Recent New And Used Cars
		$cars_data['recent_new']=$this->Home_model->recent_cars('newcar');
		$cars_data['recent_used']=$this->Home_model->recent_cars('usedcar');
		$cars_data['recent_classic']=$this->Home_model->recent_cars('classiccar');
		$cars_data['recent_rvs']=$this->Home_model->recent_cars('rvscar');
		$cars_data['recent_truck']=$this->Home_model->recent_cars('truck');
		$cars_data['recent_motorcycle']=$this->Home_model->recent_cars('motorcycle');
		$cars_data['recent_featured']=$this->Home_model->recent_featured();
		//$this->load->view('index',$cars_data);
		
		$this->load->view('faq/faq',$cars_data);
		$this->load->view('common/footer');
	}

}