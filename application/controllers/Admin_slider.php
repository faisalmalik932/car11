<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_slider extends Auth_Controller {

	function __construct()
		{
			  parent::__construct();
			  $this->load->helper(array('form', 'url'));
			  $this->load->Model('Home_model');
              $this->load->library('Crud_custom');
			  $this->load->Model('Admin_slider_model');
			
			
		}
		public function insert()
	{
		$data['caption1'] = $this->input->post('caption1');
		$data['caption2'] = $this->input->post('caption2');
		$data['background']=$this->input->post('background');
        $data['image1']=$this->input->post('image1');   
        $data['image2']=$this->input->post('image2');

        if (($_FILES['background']['error'] && $_FILES['image1']['error'] && $_FILES['image2']['error']) != 4 ) 
        { 

		            $config['upload_path'] = './frontend/vehicles_slider/';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size']	= '20000';
                    $config['max_width']  = '20240';
                    $config['max_height']  = '17680';
                    $config['encrypt_name'] = TRUE;
                    $config['file_ext_tolower'] = TRUE;
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);

                    if(!$this->upload->do_upload('background'))
                    {
                         echo $this->upload->display_errors();
                    }
                    else
                    {   
                        $this->load->library('image_lib');
                        $image_data=$this->upload->data();

                        $configer =  array(
                          'image_library'   => 'gd2',
                          'quality'   => '100%',
                          'source_image'    =>  $image_data['full_path'],
                          'maintain_ratio'  =>  TRUE,
                          'width'           =>  1400,
                          'height'          =>  600,
                        );
                        $this->image_lib->clear();
                        $this->image_lib->initialize($configer);
                        $this->image_lib->resize();

                        $abc = array('upload_data' => $this->upload->data());
                        $Path=$abc['upload_data']['file_name'];
                        $data['background']=$Path;
                    }
               
                    $config['upload_path'] = './frontend/vehicles_slider/';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size']	= '20000';
                    $config['max_width']  = '20240';
                    $config['max_height']  = '17680';
                    $config['encrypt_name'] = TRUE;
                    $config['file_ext_tolower'] = TRUE;
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);


                    if(!$this->upload->do_upload('image1'))
                    {
                         echo $this->upload->display_errors();
						
                    }
                    else
                    {   
                        $this->load->library('image_lib');
                        $image_data=$this->upload->data();

                        $configer =  array(
                          'image_library'   => 'gd2',
                          'quality'   => '100%',
                          'source_image'    =>  $image_data['full_path'],
                          'maintain_ratio'  =>  TRUE,
                          'width'           =>  700,
                          'height'          =>  500,
                        );
                        $this->image_lib->clear();
                        $this->image_lib->initialize($configer);
                        $this->image_lib->resize();

                        $abc = array('upload_data' => $this->upload->data());
						$Path=$abc['upload_data']['file_name'];
						
						$data['image1']=$Path;
                    }
                
                
                  
                    $config['upload_path'] = './frontend/vehicles_slider/';
                    $config['allowed_types'] = 'gif|jpg|png|jpeg';
                    $config['max_size']	= '20000';
                    $config['max_width']  = '2020';
                    $config['max_height']  = '1760';
                    $config['encrypt_name'] = TRUE;
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);

                    if(!$this->upload->do_upload('image2'))
                    {
                         echo $this->upload->display_errors();
						
                    }
                    else
                    {   
                        $this->load->library('image_lib');
                        $image_data=$this->upload->data();

                        $configer =  array(
                          'image_library'   => 'gd2',
                          'quality'   => '100%',
                          'source_image'    =>  $image_data['full_path'],
                          'width'           =>  350,
                          'height'          =>  200,
                        );
                        $this->image_lib->clear();
                        $this->image_lib->initialize($configer);
                        $this->image_lib->resize();


                        $abc = array('upload_data' => $this->upload->data());
						$Path=$abc['upload_data']['file_name'];
						
						$data['image2']=$Path;
                    }
                }
                    $this->Admin_slider_model->create_slider($data);
                    redirect(base_url('admin_slider/slider_list'));
	}
	public function show()
	{
		$data_bg['tests'] = $this->Admin_slider_model->get_slider();
		$this->load->view('index',$data_bg);
	}
	public function add_slider()  //add_buyers()
	{
		
		$this->load->view('admin/slider/add_slider');
		
	}
	public function slider_list()  //add_buyers() // show Testimonials
    {
        $sdata['slider'] = $this->Admin_slider_model->get_slider();
        //$this->load->view('admin/Testimonials/testimonials_list',$data);
        $this->load->view('admin/slider/slider_list', $sdata);
    }
    public function edit()
    {
        $data['id']=$this->input->post('id');
        $id=$data['id'];
        $data['caption1']=$this->input->post('caption1');
        $data['caption2']=$this->input->post('caption2');
        //$data['type']=$this->input->post('type');
        $data['background']=$this->input->post('background');
        //$data['status']=1;
        $url=$data['caption1'];
        $url=str_replace(" ", "-", $url);
            //$data['url']=$url;
        //$data['create_date']=date("d-m-Y");
        $table="slider";


            $config['upload_path'] = './frontend/vehicles_slider/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = '20000';
            $config['max_width']  = '20240';
            $config['max_height']  = '17680';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
        
            if(!$this->upload->do_upload('background_new'))
            {
                $data['background']=$this->input->post('old_background');
                    
                        $this->crud_custom->update_data($data,$id,$table);
                        redirect(base_url()."admin_slider/slider_list");               
            }
            else
            {  
                $abc = array('upload_data' => $this->upload->data());
                $Path=$abc['upload_data']['file_name'];
                $data['background']=$Path;
                $this->crud_custom->update_data($data,$id,$table);
                redirect(base_url()."admin_slider/slider_list");
            }
            
        }
    
    public function delete_slider($id) {   
    $id=$this->uri->segment(3);
        //$accessories_id=$accessories_id->accessories_id;
        $this->Admin_slider_model->delete_slider($id);    
        //redirect(base_url()."vehicle/my_vehicles");;
        redirect('admin_slider/slider_list');

    }
	
}