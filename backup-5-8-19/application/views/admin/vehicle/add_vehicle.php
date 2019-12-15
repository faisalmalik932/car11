<!---- header ---->
        <?php $this->load->view('admin/common/header');  ?>
<!---- header ----> 


<!---- sidebar ---->
        <?php $this->load->view('admin/common/sidebar');  ?>
<!---- sidebar ----> 
<!-- =============================================== -->
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-users"></i>
               </div>
               <div class="header-title">
                  <h1>Add Vehicle</h1>
                  <small>Vehicle list</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonlist"> 
                              <a class="btn btn-add " href="vehicles_list"> 
                              <i class="fa fa-list"></i>  Vehicle List </a>  
                           </div>
                        </div>
                        <div class="panel-body">
          

<!-- Form Open-->
          <form action="<?php echo base_url() ?>admin_vehicle/post" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label class="control-label">Vehicles Title</label>
              <input class="form-control white_bg" id="VehiclesTitle" value="<?php echo set_value('title'); ?>" type="text" name="title">
              <?php echo form_error('title'); ?>
            </div>
            <div class="form-group">
              <label class="control-label">Select Make</label>
              <div class="select">
                <select class="form-control white_bg" name="brand">
                  <option disabled="disabled" selected>Select Make</option>
                  <option>Audi</option>
                  <option>BMW</option>
                  <option>Nissan</option>
                  <option>Toyota</option>
                  <option>Suzuki</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label">Select Vehicle Model</label>
              <div class="select">
                <select class="form-control white_bg" name="model">
                  <option disabled="disabled" selected>Select Model</option>
                  <option>2016</option>
                  <option>2017</option>
                  <option>2018</option>
                  <option>2019</option>
                  <option>2020</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label">Vehicle Overview  Description</label>
              <textarea class="form-control white_bg" rows="4" name="discription"><?php echo set_value('discription'); ?></textarea>
              <?php echo form_error('discription'); ?>
            </div>
            <div class="form-group">
              <label class="control-label">Price ($)</label>
              <input class="form-control white_bg" id="Price" type="number" value="<?php echo set_value('price'); ?>" name="price">
              <?php echo form_error('price'); ?>
            </div>
            <div class="form-group">
              <label class="control-label">Upload Images  ( size = 900 x 560 )</label>
              <div class="vehicle_images">
                <!-- <div><input type="file" name="background" size="20"></div>
                <div><img src="<?php //echo base_url()?>frontend/assets/images/featured-img-2.jpg" alt="image"></div> -->
                <div class="upload_more_img">
                  <input type="file" name="pic" value="<?php echo set_value('pic'); ?>">
                  <?php echo form_error('pic'); ?>
                </div>
              </div>
            </div>
            <div class="gray-bg field-title">
              <h6>Basic Info</h6>
            </div>
          
           <div class="form-group">
              <label class="control-label">Select Wheels</label>
              <div class="select">
                <select class="form-control white_bg" name="wheeler">
                  <option disabled="disabled" selected>Select Wheels</option>
                  <option>2 wheeler</option>
                  <option>4 wheeler</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label">KMs Driven</label>
              <input class="form-control white_bg" id="kws" type="text" value="<?php echo set_value('kms'); ?>" name="kms">
              <?php echo form_error('kms'); ?>
            </div>
            <div class="form-group">
              <label class="control-label">Fuel Type</label>
              <div class="select">
                <select class="form-control white_bg" name="fuel_type">
                  <option disabled="disabled" selected>Select Fuel Type</option>
                  <option>Diesel</option>
                  <option>Petrol</option>
                  <option>LPG</option>
                </select>
              </div>
            </div>
            <div class="gray-bg field-title">
              <h6>Technical Specification</h6>
            </div>
            <div class="form-group">
              <label class="control-label">Engine Type</label>
              <input class="form-control white_bg" id="engien" type="text" value="<?php echo set_value('engien_type'); ?>" name="engien_type">
              <?php echo form_error('engien_type'); ?>
            </div>
      
            <div class="form-group">
              <label class="control-label">Seating Capacity</label>
              <input class="form-control white_bg" id="s-capacity" type="text" value="<?php echo set_value('seat_capacity'); ?>" name="seat_capacity">
              <?php echo form_error('seat_capacity'); ?>
            </div>
                <div class="form-group">
              <label class="control-label">Transmission Type</label>
              <div class="select">
                <select class="form-control white_bg" name="transmission">
                  <option disabled="disabled" selected>Select Transmission Type</option>
                  <option>Auto</option>
                  <option>Manual</option>
                </select>
              </div>
            </div>
            <div class="gray-bg field-title">
              <h6>Accessories</h6>
            </div>
            <div class="vehicle_accessories">
              <div class="form-group checkbox col-md-6 accessories_list">
                <input id="air_conditioner" type="checkbox" name="ac" value="1">
                <label for="air_conditioner">Air Conditioner</label>
              </div>
              <div class="form-group checkbox col-md-6 accessories_list">
                <input id="door" type="checkbox" name="power_door" value="1">
                <label for="door">Power Door Locks</label>
              </div>
              <div class="form-group checkbox col-md-6 accessories_list">
                <input id="antiLock" type="checkbox" name="abs" value="1">
                <label for="antiLock">AntiLock Braking System</label>
              </div>
              
              <div class="form-group checkbox col-md-6 accessories_list">
                <input id="steering" type="checkbox" name="power_steering" value="1">
                <label for="steering">Power Steering</label>
              </div>
              <div class="form-group checkbox col-md-6 accessories_list">
                <input id="airbag" type="checkbox" name="airbag" value="1">
                <label for="airbag">Driver Airbag</label>
              </div>
              <div class="form-group checkbox col-md-6 accessories_list">
                <input id="windows" type="checkbox" name="power_window" value="1">
                <label for="windows">Power Windows</label>
              </div>
              <div class="form-group checkbox col-md-6 accessories_list">
                <input id="passenger_airbag" type="checkbox" name="pressure_break" value="1">
                <label for="passenger_airbag">Passenger Airbag</label>
              </div>
              <div class="form-group checkbox col-md-6 accessories_list">
                <input id="player" type="checkbox" name="cd" value="1">
                <label for="player">CD Player</label>
              </div>
              
              <div class="form-group checkbox col-md-6 accessories_list">
                <input id="seats" type="checkbox" name="leather_seats" value="1">
                <label for="seats">Leather Seats</label>
              </div>
            
              <div class="form-group checkbox col-md-6 accessories_list">
                <input id="locking" type="checkbox" name="central_lock" value="1">
                <label for="locking">Central Locking</label>
              </div>
              <div class="form-group checkbox col-md-6 accessories_list">
                <input id="headlamps" type="checkbox" name="auto_headlamp" value="1">
                <label for="headlamps">Automatic Headlamps</label>
              </div>
            </div>
            <div class="vehicle_type">
              <div class="form-group radio col-md-6 accessories_list">
                <input type="radio" name="type" value="newcar" id="newcar">
                <label for="newcar">New Arrival</label>
              </div>
              
              <div class="form-group radio col-md-6 accessories_list">
                <input type="radio" name="type" value="rvscar" id="rvscar">
                <label for="rvscar">RVS</label>
              </div>
              <div class="form-group radio col-md-6 accessories_list">
                <input type="radio" name="type" value="classiccar" id="classiccar">
                <label for="classiccar">Classic Cars</label>
              </div>
              <div class="form-group radio col-md-6 accessories_list">
                <input type="radio" name="type" value="motorcycle" id="motorcycle">
                <label for="motorcycle">Motorcycles</label>
              </div>
              <div class="form-group radio col-md-6 accessories_list">
                <input type="radio" name="type" value="truck" id="truck">
                <label for="truck">Trucks</label>
              </div>
            </div>
            <div class="form-group">
              <button type="submit" class="btn">Submit Vehicle <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/Post-vehicle--> 

