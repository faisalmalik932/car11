<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_users extends Auth_Controller {

	function __construct()
		{
			  parent::__construct();
			  $this->load->helper(array('form', 'url'));
			  $this->load->Model('Home_model');
			  $this->load->library('Crud_custom');
			  $this->load->Model('Admin_users_model');
			
			
		}

        public function add_users()  //add_buyers()
    {
        
        $this->load->view('admin/users/add_users');
        
    }

    public function insert()
    {
        $data['name'] = $this->input->post('name');
        $data['email'] = $this->input->post('email');
        $data['location'] = $this->input->post('location');
        $data['phone_no'] = $this->input->post('phone_no');
        $data['pic']=$this->input->post('pic');

                if ($_FILES['pic']['error'] != 4 ) 
                { 
                    $config['upload_path'] = './frontend/users/';
                    $config['allowed_types'] = 'gif|jpg|png|jpeg';
                    $config['max_size'] = '20000';
                    $config['max_width']  = '20240';
                    $config['max_height']  = '17680';
                    $config['encrypt_name'] = TRUE;
                    $config['file_ext_tolower'] = TRUE;
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);

                        if(!$this->upload->do_upload('pic'))
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
                            $data['pic']=$Path;
                            
                        }
                }

            $this->Admin_users_model->create_users($data);
            redirect(base_url('admin_users/users_list'));
    }

	public function edit()
    {
        $data['id']=$this->input->post('id');
        $id=$data['id'];
        $data['name']=$this->input->post('name');
        //$data['email']=$this->input->post('email');
        $data['phone_no']=$this->input->post('phone_no');
        $data['location']=$this->input->post('location');
        $data['pic']=$this->input->post('pic');
    
        $url=str_replace(" ", "-", $url);
       
        $table="users";



         $config['upload_path'] = './frontend/users/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = '20000';
            $config['max_width']  = '20240';
            $config['max_height']  = '17680';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
   
            if(!$this->upload->do_upload('pic_newu'))
            {
                
                    	$data['pic']=$this->input->post('old_picu');
                    
						$this->crud_custom->update_data($data,$id,$table);
						redirect(base_url()."admin_users/users_list");
              
            }
            else
            {  
                $abc = array('upload_data' => $this->upload->data());
                $Path=$abc['upload_data']['file_name'];
                $data['pic']=$Path;
                $this->crud_custom->update_data($data,$id,$table);
                redirect(base_url()."admin_users/users_list");
            }
            
    }	

	public function users_list()  //add_buyers() // show Testimonials
	{
		$data['users'] = $this->Admin_users_model->get_users();
		$this->load->view('admin/users/users_list',$data);
	}
	
   
    public function delete_row($id) {   
    $id=$this->uri->segment(3);
		//$accessories_id=$accessories_id->accessories_id;
		$this->Admin_users_model->delete_users($id);	
		//redirect(base_url()."vehicle/my_vehicles");;
		redirect('admin_users/users_list');

    }
	
}