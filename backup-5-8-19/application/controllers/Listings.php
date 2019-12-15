<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listings extends CI_Controller {

	function __construct()
		{
			  parent::__construct();
			  $this->load->Model('Listings_model');
			  $this->load->Model('Home_model');
			
			
		}
	public function index()
	{
		$sdata=$this->session->userdata('user_logged_in');
		$id=$sdata['userid'];
		
		$data['user_data']=$this->Home_model->user_data_with_id($id);
		$this->load->view('common/header', $data);

		$type=$this->uri->segment(2);
		//$cars_data['recent_listings']=$this->Listings_model->listing_cars($type);
		//

        $pagination_data=$this->Listings_model->count($type);
                $count=$pagination_data;
                $vdata['count']=$count;
                $this->load->library('pagination');
                $config['base_url'] = base_url().'listings/'.$type;
                $config['total_rows'] = $count;
                $config['per_page'] = 5;
                $config['first_link'] = false;
                $config['last_link'] = false;
                //$config['prev_link'] = 'First';
                //$config['next_link'] = 'Last';
                $config['next_tag_open'] = '<li>';
                $config['next_tag_close'] = '</li>';
                $config['prev_tag_open'] = '<li>';
                $config['prev_tag_close'] = '</li>';
                $config['cur_tag_open'] = '&nbsp;<li class="current">';
                $config['cur_tag_close'] = '</li>';
                $config['num_tag_open'] = '<li>';
    			$config['num_tag_close'] = '</li>';
                $this->pagination->initialize($config);
                $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
                $comp=$this->Listings_model->listing_cars_with_limit($config['per_page'],$page,$type);
                $cars_data['recent_listings'] = $comp;
                $cars_data['links'] = $this->pagination->create_links();
                
		//
		$this->load->view('listings/listing', $cars_data);
		$this->load->view('common/footer');
	}
     
   
}