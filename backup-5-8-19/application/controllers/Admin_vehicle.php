<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_vehicle extends Auth_Controller {

	function __construct()
		{
			  parent::__construct();
			  $this->load->helper(array('form', 'url'));
			  //$this->load->Model('Home_model');
			  //$this->load->Model('CI_Model');
			  
			  $this->load->Model('Admin_vehicle_model');
			  $this->load->library('Crud_custom');
			  //$this->load->helper('form');

		}
	public function index()
	{
		$sdata=$this->session->userdata('user_logged_in');
		$id=$sdata['userid'];
		$data['user_data']=$this->Admin_vehicle_model->user_data_with_id($id);
		$this->load->view('common/header', $data);
		$this->load->view('admin/vehicle/add_vehicle');
		$this->load->view('common/footer');
	}


	public function add_vehicles()
	{
		//$sdata=$this->session->userdata('user_logged_in');
		//$id=$sdata['userid'];
		//$data['user_data']=$this->Admin_vehicle_model->user_data_with_id($id);
		//$this->load->view('common/header', $data);
		$this->load->view('admin/vehicle/add_vehicle');
		//$this->load->view('common/footer');
	}
	public function post()
	{
	
	//Validation

		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('brand', 'Brand', 'required');
		$this->form_validation->set_rules('discription', 'Discription', 'required');
		$this->form_validation->set_rules('price', 'Price', 'required');
		//$this->form_validation->set_rules('pic', 'Pic', 'required');
		$this->form_validation->set_rules('model', 'Model', 'required');
		$this->form_validation->set_rules('wheeler', 'No Of Wheels', 'required');
		$this->form_validation->set_rules('kms', 'KMs Driven', 'required');
		$this->form_validation->set_rules('fuel_type', 'Fuel Type', 'required');
		$this->form_validation->set_rules('engien_type', 'Engien Type', 'required');
		//$this->form_validation->set_rules('engine_disc', 'Engine Discription', 'required');
		//$this->form_validation->set_rules('no_cylinders', 'No Cylinders', 'required');
		//$this->form_validation->set_rules('mileage_city', 'Mileage City', 'required');
		//$this->form_validation->set_rules('mileage_highway', 'Mileage Highway', 'required');
		//$this->form_validation->set_rules('fuel_capacity', 'Fuel Capacity', 'required');
		$this->form_validation->set_rules('seat_capacity', 'Seat Capacity', 'required');
		$this->form_validation->set_rules('transmission', 'Transmission', 'required');
		$this->form_validation->set_rules('type', 'Type', 'required');

		if( ! $this->form_validation->run()) 
		{
   			$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>'); 
         	return $this->add_vehicles();
        }
   		else
   		{
   	//checkboxes
			//$sdata=$this->session->userdata('user_logged_in');
			$id=0;
			$data_access['users_id']=$id;
			$data_access['ac']=$this->input->post('ac');
			$data_access['power_door']=$this->input->post('power_door');
			$data_access['abs']=$this->input->post('abs');
			//$data_access['break_assist']=$this->input->post('break_assist');
			$data_access['power_steering']=$this->input->post('power_steering');
			$data_access['airbag']=$this->input->post('airbag');
			$data_access['power_window']=$this->input->post('power_window');
			$data_access['pressure_break']=$this->input->post('pressure_break');
			$data_access['cd']=$this->input->post('cd');
			//$data_access['crash_sensor']=$this->input->post('crash_sensor');
			$data_access['leather_seats']=$this->input->post('leather_seats');
			//$data_access['engine_warning']=$this->input->post('engine_warning');
			$data_access['central_lock']=$this->input->post('central_lock');
			$data_access['auto_headlamp']=$this->input->post('auto_headlamp');
			$data_access['created_date']=date('Y-m-d H:i:s');	
			
			$accessories_id=$this->Admin_vehicle_model->post_accessories_model($data_access);

			//vehcle_data
			$data['accessories_id']=$accessories_id;
			$data['users_id']=$id;

			$data['title']=$this->input->post('title');
			$data['brand']=$this->input->post('brand');
			$data['model']=$this->input->post('model');
			//$data['version']=$this->input->post('version');
			$data['discription']=$this->input->post('discription');
			$data['price']=$this->input->post('price');
			$data['pic']=$this->input->post('pic');
			//$data['model_year']=$this->input->post('model_year');
			$data['wheeler']=$this->input->post('wheeler');
			$data['kms']=$this->input->post('kms');
			$data['fuel_type']=$this->input->post('fuel_type');
			$data['engien_type']=$this->input->post('engien_type');
			//$data['engine_disc']=$this->input->post('engine_disc');
			//$data['no_cylinders']=$this->input->post('no_cylinders');
			//$data['mileage_city']=$this->input->post('mileage_city');
			//$data['mileage_highway']=$this->input->post('mileage_highway');
			//$data['fuel_capacity']=$this->input->post('fuel_capacity');
			$data['seat_capacity']=$this->input->post('seat_capacity');
			$data['transmission']=$this->input->post('transmission');
			$data['type']=$this->input->post('type');
			$data['created_date']=date('Y-m-d H:i:s');

			//$data['type']=$this->input->post('type');
			// Upload

	//pehly vehicle upload hogi phir uska id agay jaye ga		
			if ($_FILES['pic']['error'] != 4 ) 
                {
                    $config['upload_path'] = './frontend/vehicles_images/';
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
                              'quality'   => '100%',
                              'source_image'    =>  $image_data['full_path'],
                              'maintain_ratio'  =>  FALSE,
                              'width'           =>  847,
                              'height'          =>  487
                            );
                            $this->image_lib->clear();
                            $this->image_lib->initialize($configer);
                            $this->image_lib->resize();

                            $abc = array('upload_data' => $this->upload->data());
                            $Path=$abc['upload_data']['file_name'];
                            $data['pic']=$Path;

                            $this->Admin_vehicle_model->post_model($data);
							redirect(base_url()."admin_vehicle/vehicles_list");
                    }
                }

			// End Upload
		}
	}


	 public function multiimages()
    {
        $data['vehicle_id']=$this->input->post('id');
        $data['multipleimages']=$this->input->post('multipleimages');

            $config['upload_path']          = './frontend/multiimages/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['encrypt_name'] = TRUE;
            $config['file_ext_tolower'] = TRUE;

            $files = $_FILES;

            if ($files['multipleimages']['name'][0] == '' ) {
                # code...
                echo "No images selected to upload";
            }
            else
            {
                $mum_files = count($files['multipleimages']);
                $dataInfo = array();
                for($i=0; $i<$mum_files; $i++)
                {

                    if ( isset($files['multipleimages']['name'][$i]) ) {

                        $config['file_name'] =$files['multipleimages']['name'][$i];
                        $this->load->library('upload', $config);

                        $_FILES['multipleimages']['name']= $files['multipleimages']['name']["$i"];
                        $_FILES['multipleimages']['type']= $files['multipleimages']['type']["$i"];
                        $_FILES['multipleimages']['tmp_name']= $files['multipleimages']['tmp_name']["$i"];
                        $_FILES['multipleimages']['error']= $files['multipleimages']['error']["$i"];
                        $_FILES['multipleimages']['size']= $files['multipleimages']['size']["$i"];    

                        $filename =$_FILES['multipleimages']['name'];

                        if ( ! $this->upload->do_upload('multipleimages'))
                        {
                            $error_message = $this->upload->display_errors();

                        }
                        else
                        {
                        	$this->load->library('image_lib');
                        $image_data=$this->upload->data();

                            $configer =  array(
                              'image_library'   => 'gd2',
                              'quality'   => '100%',
                              'source_image'    =>  $image_data['full_path'],
                              'maintain_ratio'  =>  FALSE,
                              'width'           =>  847,
                              'height'          =>  487
                            );
                            $this->image_lib->clear();
                            $this->image_lib->initialize($configer);
                            $this->image_lib->resize();

                            $dataInfo[] = $this->upload->data(); //all the info about the uploaded files are stored in this array
                        }
  
                    }
                }

                //here you can insert all the info about uploaded file into database using $dataInfo
                $all_imgs = '';

                if ( count($dataInfo) > 0) {
                    # code...
                    foreach ($dataInfo as $info) {
                        # code...
                        $all_imgs .= $info['file_name'];
                        $all_imgs .= ',';
                    }
                }
                $vid=$data['vehicle_id'];
                $insert_data = array(
                   'multipleimages' => rtrim($all_imgs,","),
                   'vehicle_id' => $vid,
                   'created_date' => date('Y-m-d H:i:s')
                );

                $this->db->insert('multipleimg', $insert_data);
            }

        redirect(base_url()."admin_vehicle/vehicles_list");

    }


	 public function edit()
    {
        $data['id']=$this->input->post('id');
        $id=$data['id'];
        $data['title']=$this->input->post('title');
        $data['brand']=$this->input->post('brand');
        $data['model']=$this->input->post('model');
        $data['price']=$this->input->post('price');
        $data['discription']=$this->input->post('discription');
        //$data['model_year']=$this->input->post('model_year');
        $data['wheeler']=$this->input->post('wheeler');
        $data['kms']=$this->input->post('kms');
        $data['fuel_type']=$this->input->post('fuel_type');
        $data['engien_type']=$this->input->post('engien_type');
        $data['no_cylinders']=$this->input->post('no_cylinders');
        $data['mileage_city']=$this->input->post('mileage_city');
        $data['mileage_highway']=$this->input->post('mileage_highway');
        $data['fuel_capacity']=$this->input->post('fuel_capacity');
        $data['seat_capacity']=$this->input->post('seat_capacity');
        $data['transmission']=$this->input->post('transmission');
        
        $table="vehicle";

         if ($_FILES['pic']['error'] != 4 ) 
                {
                    $config['upload_path'] = './frontend/vehicles_images/';
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
                              'quality'   => '100%',
                              'source_image'    =>  $image_data['full_path'],
                              'maintain_ratio'  =>  FALSE,
                              'width'           =>  847,
                              'height'          =>  487
                            );
                            $this->image_lib->clear();
                            $this->image_lib->initialize($configer);
                            $this->image_lib->resize();

                            $abc = array('upload_data' => $this->upload->data());
                            $Path=$abc['upload_data']['file_name'];
                            $data['pic']=$Path;
                }
            }
            else
            {
                $data['pic']=$this->input->post('old_pic'); 
            }

         
                $this->crud_custom->update_data($data,$id,$table);
                redirect(base_url()."admin_vehicle/vehicles_list");
            
    }


	public function update_vehicles()
	{
		$sdata=$this->session->userdata('user_logged_in');
		$id=$sdata['userid'];
		$data['user_data']=$this->Admin_vehicle_model->user_data_with_id($id);
		$vehicle_id=$this->uri->segment(3);
		$vdata['vehicle_data']=$this->Admin_vehicle_model->vehicle_data_with_id($vehicle_id);
//print_r($vdata['vehicle_data']);
//exit();
		$this->load->view('common/header', $data);
		$this->load->view('admin/vehicle/update_vehicle', $vdata);
		$this->load->view('common/footer');
	}
	public function update_post()
	{
	
   	//checkboxes
		$sdata=$this->session->userdata('user_logged_in');
			$id=$sdata['userid'];

			$data_access['ac']=$this->input->post('ac');
			$data_access['power_door']=$this->input->post('power_door');
			$data_access['abs']=$this->input->post('abs');
			//$data_access['break_assist']=$this->input->post('break_assist');
			$data_access['power_steering']=$this->input->post('power_steering');
			$data_access['airbag']=$this->input->post('airbag');
			$data_access['power_window']=$this->input->post('power_window');
			$data_access['pressure_break']=$this->input->post('pressure_break');
			$data_access['cd']=$this->input->post('cd');
			//$data_access['crash_sensor']=$this->input->post('crash_sensor');
			$data_access['leather_seats']=$this->input->post('leather_seats');
			//$data_access['engine_warning']=$this->input->post('engine_warning');
			$data_access['central_lock']=$this->input->post('central_lock');
			$data_access['auto_headlamp']=$this->input->post('auto_headlamp');
			$data_access['modified_date']=date('Y-m-d H:i:s');	
	
			$accessories_id=$this->input->post('accessories_id');
			$this->Admin_vehicle_model->post_accessories_model_update($data_access,$accessories_id);
			
			//vehcle_data
			//$data['accessories_id']=$accessories_id;

			$data['title']=$this->input->post('title');
			$data['brand']=$this->input->post('brand');
			$data['model']=$this->input->post('model');
			$data['version']=$this->input->post('version');
			$data['discription']=$this->input->post('discription');
			$data['price']=$this->input->post('price');
			$data['pic']=$this->input->post('pic');
			//$data['model_year']=$this->input->post('model_year');
			$data['wheeler']=$this->input->post('wheeler');
			$data['kms']=$this->input->post('kms');
			$data['fuel_type']=$this->input->post('fuel_type');
			$data['engien_type']=$this->input->post('engien_type');
			$data['engine_disc']=$this->input->post('engine_disc');
			$data['no_cylinders']=$this->input->post('no_cylinders');
			$data['mileage_city']=$this->input->post('mileage_city');
			$data['mileage_highway']=$this->input->post('mileage_highway');
			$data['fuel_capacity']=$this->input->post('fuel_capacity');
			$data['seat_capacity']=$this->input->post('seat_capacity');
			$data['transmission']=$this->input->post('transmission');
			$data['type']=$this->input->post('type');
			$data['modified_date']=date('Y-m-d H:i:s');

			$vehicle_id=$this->input->post('vehicle_id');

			// Upload
			$config['upload_path'] = './frontend/vehicles_images/';
	                    $config['allowed_types'] = 'gif|jpg|png';
	                    $config['max_size']	= '20000';
	                    $config['max_width']  = '20240';
	                    $config['max_height']  = '17680';
	                    $this->load->library('upload', $config);
	                    $this->upload->initialize($config);
			
                    if(!$this->upload->do_upload('pic'))
                    {
                        //echo $this->upload->display_errors();

						$data['pic']=$this->input->post('pic_val');
                       
						$this->Admin_vehicle_model->post_model_update($data, $vehicle_id);
						redirect(base_url()."admin/Vehicle/vehicles_list");
                    }
                    else
                    {   
                    	
                        $abc = array('upload_data' => $this->upload->data());
						$Path=$abc['upload_data']['file_name'];
						$data['pic']=$Path;
                        $this->Admin_vehicle_model->post_model_update($data, $vehicle_id);
						redirect(base_url()."admin/Vehicle/vehicles_list");
                    }
			
			

			// End Upload
	}
	
	public function image_list()  //add_buyers() // show Testimonials
	{
		//$idata['images'] = $this->Admin_vehicle_model->get_images();
		$id=  $this->uri->segment(3);
	    
		$img = $this->Admin_vehicle_model->get_images($id);
	    //print_r($idata['images']);
        //exit();
        
        if (!empty($img))
		{
			$img=$img[0]->multipleimages;
			$multiple_images = explode (",", $img);
			$idata['images']=$multiple_images;
		}
	
		$this->load->view('admin/vehicle/image_list', $idata);
	}
	
	public function vehicles_list()  //add_buyers() // show Testimonials
	{
		$vdata['records'] = $this->Admin_vehicle_model->get_vehicle();
		//$this->load->view('admin/Testimonials/testimonials_list',$data);
		$this->load->view('admin/vehicle/vehicles_list', $vdata);
	}
	public function delete_row($id) {   
    $id=$this->uri->segment(3);
		//$accessories_id=$accessories_id->accessories_id;
		$this->Admin_vehicle_model->delete_vehicle($id);	
		//redirect(base_url()."vehicle/vehicles_list");;
		redirect('admin_vehicle/vehicles_list');

    }
	public function status()
	{
		$id=$this->uri->segment(3);
		$status=$this->uri->segment(4);
		$this->Admin_vehicle_model->status_model($id,$status);	
		redirect(base_url()."admin_vehicle/vehicles_list");
	}
	public function delete()
	{
		$id=$this->uri->segment(3);
		$accessories_id=$this->Admin_vehicle_model->accessories_id_with_vehicle_id($id);
		$accessories_id=$accessories_id->accessories_id;
		$this->Admin_vehicle_model->delete_model($id,$accessories_id);	
		redirect(base_url()."admin_vehicle/vehicles_list");
	}
	public function car()
	{
		//$this->load->view('admin/common/header');
		$this->load->view('admin/car/add_car');
		//$this->load->view('admin/common/footer');
	}
	public function delete_multipic_checklist() 
    {   
        $data['id']=$this->input->post('id');
        $id=$data['id'];
         $this->Admin_vehicle_model->delete_multipic_checklist_m($id);  
        redirect(base_url()."admin_vehicle/image_list");
    }


}