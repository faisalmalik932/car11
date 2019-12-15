<!--Page Header-->
<section class="page-header compare_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Compare Inventorys</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Compare Inventorys</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 

<!-- Filter-Form -->
<section id="filter_form" class="inner-filter gray-bg">
  <div class="container">
    <h3>Find Your Dream Car <span>(Easy search from here)</span></h3>
    <div class="row">
      <form action="#" method="get">
        <div class="form-group col-md-3 col-sm-6 black_input">
          <div class="select">
            <select class="form-control">
              <option value="">Select Location </option>
              <option value="">Location 1 </option>
              <option value="">Location 1 </option>
            </select>
          </div>
        </div>
        <div class="form-group col-md-3 col-sm-6 black_input">
          <div class="select">
            <select class="form-control">
              <option>Select Brand</option>
              <option>Audi</option>
              <option>BMW</option>
              <option>Nissan</option>
              <option>Toyota</option>
            </select>
          </div>
        </div>
        <div class="form-group col-md-3 col-sm-6 black_input">
          <div class="select">
            <select class="form-control">
              <option>Select Model</option>
              <option>Series 1</option>
              <option>Series 2</option>
              <option>Series 3</option>
            </select>
          </div>
        </div>
        <div class="form-group col-md-3 col-sm-6 black_input">
          <div class="select">
            <select class="form-control">
              <option>Year of Model </option>
              <option>2016</option>
              <option>2015</option>
              <option>2014</option>
            </select>
          </div>
        </div>
        <div class="form-group col-md-6 col-sm-6 black_input">
          <label class="form-label">Price Range ($)</label>
          <input id="price_range" type="text" class="span2" value="" data-slider-min="50" data-slider-max="6000" data-slider-step="5" data-slider-value="[1000,5000]"/>
        </div>
        <div class="form-group col-md-3 col-sm-6 black_input">
          <div class="select">
            <select class="form-control">
              <option>Type of Car </option>
              <option>New Car</option>
              <option>Used Car</option>
            </select>
          </div>
        </div>
        <div class="form-group col-md-3 col-sm-6">
          <button type="submit" class="btn btn-block"><i class="fa fa-search" aria-hidden="true"></i> Search Car </button>
        </div>
      </form>
    </div>
  </div>
</section>
<!-- /Filter-Form --> 

