
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
          <p class="copy-right">Copyright &copy; 2019 CarAdviserCorp. All Rights Reserved</p>
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
        <?php if($this->session->flashdata('successfully_registered'))
          { ?>
        <h4 class="modal-title alert alert-success">
              <?php echo $this->session->flashdata('successfully_registered'); ?>
        </h4>
        <?php } ?>
        <?php if($this->session->flashdata('email_already_exist') || $this->session->flashdata('wrong_email_password'))
          { ?>
        <h4 class="modal-title alert alert-danger">
              <?php echo $this->session->flashdata('email_already_exist'); ?>
              <?php echo $this->session->flashdata('wrong_email_password'); ?>
    <?php }?>
        </h4>

  <?php if(!$this->session->flashdata())
  {
    echo "<h3 class='modal-title'>Login</h3>";
  } ?>
     </div>
      <div class="modal-body">
        <div class="row">
          <div class="login_wrap">
            <div class="col-md-6 col-sm-6">
              <form action="<?php base_url() ?>login" method="post">
                <div class="form-group">
                  <input type="text" class="form-control" name="email" placeholder="Username or Email address*" required="required">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control" placeholder="Password*" required="required">
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
            <!-- <div class="col-md-6 col-sm-6">
              <h6 class="gray_text">Login the Quick Way</h6>
              <a href="#" class="btn btn-block facebook-btn"><i class="fa fa-facebook-square" aria-hidden="true"></i> Login with Facebook</a> <a href="#" class="btn btn-block twitter-btn"><i class="fa fa-twitter-square" aria-hidden="true"></i> Login with Twitter</a> <a href="#" class="btn btn-block googleplus-btn"><i class="fa fa-google-plus-square" aria-hidden="true"></i> Login with Google+</a> </div> -->
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
              <form action="<?php echo base_url() ?>register" method="post">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" placeholder="Full Name" required="required">
                </div>
                <div class="form-group">
                  <select class="form-control" name="type">
<?php foreach($account_type as $account):?>
                    <option value="<?php echo $account->id;?>"><?php echo ucfirst($account->name);?></option>
<?php endforeach; ?>         
                  </select>
                </div>
                <div class="form-group">
                  <input type="email" name="email" class="form-control" placeholder="Email Address" required="required">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control" placeholder="Password" required="required">
                </div>
                <div class="form-group">
                  <input type="password" name="password_confirm" class="form-control" placeholder="Confirm Password" required="required">
                </div>
                <div class="form-group checkbox">
                  <input type="checkbox" id="terms_agree" required="required">
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
<script src="<?php echo base_url() ?>frontend/assets/js/jquery.min.js"></script>
<script src="<?php echo base_url() ?>frontend/assets/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url() ?>frontend/assets/js/interface.js"></script> 
<!--Switcher-->
<script src="<?php echo base_url() ?>frontend/assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS--> 
<script src="<?php echo base_url() ?>frontend/assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="<?php echo base_url() ?>frontend/assets/js/slick.min.js"></script> 
<script src="<?php echo base_url() ?>frontend/assets/js/owl.carousel.min.js"></script>
<!-- jQuery -->

<script src="<?php echo base_url() ?>frontend/masterslider/masterslider/jquery.easing.min.js"></script>
 
<!-- Master Slider -->
<script src="<?php echo base_url() ?>frontend/masterslider/masterslider/masterslider.js"></script>

<script type="text/javascript">		
	    var slider = new MasterSlider();

	    // adds Arrows navigation control to the slider.
	    slider.control('arrows');
	    slider.control('timebar' , {insertTo:'#masterslider'});
	    slider.control('bullets');

	     slider.setup('masterslider' , {
	         width:1400,    // slider standard width
	         height:580,   // slider standard height
	         space:1,
	         layout:'fullwidth',
	         loop:true,
	         preload:0,
	         autoplay:true
	    });
	    
	    SyntaxHighlighter.all();
	</script>
  
  <?php if($this->session->flashdata())
          { ?>
  <script type="text/javascript">
$('#loginform').modal('show');
  </script>
<?php } ?>

 <script type="text/javascript">
   $(function() {
      var pgurl = window.location.href.substr(window.location.href
         .lastIndexOf("/") + 1);
      var pgurl2 = window.location.href.substr(window.location.href);
      $(".profile_nav ul li a").each(function() {
         if ($(this).attr("href") == pgurl2)
           $(this).addClass("active");
      })
   });
   </script>

</body>

</html>