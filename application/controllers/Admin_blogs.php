<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_blogs extends CI_Controller {

	function __construct()
		{
			  parent::__construct();
			  $this->load->Model('Home_model');
			  $this->load->library('Crud_custom');
			  $this->load->Model('Admin_blogs_model');
			
			
		}
	public function add_blogs()
	{
		
		$this->load->view('admin/blogs/add_blogs');
		
	}
	public function submit()
	{//brands_data

			$data['title']=$this->input->post('title');
			$data['description']=$this->input->post('description');
			$data['long_description']=$this->input->post('long_description');
			$data['type']=$this->input->post('type');
			$data['pic']=$this->input->post('pic');
			$data['status']=1;
			$url=$data['title'];
			$url=str_replace(" ", "-", $url);
			//$data['url']=$url;
			$data['created']=date("d-m-Y");
			//$data['type']=$this->input->post('type');
			// Upload
			 $config['upload_path'] = './admin_assets/img/blogs';
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
                        $this->Admin_blogs_model->submit_blogs($data);
						redirect(base_url()."admin_blogs/blogs_list");
                    }
	}
	public function edit()
	{
		$id=$this->input->post('id');
	    $data['title']=$this->input->post('title');
		$data['description']=$this->input->post('description');
		$data['long_description']=$this->input->post('long_description');
		$data['type']=$this->input->post('type');
		//$data['pic']=$this->input->post('pic');
		$data['status']=1;
		//$url=$data['title'];	
		//$url=str_replace(" ", "-", $url);
			//$data['url']=$url;
		$data['created']=date("d-m-Y");
		
		$table="blog";
		
		$config['upload_path'] = './admin_assets/img/blogs';
                    $config['allowed_types'] = 'gif|jpg|jpeg|png';
                    $config['max_size']	= '20000';
                    $config['max_width']  = '20240';
                    $config['max_height']  = '17680';
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);

                    if(!$this->upload->do_upload('pic'))
                    {
                         //echo $this->upload->display_errors();
                    	$data['pic']=$this->input->post('old_pic');
						$this->crud_custom->update_data($data,$id,$table);
						redirect(base_url()."admin_blogs/blogs_list");
                        //$this->Vehicle_model->post_model($data);
						//redirect(base_url()."vehicle/my_vehicles");
                    }
                    else
                    {  
                        $abc = array('upload_data' => $this->upload->data());
						$Path=$abc['upload_data']['file_name'];
						$data['pic']=$Path;
                        $this->crud_custom->update_data($data,$id,$table);
						redirect(base_url()."admin_blogs/blogs_list");
                    }

	}
	public function block_brands()
	{
		$id=$this->uri->segment(3);
		$table='blog';
		$this->crud_custom->delete_data($id,$table);
		//$this->Admin_blog_model->delete_blog($id);	
		redirect(base_url()."admin_blogs/blogs_list");
	}
	public function blogs_list()
	{
		$data['blogs_data']=$this->Admin_blogs_model->blogs_data();
		$this->load->view('admin/blogs/blogs_list',$data);
	}
	public function remove_brands()
	{
		$this->load->view('admin/brands/remove_brands');
	}
	public function status()
	{
		$id=$this->uri->segment(3);
		$status=$this->uri->segment(4);
		$this->Admin_blogs_model->status_model($id,$status);	
		redirect(base_url()."admin_blogs/blogs_list");
	}
	
}