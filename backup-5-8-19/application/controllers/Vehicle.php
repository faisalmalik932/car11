<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehicle extends CI_Controller {

	function __construct()
		{
			  parent::__construct();
			  $this->load->Model('Home_model');
			  $this->load->Model('Vehicle_model');
			  $this->load->helper('form');

			  redirect(base_url());

		}
	public function index()
	{
		$sdata=$this->session->userdata('user_logged_in');
		$id=$sdata['userid'];
		$data['user_data']=$this->Home_model->user_data_with_id($id);
		$this->load->view('common/header', $data);
		$this->load->view('user_profile/post_vehicle');
		$this->load->view('common/footer');
	}


	public function post_vehicles()
	{
		$sdata=$this->session->userdata('user_logged_in');
		$id=$sdata['userid'];
		$data['user_data']=$this->Home_model->user_data_with_id($id);
		$this->load->view('common/header', $data);
		$this->load->view('user_profile/post_vehicle');
		$this->load->view('common/footer');
	}
	public function post()
	{
	
	//Validation

		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('discription', 'Discription', 'required');
		$this->form_validation->set_rules('price', 'Price', 'required');
		//$this->form_validation->set_rules('pic', 'Pic', 'required');
		$this->form_validation->set_rules('model_year', 'Model', 'required');
		$this->form_validation->set_rules('no_owner', 'No Of Owner', 'required');
		$this->form_validation->set_rules('kms', 'KMs Driven', 'required');
		$this->form_validation->set_rules('fuel_type', 'Fuel Type', 'required');
		$this->form_validation->set_rules('engien_type', 'Engien Type', 'required');
		$this->form_validation->set_rules('engine_disc', 'Engine Discription', 'required');
		$this->form_validation->set_rules('no_cylinders', 'No Cylinders', 'required');
		$this->form_validation->set_rules('mileage_city', 'Mileage City', 'required');
		$this->form_validation->set_rules('mileage_highway', 'Mileage Highway', 'required');
		$this->form_validation->set_rules('fuel_capacity', 'Fuel Capacity', 'required');
		$this->form_validation->set_rules('seat_capacity', 'Seat Capacity', 'required');
		$this->form_validation->set_rules('transmission', 'Transmission', 'required');
		$this->form_validation->set_rules('type', 'Type', 'required');

		if( ! $this->form_validation->run()) 
		{
   			$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>'); 
         	return $this->post_vehicles();
        }
   		else
   		{
   	//checkboxes
			$sdata=$this->session->userdata('user_logged_in');
			$id=$sdata['userid'];
			$data_access['users_id']=$id;
			$data_access['ac']=$this->input->post('ac');
			$data_access['power_door']=$this->input->post('power_door');
			$data_access['abs']=$this->input->post('abs');
			$data_access['break_assist']=$this->input->post('break_assist');
			$data_access['power_steering']=$this->input->post('power_steering');
			$data_access['airbag']=$this->input->post('airbag');
			$data_access['power_window']=$this->input->post('power_window');
			$data_access['pressure_break']=$this->input->post('pressure_break');
			$data_access['cd']=$this->input->post('cd');
			$data_access['crash_sensor']=$this->input->post('crash_sensor');
			$data_access['leather_seats']=$this->input->post('leather_seats');
			$data_access['engine_warning']=$this->input->post('engine_warning');
			$data_access['central_lock']=$this->input->post('central_lock');
			$data_access['auto_headlamp']=$this->input->post('auto_headlamp');
			$data_access['created_date']=date('Y-m-d H:i:s');	
			
			$accessories_id=$this->Vehicle_model->post_accessories_model($data_access);

			//vehcle_data
			$data['accessories_id']=$accessories_id;
			$data['users_id']=$id;

			$data['title']=$this->input->post('title');
			$data['brand']=$this->input->post('brand');
			$data['model']=$this->input->post('model');
			$data['version']=$this->input->post('version');
			$data['discription']=$this->input->post('discription');
			$data['price']=$this->input->post('price');
			$data['pic']=$this->input->post('pic');
			$data['model_year']=$this->input->post('model_year');
			$data['no_owner']=$this->input->post('no_owner');
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
			$data['created_date']=date('Y-m-d H:i:s');

			//$data['type']=$this->input->post('type');
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
                         echo $this->upload->display_errors();
						
                        //$this->Vehicle_model->post_model($data);
						//redirect(base_url()."vehicle/my_vehicles");
                    }
                    else
                    {   
                        $abc = array('upload_data' => $this->upload->data());
						$Path=$abc['upload_data']['file_name'];
						$data['pic']=$Path;
                        $this->Vehicle_model->post_model($data);
						redirect(base_url()."vehicle/my_vehicles");
                    }

			// End Upload

			
		}
	}

	public function update_vehicles()
	{
		$sdata=$this->session->userdata('user_logged_in');
		$id=$sdata['userid'];
		$data['user_data']=$this->Home_model->user_data_with_id($id);
		$vehicle_id=$this->uri->segment(3);
		$vdata['vehicle_data']=$this->Vehicle_model->vehicle_data_with_id($vehicle_id);
//print_r($vdata['vehicle_data']);
//exit();
		$this->load->view('common/header', $data);
		$this->load->view('user_profile/update_vehicle', $vdata);
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
			$data_access['break_assist']=$this->input->post('break_assist');
			$data_access['power_steering']=$this->input->post('power_steering');
			$data_access['airbag']=$this->input->post('airbag');
			$data_access['power_window']=$this->input->post('power_window');
			$data_access['pressure_break']=$this->input->post('pressure_break');
			$data_access['cd']=$this->input->post('cd');
			$data_access['crash_sensor']=$this->input->post('crash_sensor');
			$data_access['leather_seats']=$this->input->post('leather_seats');
			$data_access['engine_warning']=$this->input->post('engine_warning');
			$data_access['central_lock']=$this->input->post('central_lock');
			$data_access['auto_headlamp']=$this->input->post('auto_headlamp');
			$data_access['modified_date']=date('Y-m-d H:i:s');	
	
			$accessories_id=$this->input->post('accessories_id');
			$this->Vehicle_model->post_accessories_model_update($data_access,$accessories_id);
			
			//vehcle_data
			//$data['accessories_id']=$accessories_id;

			$data['title']=$this->input->post('title');
			$data['brand']=$this->input->post('brand');
			$data['model']=$this->input->post('model');
			$data['version']=$this->input->post('version');
			$data['discription']=$this->input->post('discription');
			$data['price']=$this->input->post('price');
			$data['pic']=$this->input->post('pic');
			$data['model_year']=$this->input->post('model_year');
			$data['no_owner']=$this->input->post('no_owner');
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
                       
						$this->Vehicle_model->post_model_update($data, $vehicle_id);
						redirect(base_url()."vehicle/my_vehicles");
                    }
                    else
                    {   
                    	
                        $abc = array('upload_data' => $this->upload->data());
						$Path=$abc['upload_data']['file_name'];
						$data['pic']=$Path;
                        $this->Vehicle_model->post_model_update($data, $vehicle_id);
						redirect(base_url()."vehicle/my_vehicles");
                    }
			
			

			// End Upload
	}
	
	public function my_vehicles()
	{
		
		
		$sdata=$this->session->userdata('user_logged_in');
		$id=$sdata['userid'];
		$data['user_data']=$this->Home_model->user_data_with_id($id);
		$this->load->view('common/header', $data);

		//$vdata['my_vehicles']=$this->Vehicle_model->my_vehicles_model($id);

        $pagination_data=$this->Vehicle_model->count($id);
                $count=$pagination_data;
                $vdata['count']=$count;
                $this->load->library('pagination');
                $config['base_url'] = base_url().'vehicle/my_vehicles';
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
                $comp=$this->Vehicle_model->my_vehicles_model_with_limit($config['per_page'],$page,$id);
                $vdata['my_vehicles'] = $comp;
                $vdata['links'] = $this->pagination->create_links();
                
        $this->load->view('user_profile/my_vehicles', $vdata);
		$this->load->view('common/footer');

        

	}
	public function status()
	{
		$id=$this->uri->segment(3);
		$status=$this->uri->segment(4);
		$this->Vehicle_model->status_model($id,$status);	
		redirect(base_url()."vehicle/my_vehicles");
	}
	public function delete()
	{
		$id=$this->uri->segment(3);
		$accessories_id=$this->Vehicle_model->accessories_id_with_vehicle_id($id);
		$accessories_id=$accessories_id->accessories_id;
		$this->Vehicle_model->delete_model($id,$accessories_id);	
		redirect(base_url()."vehicle/my_vehicles");
	}


}