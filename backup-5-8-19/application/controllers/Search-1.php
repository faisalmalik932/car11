<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	function __construct()
		{
			  parent::__construct();
			  $this->load->helper('form');
			  $this->load->Model('Home_model');
			  $this->load->Model('Search_model');
			
			
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
		public function find()
	{
	

		$data['location']=$this->input->post('location');
		$data['zipcode']=$this->input->post('zipcode');
		$data['type_car']=$this->input->post('type_car');
		$data['year']=$this->input->post('year');
		$data['type_model']=$this->input->post('type_model');
		echo $data['location']."</br>";
		echo $data['zipcode']."</br>";
		echo $data['type_car']."</br>";
		echo $data['year']."</br>";
		echo $data['type_model']."</br>";
		echo "hello i am here";
		//redirect(base_url().'search/listing_classic',$data);
	
		
		redirect(base_url().'search/listing_classic');

		// $this->load->view('listing_classic',$data);
		// exit();
		// //$this->load->view('index',$cars_data);
		
		//$this->load->view('faq/faq',$cars_data);
		$this->load->view('common/footer');
	}

	public function search()
	{

		// echo "i am her"."</br>";
		// $search_term = $this->input->post('search_term');
		//  $this->load->Search_model->;
		// echo $search_term;
		   $search_term = $this->input->post('search_term');
		   echo $search_term;
        // Use a model to retrieve the results.
        $data['results'] = $this->Search_model->get_results($search_term);
        //$data2 = $this->Search_model->get_results($search_term);

        // Pass the results to the view.
        $this->load->view('dummy',$data);
    }
    public function listing_classic()
    {
    	$sdata=$this->session->userdata('user_logged_in');
		$id=$sdata['userid'];
		
		$data['user_data']=$this->Home_model->user_data_with_id($id);
		$this->load->view('common/header', $data);
    	$this->load->view('listing_classic');
    	$this->load->view('common/footer');
    }

	}