<!--Compare-->
<section class="compare-page inner_pages">
  <div class="container">
    <div class="compare_info">
      <h4>Compare Hyundai Elantra 1.6 SX and Ford Figo 1.5D Base MT and Hyundai Elantra 2.0 SX</h4>
    
     
      <div class="compare_product_img">
        <div class="inventory_info_list">
          <ul>
          
            <li id="filter_toggle" class="search_other_inventory"><i class="fa fa-search" aria-hidden="true"></i> Search Other Inventory</li>
            <?php foreach ($vehicles as $vehicle_img): ?>
    
            <li><a href="#"><img src="<?php echo base_url() ?>/frontend/vehicles_images/<?php echo $vehicle_img->pic; ?>" alt="image"></a></li>
            <?php endforeach; ?>
          </ul>
          
        </div>
        <table>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </table>
      </div>
      <div class="compare_product_title gray-bg">
        <div class="inventory_info_list">
          <ul>
            <li class="listing_heading">Compare <br>
              Inventorys <span class="td_divider"></span></li>
              <?php foreach ($vehicles as $c_invent): ?>
            <li><a href="#"><?php echo $c_invent->brand; ?><?php echo $c_invent->model; ?><?php echo $c_invent->version; ?></a>
              <p class="price"><?php echo $c_invent->price; ?></p>
              <span class="vs">V/s</span></li>
         <?php endforeach; ?>
          </ul>
        </div>
      </div>
      <div class="compare_product_info"> 
        <!--Basic-Info-Table-->
        <div class="inventory_info_list">
          <div class="listing_heading">
            <div>BASIC INFO</div>
            <div>&nbsp;</div>
            <div>&nbsp;</div>
            <div>&nbsp;</div>
          </div>
          <ul>
            <li class="info_heading">
              <div>Year</div>
              <div>No. of Owners</div>
              <div>KMs Driven</div>
              <div>Fuel Type</div>
            </li>
            <?php foreach ($vehicles as $b_info): ?>
            <li>
              <div><?php echo $b_info->model_year; ?></div>
              <div><?php echo $b_info->no_owner; ?></div>
              <div><?php echo $b_info->kms; ?></div>
              <div><?php echo $b_info->fuel_type; ?></div>
            </li>
           <?php endforeach; ?>
          </ul>
        </div>
        
        <!--Technical-Specification-Table-->
        <div class="inventory_info_list">
          <div class="listing_heading">
            <div>Technical Specification</div>
            <div>&nbsp;</div>
            <div>&nbsp;</div>
            <div>&nbsp;</div>
          </div>
          <ul>
            <li class="info_heading">
              <div>Engine Type</div>
              <div>Engine Description</div>
              <div>No. of Cylinders</div>
              <div>Mileage-City</div>
              <div>Mileage-Highway</div>
              <div>Fuel Tank Capacity</div>
              <div>Seating Capacity</div>
              <div>Transmission Type</div>
            </li>
            <?php foreach ($vehicles as $t_specification): ?>
            <li>
              <div><?php echo $t_specification->engien_type; ?></div>
              <div><?php echo $t_specification->engine_disc; ?></div>
              <div><?php echo $t_specification->no_cylinders; ?></div>
              <div><?php echo $t_specification->mileage_city; ?></div>
              <div><?php echo $t_specification->mileage_highway; ?></div>
              <div><?php echo $t_specification->fuel_capacity; ?></div>
              <div><?php echo $t_specification->seat_capacity; ?></div>
              <div><?php echo $t_specification->transmission; ?></div>
            </li>
           <?php endforeach; ?>
          </ul>
        </div>
        
        <!--Accessories-->
        <div class="inventory_info_list">
          <div class="listing_heading">
            <div>Accessories</div>
            <div>&nbsp;</div>
            <div>&nbsp;</div>
            <div>&nbsp;</div>
          </div>
          <ul>
            <li class="info_heading">
              <div>Air Conditioner</div>
              <div>AntiLock Braking System</div>
              <div>Power Steering</div>
              <div>Power Windows</div>
              <div>CD Player</div>
              <div>Leather Seats</div>
              <div>Central Locking</div>
              <div>Power Door Locks</div>
              <div>Brake Assist</div>
              <div>Driver Airbag</div>
              <div>Passenger Airbag</div>
              <div>Crash Sensor</div>
              <div>Engine Check Warning</div>
              <div>Automatic Headlamps</div>
            </li>
           <?php foreach ($vehicles as $accesseries):?>
            <li>
              <div><i class="fa fa-<?php echo $accesseries->ac==1?"check":"close" ?>" aria-hidden="true"></i></div>
             	   
             <div><i class="fa fa-<?php echo $accesseries->abs==1?"check":"close" ?>" aria-hidden="true"></i></div>
              <div><i class="fa fa-<?php echo $accesseries->power_steering==1?"check":"close" ?>" aria-hidden="true"></i></div>
              <div><i class="fa fa-<?php echo $accesseries->power_window==1?"check":"close" ?>" aria-hidden="true"></i></div>
              <div><i class="fa fa-<?php echo $accesseries->cd==1?"check":"close" ?>" aria-hidden="true"></i></div>
              <div><i class="fa fa-<?php echo $accesseries->leather_seats==1?"check":"close" ?>" aria-hidden="true"></i></div>
              <div><i class="fa fa-<?php echo $accesseries->central_lock==1?"check":"close" ?>" aria-hidden="true"></i></div>
              <div><i class="fa fa-<?php echo $accesseries->power_door==1?"check":"close" ?>" aria-hidden="true"></i></div>
              <div><i class="fa fa-<?php echo $accesseries->break_assist==1?"check":"close" ?>" aria-hidden="true"></i></div>
              <div><i class="fa fa-<?php echo $accesseries->airbag==1?"check":"close" ?>" aria-hidden="true"></i></div>
              <div><i class="fa fa-<?php echo $accesseries->airbag==1?"check":"close" ?>" aria-hidden="true"></i></div>
              <div><i class="fa fa-<?php echo $accesseries->crash_sensor==1?"check":"close" ?>" aria-hidden="true"></i></div>
              <div><i class="fa fa-<?php echo $accesseries->engine_warning==1?"check":"close" ?>" aria-hidden="true"></i></div>
              <div><i class="fa fa-<?php echo $accesseries->auto_headlamp==1?"check":"close" ?>" aria-hidden="true"></i></div>
              <div class="inventory_info_list text-center">
                <ul>
                  <li>
                    <a href="<?php echo base_url() ?>detail/vehicle/<?php echo $accesseries->vehicle_id ?>" class="btn">View Detail</a>
                  </li>
                </ul>
              </div>
          </li>
           <?php endforeach; ?>
        </ul>
       </div>
      </div>
    </div>
  </div>
</section>
<!--/Compare--> 

