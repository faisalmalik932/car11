
<!--Page Header-->
<section class="page-headert listing_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1><?php echo @ucfirst($recent_listings[0]->type)?> Listing</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="#">Home</a></li>
        <li><?php echo @ucfirst($recent_listings[0]->type)?> Listing</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 

<!--Listing-->
<section class="listing-page">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-md-push-3">
        <div class="result-sorting-wrapper">
          <div class="sorting-count">
            <p>5 <span>Listings Per Page <?php echo @$count2 ?> </span></p>

          </div>
          <div class="result-sorting-by">
            <p>Sort by:</p>
            <form action="#" method="post">
              <div class="form-group select sorting-select">
                <select class="form-control ">
                  <option>Price (low to high)</option>
                  <option>$100 to $500</option>
                  <option>$500 to $1000</option>
                  <option>$1000 to $1500</option>
                  <option>$1500 to $2000</option>
                </select>
              </div>
            </form>
          </div>
        </div>
      <!--Foreach Loop -->
      <?php foreach($recent_listings as $listing):?>

        <div class="product-listing-m gray-bg">
          <div class="product-listing-img"> <a href="<?php echo base_url() ?>detail?vehicle=<?php echo $listing->id ?>" target="_blank"><img src="<?php echo base_url() ?>frontend/vehicles_images/<?php echo $listing->pic; ?>" class="img-responsive" alt="Image" /> </a>
            <div class="label_icon">New</div>
            <div class="compare_item">
              <div class="checkbox">
                <form action="<?php echo base_url() ?>compare" method="POST">
                          <input type="checkbox" id="compare<?php echo $listing->vehicle_id; ?>" onChange="this.form.submit()">
                          <input type="hidden" name="compare_checkbox_value" value="<?php echo $listing->vehicle_id; ?>">
                          <label for="compare<?php echo $listing->vehicle_id; ?>">Compare</label>
                        </form>
              </div>
            </div>
          </div>
          <div class="product-listing-content">
            <h5><a href="#"><?php echo $listing->title?></a></h5>
            <p class="list-price">$<?php echo $listing->price?></p>
            <ul>
              <li><i class="fa fa-road" aria-hidden="true"></i><?php echo $listing->kms?> km</li>
              <li><i class="fa fa-tachometer" aria-hidden="true"></i><?php echo $listing->kms?> miles</li>
              <li><i class="fa fa-user" aria-hidden="true"></i><?php echo $listing->seat_capacity?> seats</li>
              <li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $listing->model?> model</li>
              <li><i class="fa fa-car" aria-hidden="true"></i><?php echo $listing->fuel_type?></li>
              <li><i class="fa fa-superpowers" aria-hidden="true"></i><?php echo $listing->mileage_highway?> kW</li>
            </ul>
            <a href="<?php echo base_url() ?>detail?vehicle=<?php echo $listing->vehicle_id ?>" class="btn" target="_blank">View Details <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
            <div class="car-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i> Colorado, USA</span></div>
          </div>
        </div>
        
        <?php endforeach; ?>
        <!--/Foreach Loop -->
        
        <div class="pagination">
            <ul>
              <li>1</li>
            </ul>
        </div>
      </div>
      
<!-- Aside -->
<?php include('aside.php'); ?>
<!-- End Aside  -->
    
    </div>
  </div>
</section>
<!-- /Listing--> 

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

