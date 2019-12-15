<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Compare_test extends CI_Controller {

	function __construct()
		{
			  parent::__construct();
			  $this->load->Model('Home_model');
			  $this->load->Model('Compare_model');
			  $this->load->helper('form');

		}
	public function index()
	{
		$sdata=$this->session->userdata('user_logged_in');
		$id=$sdata['userid'];
		$data['user_data']=$this->Home_model->user_data_with_id($id);
		$this->load->view('common/header', $data);
		
		$this->load->view('compare/compare_test');


		$this->load->view('common/footer');
	}

public function my_compare()

	{
	$data['vehicles']= $this->Compare_model->my_compare_model();
  $this->load->view('compare/compare_test',$data);
		
	}


}
?>