<!--Brands-->
<section class="brand-section gray-bg">
  <div class="container">
    <div class="brand-hadding">
      <h5>Popular Brands</h5>
    </div>
    <div class="brand-logo-list">
      <div id="popular_brands">
        <div><a href="#"><img src="<?php echo base_url() ?>frontend/assets/images/brand-logo-1.png" class="img-responsive" alt="image"></a></div>
        <div><a href="#"><img src="<?php echo base_url() ?>frontend/assets/images/brand-logo-2.png" class="img-responsive" alt="image"></a></div>
        <div><a href="#"><img src="<?php echo base_url() ?>frontend/assets/images/brand-logo-3.png" class="img-responsive" alt="image"></a></div>
        <div><a href="#"><img src="<?php echo base_url() ?>frontend/assets/images/brand-logo-4.png" class="img-responsive" alt="image"></a></div>
        <div><a href="#"><img src="<?php echo base_url() ?>frontend/assets/images/brand-logo-5.png" class="img-responsive" alt="image"></a></div>
      </div>
    </div>
  </div>
</section>
<!-- /Brands--> 



<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 

<!--Login-Form -->
<div class="modal fade" id="loginform">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Login</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="login_wrap">
            <div class="col-md-6 col-sm-6">
              <form action="#" method="get">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Username or Email address*">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Password*">
                </div>
                <div class="form-group checkbox">
                  <input type="checkbox" id="remember">
                  <label for="remember">Remember Me</label>
                </div>
                <div class="form-group">
                  <input type="submit" value="Login" class="btn btn-block">
                </div>
              </form>
            </div>
            <div class="col-md-6 col-sm-6">
              <h6 class="gray_text">Login the Quick Way</h6>
              <a href="#" class="btn btn-block facebook-btn"><i class="fa fa-facebook-square" aria-hidden="true"></i> Login with Facebook</a> <a href="#" class="btn btn-block twitter-btn"><i class="fa fa-twitter-square" aria-hidden="true"></i> Login with Twitter</a> <a href="#" class="btn btn-block googleplus-btn"><i class="fa fa-google-plus-square" aria-hidden="true"></i> Login with Google+</a> </div>
            <div class="mid_divider"></div>
          </div>
        </div>
      </div>
      <div class="modal-footer text-center">
        <p>Don't have an account? <a href="#signupform" data-toggle="modal" data-dismiss="modal">Signup Here</a></p>
        <p><a href="#forgotpassword" data-toggle="modal" data-dismiss="modal">Forgot Password ?</a></p>
      </div>
    </div>
  </div>
</div>
<!--/Login-Form --> 

<!--Register-Form -->
<div class="modal fade" id="signupform">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Sign Up</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="signup_wrap">
            <div class="col-md-6 col-sm-6">
              <form action="#" method="get">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Full Name">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Email Address">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Confirm Password">
                </div>
                <div class="form-group checkbox">
                  <input type="checkbox" id="terms_agree">
                  <label for="terms_agree">I Agree with <a href="#">Terms and Conditions</a></label>
                </div>
                <div class="form-group">
                  <input type="submit" value="Sign Up" class="btn btn-block">
                </div>
              </form>
            </div>
            <div class="col-md-6 col-sm-6">
              <h6 class="gray_text">Login the Quick Way</h6>
              <a href="#" class="btn btn-block facebook-btn"><i class="fa fa-facebook-square" aria-hidden="true"></i> Login with Facebook</a> <a href="#" class="btn btn-block twitter-btn"><i class="fa fa-twitter-square" aria-hidden="true"></i> Login with Twitter</a> <a href="#" class="btn btn-block googleplus-btn"><i class="fa fa-google-plus-square" aria-hidden="true"></i> Login with Google+</a> </div>
            <div class="mid_divider"></div>
          </div>
        </div>
      </div>
      <div class="modal-footer text-center">
        <p>Already got an account? <a href="#loginform" data-toggle="modal" data-dismiss="modal">Login Here</a></p>
      </div>
    </div>
  </div>
</div>
<!--/Register-Form --> 

<!--Forgot-password-Form -->
<div class="modal fade" id="forgotpassword">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Password Recovery</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="forgotpassword_wrap">
            <div class="col-md-12">
              <form action="#" method="get">
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Your Email address*">
                </div>
                <div class="form-group">
                  <input type="submit" value="Reset My Password" class="btn btn-block">
                </div>
              </form>
              <div class="text-center">
                <p class="gray_text">For security reasons we don't store your password. Your password will be reset and a new one will be send.</p>
                <p><a href="#loginform" data-toggle="modal" data-dismiss="modal"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Back to Login</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/Forgot-password-Form --> 

<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<!--Switcher-->
<script src="assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS--> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>

</body>

</html>