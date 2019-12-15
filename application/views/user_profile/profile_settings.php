<?php foreach($user_data as $login_user){}?> 

<!--Page Header-->
<section class="page-header profile_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Your Profile</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>Profile</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 

<!--Profile-setting-->
<section class="user_profile inner_pages">
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
          <h5 class="uppercase underline">Genral Settings</h5>
          <form action="<?php echo base_url() ?>profile_update" method="post">
            <div class="form-group">
              <label class="control-label">Full Name</label>
              <input class="form-control white_bg" name="name" id="fullname" type="text" value="<?php echo $login_user->name; ?>">
            </div>
            <div class="form-group">
              <label class="control-label">Email Address</label>
              <input class="form-control white_bg" id="email" type="email" readonly value="<?php echo $login_user->email; ?>">
            </div>
            <div class="form-group">
              <label class="control-label">Phone Number</label>
              <input class="form-control white_bg" id="phone-number" name="phone_no" value="<?php echo $login_user->phone_no; ?>" type="text">
            </div>
            <div class="form-group">
              <label class="control-label">Date of Birth</label>
              <input class="form-control white_bg" id="birth-date" name="dob" value="<?php echo $login_user->dob; ?>" type="text">
            </div>
            <div class="form-group">
              <label class="control-label">Your Address</label>
              <textarea class="form-control white_bg" name="address"  rows="4"><?php echo $login_user->address; ?></textarea>
            </div>
            <div class="form-group">
              <label class="control-label">Country</label>
              <input class="form-control white_bg" id="country" value="<?php echo $login_user->country; ?>" name="country" type="text">
            </div>
            <div class="form-group">
              <label class="control-label">City</label>
              <input class="form-control white_bg" id="city" value="<?php echo $login_user->city; ?>" name="city" type="text">
            </div>
            <div class="gray-bg field-title">
              <h6>Update password</h6>
            </div>
            <div class="form-group">
              <label class="control-label">Password</label>
              <input class="form-control white_bg" id="password" type="password" name="password" >
            </div>
            <div class="gray-bg field-title">
              <h6>Social Links</h6>
            </div>
            <div class="form-group">
              <label class="control-label">Facebook ID</label>
              <input class="form-control white_bg" id="facebook" value="<?php echo $login_user->fb_id; ?>" type="text" name="fb_id">
            </div>
            <div class="form-group">
              <label class="control-label">Twitter ID</label>
              <input class="form-control white_bg" name="twitter_id" value="<?php echo $login_user->twitter_id; ?>" id="twitter" type="text">
            </div>
            <div class="form-group">
              <label class="control-label">Linkedin ID</label>
              <input class="form-control white_bg" name="linkedin_id" value="<?php echo $login_user->linkedin_id; ?>" id="linkedin" type="text">
            </div>
            <div class="form-group">
              <label class="control-label">Google+ ID</label>
              <input class="form-control white_bg" id="google" value="<?php echo $login_user->gplus_id; ?>" name="gplus_id" type="text">
            </div>
            <div class="form-group">
              <button type="submit" class="btn">Save Changes <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/Profile-setting--> 

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

