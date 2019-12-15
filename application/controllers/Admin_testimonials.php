<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_testimonials extends Auth_Controller {

	function __construct()
		{
			  parent::__construct();
			  $this->load->helper(array('form', 'url'));
			  $this->load->Model('Home_model');
			  $this->load->library('Crud_custom');
			  $this->load->Model('Admin_testimonials_model');
			
			
		}
	public function insert()
	{
		$data['name'] = $this->input->post('name');
		$data['designation'] = $this->input->post('designation');
		$data['message'] = $this->input->post('message');
		$data['image']=$this->input->post('image');

                if ($_FILES['image']['error'] != 4 ) 
                { 
                    $config['upload_path'] = './frontend/testimonials/';
                    $config['allowed_types'] = 'gif|jpg|png|jpeg';
                    $config['max_size'] = '20000';
                    $config['max_width']  = '20240';
                    $config['max_height']  = '17680';
                    $config['encrypt_name'] = TRUE;
                    $config['file_ext_tolower'] = TRUE;
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);

                        if(!$this->upload->do_upload('image'))
                        {
                             echo $this->upload->display_errors();
                        }
                        else
                        {   

                            $this->load->library('image_lib');
                            $image_data=$this->upload->data();

                            $configer =  array(
                              'image_library'   => 'gd2',
                              'maintain_ratio'   => TRUE,
                              'quality'   => '100%',
                              'source_image'    =>  $image_data['full_path'],
                              'maintain_ratio'  =>  FALSE,
                              'width'           =>  300,
                              'height'          =>  300,
                            );
                            $this->image_lib->clear();
                            $this->image_lib->initialize($configer);
                            $this->image_lib->resize();

                            $abc = array('upload_data' => $this->upload->data());
                            $Path=$abc['upload_data']['file_name'];
                            $data['image']=$Path;
                            
                        }
                }

            $this->Admin_testimonials_model->create_testimonials($data);
            redirect(base_url('admin_testimonials/testimonials_list'));
	}
	public function add_testimonials()  //add_buyers()
	{
		
		$this->load->view('admin/testimonials/add_testimonials');
		
	}
	public function testimonials_list()  //add_buyers() // show Testimonials
	{
		$data['records'] = $this->Admin_testimonials_model->get_testimonials_1();
		$this->load->view('admin/testimonials/testimonials_list',$data);
	}
	/*public function delete()  //Delete
	{
		$data['records'] = $this->Admin_testimonials_model->get_testimonials_1();
		$this->load->view('admin/Testimonials/testimonials_list',$data);
	}*/
	    
	/*function del()
    {
        $id =   $this->uri->segment(3);
        $this->Admin_testimonials_model->delete($id);
        redirect('home/index');
    }*/
    public function edit()
    {
        $data['id']=$this->input->post('id');
        $id=$data['id'];
        $data['name']=$this->input->post('name');
        $data['message']=$this->input->post('message');
        $data['designation']=$this->input->post('designation');
        //$data['type']=$this->input->post('type');
        $data['image']=$this->input->post('image');
        //$data['status']=1;
        $url=$data['name'];
        $url=str_replace(" ", "-", $url);
            //$data['url']=$url;
        //$data['create_date']=date("d-m-Y");
        $table="testimonials";


         $config['upload_path'] = './frontend/testimonials/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = '20000';
            $config['max_width']  = '20240';
            $config['max_height']  = '17680';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
           
        
            if(!$this->upload->do_upload('image_new'))
            {
               
                    	$data['image']=$this->input->post('old_image');
                    
						$this->crud_custom->update_data($data,$id,$table);
						redirect(base_url()."admin_testimonials/testimonials_list");
                                  
            }
            else
            {  
                $abc = array('upload_data' => $this->upload->data());
                $Path=$abc['upload_data']['file_name'];
                $data['image']=$Path;
                $this->crud_custom->update_data($data,$id,$table);
                redirect(base_url()."admin_testimonials/testimonials_list");
            }
            
    }
    public function delete_row($id) {   
    $id=$this->uri->segment(3);
		//$accessories_id=$accessories_id->accessories_id;
		$this->Admin_testimonials_model->delete_testimonial($id);	
		//redirect(base_url()."vehicle/my_vehicles");;
		redirect('admin_testimonials/testimonials_list');

    }
	
}