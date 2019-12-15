<!--Page Header-->
<section class="page-header profile_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>My Vehicle</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li>My Vehicle</li>
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
          <h5 class="uppercase underline">My Vehicles <span>(<?php echo @$count ?> Cars)</span></h5>
          <div class="my_vehicles_list">
            <ul class="vehicle_listing">
              
              <?php foreach ($my_vehicles as $vehicle):?>
              <li class="<?php echo $vehicle->status==0?"deactive_vehicle":"" ?>">
                <div class="vehicle_img"> <a href="#"><img src="<?php echo base_url() ?>frontend/vehicles_images/<?php echo $vehicle->pic; ?>" alt="image" style="max-height: 100px;"></a> </div>
                <div class="vehicle_title">
                  <h6><a href="#"><?php echo $vehicle->title ?></a></h6>
                </div>
                <div class="vehicle_status"> <a href="<?php echo base_url() ?>vehicle/status/<?php echo $vehicle->id; ?>/<?php echo $vehicle->status==0?1:0?>" class="btn outline btn-xs active-btn"><?php echo $vehicle->status==0?"Active":"Deactive" ?></a>
                  <div class="clearfix"></div>
                  <a href="<?php echo base_url();?>vehicle/update_vehicles/<?php echo $vehicle->id;?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> <a href="<?php echo base_url()?>vehicle/delete/<?php echo $vehicle->id;?>"><i class="fa fa-trash" aria-hidden="true"></i></a> </div>
              </li>
              <?php endforeach; ?>

            </ul>
            <div class="pagination">
              <ul>
                  <?php echo $links; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/my-vehicles--> 

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