<!--Brands-->
<section class="brand-section gray-bg">
  <div class="container">
    <div class="brand-hadding">
      <h5>Popular Brands</h5>
    </div>
    <div class="brand-logo-list">
      <div id="popular_brands">
        <div><a href="#"><img src="<?php echo base_url()?>frontend/assets/images/brand-logo-1.png" class="img-responsive" alt="image"></a></div>
        <div><a href="#"><img src="<?php echo base_url()?>frontend/assets/images/brand-logo-2.png" class="img-responsive" alt="image"></a></div>
        <div><a href="#"><img src="<?php echo base_url()?>frontend/assets/images/brand-logo-3.png" class="img-responsive" alt="image"></a></div>
        <div><a href="#"><img src="<?php echo base_url()?>frontend/assets/images/brand-logo-4.png" class="img-responsive" alt="image"></a></div>
        <div><a href="#"><img src="<?php echo base_url()?>frontend/assets/images/brand-logo-5.png" class="img-responsive" alt="image"></a></div>
      </div>
    </div>
  </div>
</section>
<!-- /Brands--> 
<footer class="main-footer">
            <strong>Copyright &copy; 2019 <a href="#">CarAdviserCorp</a>.</strong> All rights reserved.
         </footer>
      </div>

<!---- footer ---->
        <?php $this->load->view('admin/common/footer');  ?>
<!---- footer ----> 

