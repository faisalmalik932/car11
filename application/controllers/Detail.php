<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

	function __construct()
		{
			  parent::__construct();
			  $this->load->Model('Home_model');
			  $this->load->Model('Detail_model');
			
			
		}
	public function index_old()
	{
		
		$sdata=$this->session->userdata('user_logged_in');
		$id=$sdata['userid'];
		
		$data['user_data']=$this->Home_model->user_data_with_id($id);
		$this->load->view('common/header', $data);
		//Detail Page Cars
		
		$this->load->view('common/footer');
	}
	public function index()
	{
	$vehicle_id=$this->input->get('vehicle', TRUE);

		$sdata=$this->session->userdata('user_logged_in');
		$id=$sdata['userid'];
		
		$data['user_data']=$this->Home_model->user_data_with_id($id);
		$this->load->view('common/header', $data);
		//Detail Page Cars
		//$vehicle_id=$this->uri->segment(3);
		$cars_data['vehicle_detail']=$this->Detail_model->vehicle_data_with_id($vehicle_id);
		$cars_data['vehicle_related']=$this->Detail_model->vehicle_related_data();

		//$cars_data['vehicle_related']=$this->Detail_model->vehicle_related_data();
		
		$cars_data['vehicle_multipleimg']=$this->Detail_model->vehicle_multipleimage_with_id($vehicle_id);
		
		
		/*if (!empty($img))
		{
			$img=$img[0]->multipleimages;
			print_r($img);
			exit();
			$multiple_images = explode (",", $img);

			$cars_data['vehicle_multipleimg']=$multiple_images;	
			
		}*/
		
		//$cars_data['user_detail']=$this->Detail_model->user_data_with_id($id);
		//$this->Detail_model->vehicle_views_with_id($vehicle_id);

		$this->load->view('detail/detail', $cars_data);
		$this->load->view('common/footer');
	}
	public function vehicle()
	{
		
		$sdata=$this->session->userdata('user_logged_in');
		$id=$sdata['userid'];
		
		$data['user_data']=$this->Home_model->user_data_with_id($id);
		$this->load->view('common/header', $data);
		//Detail Page Cars
		$vehicle_id=$this->uri->segment(3);
		
		$cars_data['vehicle_detail']=$this->Detail_model->vehicle_data_with_id($vehicle_id);
		$cars_data['user_detail']=$this->Detail_model->user_data_with_id($id);
		$this->Detail_model->vehicle_views_with_id($vehicle_id);

		$this->load->view('detail/detail', $cars_data);
		$this->load->view('common/footer');
	}

}