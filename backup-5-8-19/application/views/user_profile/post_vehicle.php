
<!--Page Header-->
<section class="page-header profile_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Post a Vehicle</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Post a Vehicle</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 

<!--Post-vehicle-->
<section class="user_profile inner_pages">
  <div class="container">
  <div class="container">
<!-- Address -->
<?php include('address.php'); ?>
<!-- End Address  -->
    <div class="row">
<!-- Aside -->
<?php include('aside.php'); ?>
<!-- End Aside  -->
      <div class="col-md-6 col-sm-8">
        <div class="profile_wrap">
          <h5 class="uppercase underline">Post a New Vehicle</h5>

          

<!-- Form Open-->
          <form action="<?php echo base_url() ?>vehicle/post" method="post" enctype="multipart/form-data">
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
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label">Model</label>
              <div class="select">
                <select class="form-control white_bg" name="model">
                  <option disabled="disabled" selected>Select Model</option>
                  <option>Model 2</option>
                  <option>Model 3</option>
                  <option>Model 4</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label">Vehicles Version</label>
              <div class="select">
                <select class="form-control white_bg" name="version">
                  <option disabled="disabled" selected>Vehicles Version</option>
                  <option>Version</option>
                  <option>Version 1.1</option>
                  <option>Version 1.2</option>
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
                <!-- <div><img src="<?php //echo base_url()?>frontend/assets/images/featured-img-1.jpg" alt="image"></div>
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
              <label class="control-label">Model Year</label>
              <input class="form-control white_bg" id="year" type="text" value="<?php echo set_value('model_year'); ?>" name="model_year">
              <?php echo form_error('model_year'); ?>
            </div>
            <div class="form-group">
              <label class="control-label">No. of Owners</label>
              <input class="form-control white_bg" id="owners" type="text" value="<?php echo set_value('no_owner'); ?>" name="no_owner">
              <?php echo form_error('no_owner'); ?>
            </div>
            <div class="form-group">
              <label class="control-label">KMs Driven</label>
              <input class="form-control white_bg" id="kws" type="text" value="<?php echo set_value('kms'); ?>" name="kms">
              <?php echo form_error('kms'); ?>
            </div>
            <div class="form-group">
              <label class="control-label">Fuel Type</label>
              <input class="form-control white_bg" id="fuel" type="text" value="<?php echo set_value('fuel_type'); ?>" name="fuel_type">
              <?php echo form_error('fuel_type'); ?>
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
              <label class="control-label">Engine Description</label>
              <input class="form-control white_bg" id="engien-description" type="text" value="<?php echo set_value('engine_disc'); ?>" name="engine_disc">
              <?php echo form_error('engine_disc'); ?>
            </div>
            <div class="form-group">
              <label class="control-label">No. of Cylinders</label>
              <input class="form-control white_bg" id="cylinders" type="text" value="<?php echo set_value('no_cylinders'); ?>" name="no_cylinders">
              <?php echo form_error('no_cylinders'); ?>
            </div>
            <div class="form-group">
              <label class="control-label">Mileage-City</label>
              <input class="form-control white_bg" id="mileage" type="text" value="<?php echo set_value('mileage_city'); ?>" name="mileage_city">
              <?php echo form_error('mileage_city'); ?>
            </div>
            <div class="form-group">
              <label class="control-label">Mileage-Highway</label>
              <input class="form-control white_bg" id="mileage-h" type="text" value="<?php echo set_value('mileage_highway'); ?>" name="mileage_highway">
              <?php echo form_error('mileage_highway'); ?>
            </div>
            <div class="form-group">
              <label class="control-label">Fuel Tank Capacity</label>
              <input class="form-control white_bg" id="capacity" type="text" value="<?php echo set_value('fuel_capacity'); ?>" name="fuel_capacity">
              <?php echo form_error('fuel_capacity'); ?>
            </div>
            <div class="form-group">
              <label class="control-label">Seating Capacity</label>
              <input class="form-control white_bg" id="s-capacity" type="text" value="<?php echo set_value('seat_capacity'); ?>" name="seat_capacity">
              <?php echo form_error('seat_capacity'); ?>
            </div>
            <div class="form-group">
              <label class="control-label">Transmission Type</label>
              <input class="form-control white_bg" id="Transmission" type="text" value="<?php echo set_value('transmission'); ?>" name="transmission">
              <?php echo form_error('transmission'); ?>
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
                <input id="brake" type="checkbox" name="break_assist" value="1">
                <label for="brake">Brake Assist</label>
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
                <input id="sensor" type="checkbox" name="crash_sensor" value="1">
                <label for="sensor">Crash Sensor</label>
              </div>
              <div class="form-group checkbox col-md-6 accessories_list">
                <input id="seats" type="checkbox" name="leather_seats" value="1">
                <label for="seats">Leather Seats</label>
              </div>
              <div class="form-group checkbox col-md-6 accessories_list">
                <input id="engine_warning" type="checkbox" name="engine_warning" value="1">
                <label for="engine_warning">Engine Check Warning</label>
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
                <label for="newcar">New Car</label>
              </div>
              <div class="form-group radio col-md-6 accessories_list">
                <input type="radio" name="type" value="usedcar" id="usedcar">
                <label for="usedcar">Used Car</label>
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
        <div><a href="#"><img src="assets/images/brand-logo-1.png" class="img-responsive" alt="image"></a></div>
        <div><a href="#"><img src="assets/images/brand-logo-2.png" class="img-responsive" alt="image"></a></div>
        <div><a href="#"><img src="assets/images/brand-logo-3.png" class="img-responsive" alt="image"></a></div>
        <div><a href="#"><img src="assets/images/brand-logo-4.png" class="img-responsive" alt="image"></a></div>
        <div><a href="#"><img src="assets/images/brand-logo-5.png" class="img-responsive" alt="image"></a></div>
      </div>
    </div>
  </div>
</section>
<!-- /Brands--> 

