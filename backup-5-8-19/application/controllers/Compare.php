<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Compare extends CI_Controller {

	function __construct()
		{
			  parent::__construct();
			  $this->load->Model('Home_model');
			  $this->load->Model('Compare_model');
			  $this->load->helper('form');

		}
	public function index()
	{
		//get clicked checkbox value
 		$var=$_POST['compare_checkbox_value'];
		$old_val = $this->session->userdata('compare_checkbox_value');
		//append new value to array
		$old_val[]=$var;
		$new_vid = array_unique($old_val);
		//place it back to session
		$this->session->set_userdata('compare_checkbox_value', $new_vid);
		$sdata=$this->session->userdata('user_logged_in');
		$id=$sdata['userid'];
		$data['user_data']=$this->Home_model->user_data_with_id($id);
		$this->load->view('common/header', $data);
		$data['vehicles']= $this->Compare_model->my_compare_model_with_session_values($new_vid);
		$this->load->view('compare/compare_vehicle', $data);
	}
	public function compare_with_session()
	{
		$sdata=$this->session->userdata('user_logged_in');
		$id=$sdata['userid'];
		$data['user_data']=$this->Home_model->user_data_with_id($id);
		$this->load->view('common/header', $data);
		
		//pass vehicles id from session
		$data['vehicles']= $this->Compare_model->my_compare_model();

		$this->load->view('compare/compare_vehicle', $data);
		
		//$data['vehicles_acc']= $this->Compare_model->vehicle_acc();						
		//$this->load->view('compare/compare_vehicle', $data);
	
		$this->load->view('common/footer');
		
	}
	
}
?>