<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	function __construct()
		{
			  parent::__construct();
			  $this->load->Model('Search_model');
        $this->load->Model('Search_model_2');
			  $this->load->Model('Home_model');
        $this->load->Model('Listings_model');
			
			
		}
	public function index()
	{
    $search_term=$this->input->post('search_term');
        //echo $search_term;
        //exit();
		$sdata=$this->session->userdata('user_logged_in');
		$id=$sdata['userid'];
        
		$data['user_data']=$this->Home_model->user_data_with_id($id);
		$this->load->view('common/header', $data);
		//$type=$this->uri->segment(2);
		$cars_data['recent_listings']=$this->Search_model->search_cars($search_term);
		//

       //  $pagination_data=$this->Search_model->count($search_term);
       //          $count=$pagination_data;
       //          $vdata['count']=$count;
       //          $this->load->library('pagination');
       //          $config['base_url'] = base_url().'search/'.$search_term;
       //          $config['total_rows'] = $count;
       //          $config['per_page'] = 5;
       //          $config['first_link'] = false;
       //          $config['last_link'] = false;
       //          //$config['prev_link'] = 'First';
       //          //$config['next_link'] = 'Last';
       //          $config['next_tag_open'] = '<li>';
       //          $config['next_tag_close'] = '</li>';
       //          $config['prev_tag_open'] = '<li>';
       //          $config['prev_tag_close'] = '</li>';
       //          $config['cur_tag_open'] = '&nbsp;<li class="current">';
       //          $config['cur_tag_close'] = '</li>';
       //          $config['num_tag_open'] = '<li>';
    			// $config['num_tag_close'] = '</li>';
       //          $this->pagination->initialize($config);
       //          $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
       //          $comp=$this->Search_model->listing_cars_with_limit($config['per_page'],$page,$search_term);
       //          $cars_data['recent_listings'] = $comp;
       //          $cars_data['links'] = $this->pagination->create_links();
                
		//
		$this->load->view('search/search_view', $cars_data);
		$this->load->view('common/footer');
	}
   
    public function find()
    {
        
        // $sdata=$this->session->userdata('user_logged_in');
        // $id=$sdata['userid'];
        // $data['user_data']=$this->Home_model->user_data_with_id($id);
        // $this->load->view('common/header', $data);

        $search_term['location']=$this->input->post('location');
        $search_term['zipcode']=$this->input->post('zipcode');
        $search_term['brand']=$this->input->post('brand');
        $search_term['model']=$this->input->post('model');
        $search_term['model_year']=$this->input->post('model_year');
        $search_term['price']=$this->input->post('price');
        $search_term['type']=$this->input->post('type');
       // $search_term['model']=$this->input->post('model');
       // $search_term['price']=$this->input->post('price');
         // $search_term['zipcode']=$this->input->post('zipcode');
       


       //echo $search_term['zipcode']."</br>";
        //echo $search_term['price']."</br>";
        // echo $search_term['type_car']."</br>";
        // echo $search_term['year']."</br>";
        // echo $search_term['type_model']."</br>";
        // echo "hello i am here";
        //$this->load->view('search/search',$data);
        //$this->load->view('common/footer');
    

    
        //echo $search_term;
    
        $sdata=$this->session->userdata('user_logged_in');
        $id=$sdata['userid'];
        
        
        $data['user_data']=$this->Home_model->user_data_with_id($id);
      
        $this->load->view('common/header', $data);

        //$type=$this->uri->segment(2);
        $cars_data['recent_listings']=$this->Search_model_2->test($search_term);
        //

        $pagination_data=4;
                $count=$pagination_data;
                $vdata['count']=$count;
                $this->load->library('pagination');
                $config['base_url'] = base_url().'search/';
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
                $comp=$this->Search_model_2->listing_cars_with_limit_test($config['per_page'],$page,$search_term);
                $cars_data['recent_listings'] = $comp;
                $cars_data['links'] = $this->pagination->create_links();
                
        //
        $this->load->view('search/search', $cars_data);
        $this->load->view('common/footer');
    }
    public function search_result()
    {
        $search_term['location']=$this->input->post('location');
        $search_term['zipcode']=$this->input->post('zipcode');
        $search_term['brand']=$this->input->post('brand');
        $search_term['model']=$this->input->post('model');
        $search_term['model_year']=$this->input->post('model_year');
        $search_term['price']=$this->input->post('price');
        
        $price1=explode(',', $search_term['price']=$this->input->post('price'));
        
        $search_term['type']=$this->input->post('type');

        $sdata=$this->session->userdata('user_logged_in');
        $id=$sdata['userid'];
        $data['user_data']=$this->Home_model->user_data_with_id($id);
        $this->load->view('common/header', $data);
        //$type=$this->uri->segment(2);
        $cars_data['recent_listings']=$this->Search_model_2->search_test_model($search_term,$price1);
        //print_r($cars_data['recent_listings']);
         //exit();
        $this->load->view('search/search_view', $cars_data);
        $this->load->view('common/footer');
    }

      public function cars_stats()
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

      $this->load->view('dummy',$cars_data);
      $this->load->view('common/footer');
    }

}