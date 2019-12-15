<!DOCTYPE HTML>
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Car Adviser Corp</title>
<!--Bootstrap -->
<link rel="stylesheet" href="<?php echo base_url() ?>frontend/assets/css/bootstrap.min.css" type="text/css">
<!--Custome Style -->
<link rel="stylesheet" href="<?php echo base_url() ?>frontend/assets/css/style.css" type="text/css">
<!--OWL Carousel slider-->
<link rel="stylesheet" href="<?php echo base_url() ?>frontend/assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url() ?>frontend/assets/css/owl.transitions.css" type="text/css">
<!--slick-slider -->
<link href="<?php echo base_url() ?>frontend/assets/css/slick.css" rel="stylesheet">
<!--bootstrap-slider -->
<link href="<?php echo base_url() ?>frontend/assets/css/bootstrap-slider.min.css" rel="stylesheet">
<!--FontAwesome Font Style -->
<link href="<?php echo base_url() ?>frontend/assets/css/font-awesome.min.css" rel="stylesheet">

<!-- SWITCHER -->
    <link rel="stylesheet" id="switcher-css" type="text/css" href="<?php echo base_url() ?>frontend/assets/switcher/css/switcher.css" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url() ?>frontend/assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url() ?>frontend/assets/switcher/css/orange.css" title="orange" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url() ?>frontend/assets/switcher/css/blue.css" title="blue" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url() ?>frontend/assets/switcher/css/pink.css" title="pink" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url() ?>frontend/assets/switcher/css/green.css" title="green" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url() ?>frontend/assets/switcher/css/purple.css" title="purple" media="all" />
        
<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url() ?>frontend/assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url() ?>frontend/assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url() ?>frontend/assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo base_url() ?>frontend/assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="<?php echo base_url() ?>frontend/assets/images/favicon-icon/favicon.png">
<!-- Google-Font-->
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->  
<!-- Base MasterSlider style sheet -->
<link rel="stylesheet" href="<?php echo base_url() ?>frontend/masterslider/masterslider/style/masterslider.css" />
 
<!-- Master Slider Skin -->
<link href="<?php echo base_url() ?>frontend/masterslider/masterslider/skins/default/style.css" rel="stylesheet" type="text/css">
  
<!-- Home slider style -->
<link rel="stylesheet" href="<?php echo base_url() ?>frontend/masterslider/homeslider/style/style.css">

</head>
<body>
        
<!--Header-->
<header>
  <div class="default-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-2">
          <div class="logo"> <a href="<?php echo base_url()?>"><img src="<?php echo base_url()?>frontend/assets/images/logo.png" alt="image"/></a> </div>
        </div>
        <div class="col-sm-9 col-md-10">
          <div class="header_info">
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
              <p class="uppercase_text">For Support Mail us: </p>
              <a href="mailto:info@caradvisercorp.com">info@caradviserorp.com</a> </div>
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
              <p class="uppercase_text">Service Helpline Call Us: </p>
              <a href="tel:61-1234-5678-09">+61-1234-5678-9</a> </div>
            <div class="social-follow">
              <ul>
                <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              </ul>
            </div>
            <?php if(!$this->session->userdata('user_logged_in'))
              {
            ?>
            <div class="login_btn"> <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Login / Register</a> </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Navigation -->
  <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="header_wrap">
        <?php foreach($user_data as $login_user){}?> 
        <?php if($this->session->userdata('user_logged_in'))
          {  
          ?>
        <div class="user_login">
          <ul>
            <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i> <?php echo $login_user->name; ?> <i class="fa fa-angle-down" aria-hidden="true"></i></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url() ?>profile">Profile Settings</a></li>
                <!-- <li><a href="<?php //echo base_url() ?>vehicle/my_vehicles">My Vehicles</a></li>
                <li><a href="<?php //echo base_url() ?>vehicle/post_vehicles">Post a Vehicle</a></li> -->
                <li><a href="<?php echo base_url() ?>logout">Sign Out</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <?php } ?>
        <div class="header_search">
          <div id="search_toggle"><i class="fa fa-search" aria-hidden="true"></i></div>
          <?php  $value=$this->input->get('name') ?>
          
          <form action="<?php echo base_url() ?>search/" method="post"  id="header-search-form" >
                    <!--  <input type="text" name="search_term"  placeholder="Search..." class="form-control"> -->

             <input type="text" name="search_term"  placeholder="Search..." class="form-control">
            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
          </form>

        </div>
      </div>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="nav navbar-nav">
          <li><a class="active" href="<?php echo base_url(); ?>">Home</a></li>
          <li ><a href="<?php echo base_url() ?>about_us">About Us</a></li>
          <li class="dropdown"><a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Inventory</a>
             <ul class="dropdown-menu">
              <li><a href="<?php echo base_url() ?>listings/newcar">New Cars</a></li>
             <li><a href="<?php echo base_url() ?>listings/usedcar">Used Cars</a></li>
              <li><a href="<?php echo base_url() ?>listings/rvscar">Rvs</a></li>
              <li><a href="<?php echo base_url() ?>listings/classiccar">Classic Cars</a></li>
              <li><a href="<?php echo base_url() ?>listings/motorcycle">Motorcycles</a></li>
              <li><a href="<?php echo base_url() ?>listings/truck">Trucks</a></li>

              </ul>
            </li>
            <li><a href="<?php echo base_url() ?>faq">FAQ</a></li>
            <li><a href="#">Request a Quote</a></li>
            <li><a href="<?php echo base_url() ?>contact">Contact Us</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>