<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
		{
			  parent::__construct();
			  $this->load->Model('Home_model');
			  $this->load->Model('Detail_model');
			
			
		}
	public function index()
	{
		$sdata=$this->session->userdata('user_logged_in');
		$id=$sdata['userid'];
		$data['user_data']=$this->Home_model->user_data_with_id($id);
		$data['brands_data']=$this->Home_model->brands_data();
		$this->load->view('common/header',$data);
		//Recent New And Used Cars
		$cars_data['recent_new']=$this->Home_model->recent_cars('newcar');
		$cars_data['recent_used']=$this->Home_model->recent_cars('usedcar');
		$cars_data['recent_classic']=$this->Home_model->recent_cars('classiccar');
		$cars_data['recent_rvs']=$this->Home_model->recent_cars('rvscar');
		$cars_data['recent_truck']=$this->Home_model->recent_cars('truck');
		$cars_data['recent_motorcycle']=$this->Home_model->recent_cars('motorcycle');
		$cars_data['recent_featured']=$this->Home_model->recent_featured();

		$cars_data['trending_vechicle']=$this->Home_model->trending_vechicle();
		
     	$cars_data['usedcar_stat']=$this->Home_model->cars_stats_model_1('usedcar');
     	$cars_data['newcar_stat']=$this->Home_model->cars_stats_model('newcar');
     	
     	$cars_data['data_testinomials']=$this->Home_model->get_testimonials();
     	$cars_data['data_slides']=$this->Home_model->get_slider();


		$this->load->view('index',$cars_data);
		$account_type['account_type']=$this->Home_model->account_types();
		$this->load->view('common/footer',$account_type);
	}
	public function about_us()
	{
		$sdata=$this->session->userdata('user_logged_in');
		$id=$sdata['userid'];
		
		$data['user_data']=$this->Home_model->user_data_with_id($id);
		$this->load->view('common/header',$data);
		//Recent New And Used Cars
		$this->load->view('about_us');
		$this->load->view('common/footer');
	}
    public function cars_stats()
    {
    	//$sdata=$this->session->userdata('user_logged_in');
		//$id=$sdata['userid'];
		
		//$data['user_data']=$this->Home_model->user_data_with_id($id);
		//$this->load->view('common/header', $data);
    	$usedcar=$this->db->Home_model->cars_stats_model();
    	$newcar=$this->db->Home_model->cars_stats_model();

    	echo $usedcar;
    	exit();
    	//$this->load->view('dummy',$usedcar,$newcar);
		//$this->load->view('common/footer');
    }

}