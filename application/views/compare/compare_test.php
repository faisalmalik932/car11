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
            <li><a href="#"><img src="<?php echo base_url() ?>frontend/assets/images/recent-car-2.jpg" alt="image"></a></li>
            <li><a href="#"><img src="<?php echo base_url() ?>frontend/assets/images/recent-car-3.jpg" alt="image"></a></li>
            <li><a href="#"><img src="<?php echo base_url() ?>frontend/assets/images/recent-car-4.jpg" alt="image"></a></li>
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
            <li><a href="#">Hyundai Elantra 1.6 SX</a>
              <p class="price">$90,000</p>
              <span class="vs">V/s</span></li>
            <li><a href="#">Ford Figo 1.5D Base MT</a>
              <p class="price">$85,000</p>
              <span class="vs">V/s</span></li>
            <li><a href="#">Hyundai Elantra 2.0 SX</a>
              <p class="price">$75,000</p>
            </li>
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
              <div>Model Year</div>
              <div>No. of Owners</div>
              <div>KMs Driven</div>
              <div>Fuel Type</div>
            </li>
            <li>
              <div>2010</div>
              <div>4</div>
              <div>30,000</div>
              <div>Diesel</div>
            </li>
            <li>
              <div>2005</div>
              <div>2</div>
              <div>55,000</div>
              <div>Diesel</div>
            </li>
            <li>
              <div>2010</div>
              <div>1</div>
              <div>95,000</div>
              <div>Diesel</div>
            </li>
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
            <li>
              <div>TDCI Diesel Engine</div>
              <div>1.5KW</div>
              <div>4</div>
              <div>22.4kmpl</div>
              <div>25.83kmpl</div>
              <div>40 (Liters)</div>
              <div>5</div>
              <div>Manual</div>
            </li>
            <li>
              <div>TDCI Diesel Engine</div>
              <div>1.9KW</div>
              <div>5</div>
              <div>32.4kmpl</div>
              <div>48.83kmpl</div>
              <div>60 (Liters)</div>
              <div>5</div>
              <div>Automatic</div>
            </li>
            <li>
              <div>TDCI Diesel Engine</div>
              <div>1.6KW</div>
              <div>6</div>
              <div>21.4kmpl</div>
              <div>28.83kmpl</div>
              <div>42 (Liters)</div>
              <div>6</div>
              <div>Manual</div>
            </li>
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
            <li>
              <div><i class="fa fa-check" aria-hidden="true"></i></div>
              <div><i class="fa fa-check" aria-hidden="true"></i></div>
              <div><i class="fa fa-check" aria-hidden="true"></i></div>
              <div><i class="fa fa-check" aria-hidden="true"></i></div>
              <div><i class="fa fa-check" aria-hidden="true"></i></div>
              <div><i class="fa fa-check" aria-hidden="true"></i></div>
              <div><i class="fa fa-check" aria-hidden="true"></i></div>
              <div><i class="fa fa-check" aria-hidden="true"></i></div>
              <div><i class="fa fa-check" aria-hidden="true"></i></div>
              <div><i class="fa fa-check" aria-hidden="true"></i></div>
              <div><i class="fa fa-check" aria-hidden="true"></i></div>
              <div><i class="fa fa-check" aria-hidden="true"></i></div>
              <div><i class="fa fa-check" aria-hidden="true"></i></div>
              <div><i class="fa fa-check" aria-hidden="true"></i></div>
            </li>
            <li>
              <div><i class="fa fa-check" aria-hidden="true"></i></div>
              <div><i class="fa fa-check" aria-hidden="true"></i></div>
              <div><i class="fa fa-check" aria-hidden="true"></i></div>
              <div><i class="fa fa-check" aria-hidden="true"></i></div>
              <div><i class="fa fa-check" aria-hidden="true"></i></div>
              <div><i class="fa fa-check" aria-hidden="true"></i></div>
              <div><i class="fa fa-check" aria-hidden="true"></i></div>
              <div><i class="fa fa-check" aria-hidden="true"></i></div>
              <div><i class="fa fa-check" aria-hidden="true"></i></div>
              <div><i class="fa fa-check" aria-hidden="true"></i></div>
              <div><i class="fa fa-check" aria-hidden="true"></i></div>
              <div><i class="fa fa-close" aria-hidden="true"></i></div>
              <div><i class="fa fa-check" aria-hidden="true"></i></div>
              <div><i class="fa fa-check" aria-hidden="true"></i></div>
            </li>
            <li>
              <div><i class="fa fa-check" aria-hidden="true"></i></div>
              <div><i class="fa fa-check" aria-hidden="true"></i></div>
              <div><i class="fa fa-check" aria-hidden="true"></i></div>
              <div><i class="fa fa-check" aria-hidden="true"></i></div>
              <div><i class="fa fa-close" aria-hidden="true"></i></div>
              <div><i class="fa fa-check" aria-hidden="true"></i></div>
              <div><i class="fa fa-check" aria-hidden="true"></i></div>
              <div><i class="fa fa-close" aria-hidden="true"></i></div>
              <div><i class="fa fa-check" aria-hidden="true"></i></div>
              <div><i class="fa fa-check" aria-hidden="true"></i></div>
              <div><i class="fa fa-check" aria-hidden="true"></i></div>
              <div><i class="fa fa-close" aria-hidden="true"></i></div>
              <div><i class="fa fa-check" aria-hidden="true"></i></div>
              <div><i class="fa fa-check" aria-hidden="true"></i></div>
            </li>
          </ul>
        </div>
        <div class="inventory_info_list text-center">
          <ul>
            <li>&nbsp;</li>
            <li><a href="#" class="btn">View Detail</a></li>
            <li><a href="#" class="btn">View Detail</a></li>
            <li><a href="#" class="btn">View Detail</a></li>
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


<!--Footer -->
<footer>
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <h6>Top Categores</h6>
          <ul>
            <li><a href="#">Crossovers</a></li>
            <li><a href="#">Hybrids</a></li>
            <li><a href="#">Hybrid Cars</a></li>
            <li><a href="#">Hybrid SUVs</a></li>
            <li><a href="#">Concept Vehicles</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-6">
          <h6>About Us</h6>
          <ul>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Hybrid Cars</a></li>
            <li><a href="#">Cookies</a></li>
            <li><a href="#">Trademarks</a></li>
            <li><a href="#">Terms of use</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-6">
          <h6>Useful Links</h6>
          <ul>
            <li><a href="#">Our Partners</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Sitemap</a></li>
            <li><a href="#">Investors</a></li>
            <li><a href="#">Request a Quote</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-6">
          <h6>Subscribe Newsletter</h6>
          <div class="newsletter-form">
            <form action="#">
              <div class="form-group">
                <input type="email" class="form-control newsletter-input" required placeholder="Enter Email Address" />
              </div>
              <button type="submit" class="btn btn-block">Subscribe <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </form>
            <p class="subscribed-text">*We send great deals and latest auto news to our subscribed users very week.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-push-6 text-right">
          
          <div class="footer_widget">
            <p>Connect with Us:</p>
            <ul>
              <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-md-pull-6">
          <p class="copy-right">Copyright &copy; 2017 CarAdviserCorp. All Rights Reserved</p>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- /Footer--> 

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