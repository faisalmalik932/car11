<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_brands extends CI_Controller {

	function __construct()
		{
			  parent::__construct();
			  $this->load->Model('Home_model');
			  $this->load->library('Crud_custom');
			  $this->load->Model('Admin_brands_model');
			
			
		}
	public function add_brands()
	{
		
		$this->load->view('admin/brands/add_brands');
		
	}
	public function submit()
	{//brands_data

			$data['name']=$this->input->post('name');
			$data['email']=$this->input->post('email');
			$data['type']=$this->input->post('type');
			$data['pic']=$this->input->post('pic');
			$data['status']=1;
			$url=$data['name'];
			$url=str_replace(" ", "-", $url);
			//$data['url']=$url;
			$data['create_date']=date("d-m-Y");
			//$data['type']=$this->input->post('type');
			// Upload
			 $config['upload_path'] = './admin_assets/img/brands';
                    $config['allowed_types'] = 'gif|jpg|jpeg|png';
                    $config['max_size']	= '20000';
                    $config['max_width']  = '20240';
                    $config['max_height']  = '17680';
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);

                    if(!$this->upload->do_upload('pic'))
                    {
                         echo $this->upload->display_errors();
						
                        //$this->Vehicle_model->post_model($data);
						//redirect(base_url()."vehicle/my_vehicles");
                    }
                    else
                    {   
                        $abc = array('upload_data' => $this->upload->data());
						$Path=$abc['upload_data']['file_name'];
						$data['pic']=$Path;
                        $this->Admin_brands_model->submit_brands($data);
						redirect(base_url()."admin_brands/brands_list");
                    }
	}
	public function edit()
	{
		$data['id']=$this->input->post('id');
		$id=$data['id'];
		$data['name']=$this->input->post('name');
		$data['email']=$this->input->post('email');
		$data['type']=$this->input->post('type');
		//$data['pic']=$this->input->post('pic');
		$data['status']=1;
		$url=$data['name'];
		$url=str_replace(" ", "-", $url);
			//$data['url']=$url;
		$data['create_date']=date("d-m-Y");
		$table="brands";
		
		$config['upload_path'] = './admin_assets/img/brands';
                    $config['allowed_types'] = 'gif|jpg|jpeg|png';
                    $config['max_size']	= '20000';
                    $config['max_width']  = '20240';
                    $config['max_height']  = '17680';
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);

                    if(!$this->upload->do_upload('pic'))
                    {
                         //echo $this->upload->display_errors();
                    	
                    	//print_r($data['pic']);
                    	//exit();
						$this->crud_custom->update_data($data,$id,$table);
						redirect(base_url()."admin_brands/brands_list");
                        //$this->Vehicle_model->post_model($data);
						//redirect(base_url()."vehicle/my_vehicles");
                    }
                    else
                    {  
                        $abc = array('upload_data' => $this->upload->data());
						$Path=$abc['upload_data']['file_name'];
						$data['pic']=$Path;
                        $this->crud_custom->update_data($data,$id,$table);
						redirect(base_url()."admin_brands/brands_list");
                    }

	}
	public function block_brands()
	{
		$id=$this->uri->segment(3);
		$table='brands';
		$this->crud_custom->delete_data($id,$table);
		//$this->Admin_blog_model->delete_blog($id);	
		redirect(base_url()."admin_brands/brands_list");
	}
	public function brands_list()
	{
		$data['brands_data']=$this->Admin_brands_model->brands_data();
		$this->load->view('admin/brands/brands_list',$data);
	}
	public function remove_brands()
	{
		$this->load->view('admin/brands/remove_brands');
	}
	public function status()
	{
		$id=$this->uri->segment(3);
		$status=$this->uri->segment(4);
		$this->Admin_brands_model->status_model($id,$status);	
		redirect(base_url()."admin_brands/brands_list");
	}
	
}