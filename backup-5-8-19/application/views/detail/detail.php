<?php 
foreach($vehicle_detail as $vehicle)
{}

?>
<!-- Listing-detail-header -->
<section class="listing_detail_header">
  <div class="container">
    <div class="listing_detail_head white-text div_zindex row">
      <div class="col-md-9">
        <h2><?php echo $vehicle->title;?></h2>
        <div class="car-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i> 12250 F Garvey Ave South West Covina, CA 91791</span></div>
        <div class="add_compare">
          <div class="share_vehicle">
            <p>Share: <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a> </p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="price_info">
          <p><?php echo $vehicle->price;?></p>
          <!-- <p class="old_price">$95,000</p> -->
        </div>
      </div>
    </div>
  </div>
  <div class="dark-overlay"></div>
</section>
<!-- /Listing-detail-header -->

<section class="listing_other_info secondary-bg">
  <div class="container">
    <div id="filter_toggle" class="search_other"> <i class="fa fa-filter" aria-hidden="true"></i> Search Car </div>
    <div id="other_info"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
    <div id="info_toggle">
      <button type="button" data-toggle="modal" data-target="#make_offer"> <i class="fa fa-money" aria-hidden="true"></i> Make an Offer </button>
      <button type="button" data-toggle="modal" data-target="#more_info"> <i class="fa fa-file-text-o" aria-hidden="true"></i> Request More Info </button>
    </div>
  </div>
</section>

<!-- Filter-Form -->
<section id="filter_form" class="inner-filter gray-bg">
  <div class="container">
    <h3>Find Your Dream Car <span>(Easy search from here)</span></h3>
    <div class="row">
      <form action="#" method="get">
        <div class="form-group col-md-2 col-sm-6 black_input">
          <div class="select">
            <select class="form-control">
              <option value="">Select Location </option>
              <option value="">Location 1 </option>
              <option value="">Location 1 </option>
            </select>
          </div>
        </div>
        <div class="form-group col-md-3 col-sm-6 black_input">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Enter Zip Code" id="Zip">
          </div>
        </div>
       
        <div class="form-group col-md-3 col-sm-6 black_input">
          <div class="select">
            <select class="form-control">
              <option>Select Brand</option>
              <option>Audi</option>
              <option>Acura</option>
              <option>Alfa Romeo</option>
              <option>Aston Martin</option>
              <option>BMW</option>
              <option>Bentley</option>
              <option>Bugatti</option>
              <option>Buick</option>
              <option>Ford</option>
              <option>Land Rover</option>
              <option>Porsche</option>
              <option>GMC</option>
              <option>Lexus</option>
              <option>Ram</option>
              <option>Genesis</option>
              <option>Lincoln</option>
              <option>Scion</option>
              <option>Honda</option>
              <option>MINI</option>
              <option>Subaru</option>
              <option>Cadillac</option>
              <option>Hyundai</option>
              <option>Maserati</option>
              <option>Toyota</option>
              <option>Chevrolet</option>
              <option>Infiniti</option>
              <option>Mazda</option>
              <option>Volkswagen</option>
              <option>Chrysler</option>
              <option>Jaguar</option>
              <option>Mercedes-Benz</option>
              <option>Volvo</option>
              <option>Dodge</option>
              <option>Jeep</option>
              <option>Mitsubishi</option>
              <option>smart</option>
              <option>FIAT</option>
              <option>Kia</option>
              <option>Nissan</option>
            </select>
          </div>
        </div>
        <div class="form-group col-md-2 col-sm-6 black_input">
          <div class="select">
            <select class="form-control">
              <option>Select Model</option>
              <option>Series 1</option>
              <option>Series 2</option>
              <option>Series 3</option>
            </select>
          </div>
        </div>
        <div class="form-group col-md-2 col-sm-6 black_input">
          <div class="select">
            <select class="form-control">
              <option>Year of Model </option>
              <option>2016</option>
              <option>2015</option>
              <option>2014</option>
            </select>
          </div>
        </div>
    
         
        </form>
      </div>
       <div class="row">
      <form action="#" method="get">
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
          <button type="submit" class="btn btn-block"><i class="fa fa-search" aria-hidden="true"></i><a href="listing-classic.html" style="color: white;">Search Car </a> </button>
        </div>
      </form>
    </div>
  </div>
</section>
<!-- /Filter-Form --> 

<!--Listing-detail-->
<section class="listing-detail">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="listing_images">
          <div class="listing_images_slider">
            <div><img src="<?php echo base_url() ?>frontend/vehicles_images/<?php echo $vehicle->pic?>" alt="image"></div>
            <?php 
            if (!empty($vehicle_multipleimg)) 
            {
              foreach($vehicle_multipleimg as $multiple_img)
            {?>
              <div><img src="<?php echo base_url() ?>frontend/multiimages/<?php echo $multiple_img?>" alt="image"></div>
            <?php } }?>
          </div>
          <div class="listing_images_slider_nav">
            <div><img src="<?php echo base_url() ?>frontend/vehicles_images/<?php echo $vehicle->pic?>" alt="image"></div>
            <?php 
            if (!empty($vehicle_multipleimg)) 
            {
              foreach($vehicle_multipleimg as $multiple_img)
            {?>
              <div><img src="<?php echo base_url() ?>frontend/multiimages/<?php echo $multiple_img?>" alt="image"></div>
            <?php } }?>
              
          </div>
        </div>
        <div class="main_features">
          <ul>
            <li> <i class="fa fa-tachometer" aria-hidden="true"></i>
              <h5><?php echo $vehicle->kms?></h5>
              <p>Total Kilometres</p>
            </li>
            <li> <i class="fa fa-calendar" aria-hidden="true"></i>
              <h5><?php echo $vehicle->model_year?></h5>
              <p>Reg.Year</p>
            </li>
            <li> <i class="fa fa-cogs" aria-hidden="true"></i>
              <h5><?php echo $vehicle->fuel_type?></h5>
              <p>Fuel Type</p>
            </li>
            <li> <i class="fa fa-power-off" aria-hidden="true"></i>
              <h5><?php echo $vehicle->transmission?></h5>
              <p>Transmission</p>
            </li>
            <li> <i class="fa fa-superpowers" aria-hidden="true"></i>
              <h5><?php echo $vehicle->engien_type?></h5>
              <p>Engine</p>
            </li>
            <li> <i class="fa fa-user-plus" aria-hidden="true"></i>
              <h5><?php echo $vehicle->seat_capacity?></h5>
              <p>Seats</p>
            </li>
          </ul>
        </div>
        <div class="listing_more_info">
          <div class="listing_detail_wrap"> 
            <!-- Nav tabs -->
            <ul class="nav nav-tabs gray-bg" role="tablist">
              <li role="presentation" class="active"><a href="#vehicle-overview " aria-controls="vehicle-overview" role="tab" data-toggle="tab">Vehicle Overview </a></li>
              <li role="presentation"><a href="#specification" aria-controls="specification" role="tab" data-toggle="tab">Technical Specification</a></li>
              <li role="presentation"><a href="#accessories" aria-controls="accessories" role="tab" data-toggle="tab">Accessories</a></li>
            </ul>
            
            <!-- Tab panes -->
            <div class="tab-content"> 
              <!-- vehicle-overview -->
              <div role="tabpanel" class="tab-pane active" id="vehicle-overview">
                <h4><?php echo $vehicle->title?></h4>
                <p><?php echo $vehicle->discription?></p>
              </div>
              
              <!-- Technical-Specification -->
              <div role="tabpanel" class="tab-pane" id="specification">
                <div class="table-responsive"> 
                  <!--Basic-Info-Table-->
                  <table>
                    <thead>
                      <tr>
                        <th colspan="2">BASIC INFO</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Model Year</td>
                        <td><?php echo $vehicle->model?></td>
                      </tr>
                      <tr>
                        <td>No. of Wheels</td>
                        <td><?php echo $vehicle->wheeler?></td>
                      </tr>
                      <tr>
                        <td>KMs Driven</td>
                        <td><?php echo $vehicle->kms?></td>
                      </tr>
                      <tr>
                        <td>Fuel Type</td>
                        <td><?php echo $vehicle->fuel_type?></td>
                      </tr>
                    </tbody>
                  </table>
                  
                  <!--Technical-Specification-Table-->
                  <table>
                    <thead>
                      <tr>
                        <th colspan="2">Technical Specification</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Engine Type</td>
                        <td><?php echo $vehicle->engien_type?></td>
                      </tr>
                      <tr>
                        <td>Seating Capacity</td>
                        <td><?php echo $vehicle->seat_capacity?></td>
                      </tr>
                      <tr>
                        <td>Transmission Type</td>
                        <td><?php echo $vehicle->transmission?></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              
              <!-- Accessories -->
              <div role="tabpanel" class="tab-pane" id="accessories"> 
                <!--Accessories-->
                <table>
                  <thead>
                    <tr>
                      <th colspan="2">Accessories</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Air Conditioner</td>
                      <td><i class="fa fa-<?php echo $vehicle->ac==1?"check":"close" ?>" aria-hidden="true"></i></td>
                    </tr>
                    <tr>
                      <td>AntiLock Braking System</td>
                      <td><i class="fa fa-<?php echo $vehicle->abs==1?"check":"close" ?>" aria-hidden="true"></i></td>
                    </tr>
                    <tr>
                      <td>Power Steering</td>
                      <td><i class="fa fa-<?php echo $vehicle->power_steering==1?"check":"close" ?>" aria-hidden="true"></i></td>
                    </tr>
                    <tr>
                      <td>Power Windows</td>
                      <td><i class="fa fa-<?php echo $vehicle->power_window==1?"check":"close" ?>" aria-hidden="true"></i></td>
                    </tr>
                    <tr>
                      <td>CD Player</td>
                      <td><i class="fa fa-<?php echo $vehicle->cd==1?"check":"close" ?>" aria-hidden="true"></i></td>
                    </tr>
                    <tr>
                      <td>Leather Seats</td>
                      <td><i class="fa fa-<?php echo $vehicle->leather_seats==1?"check":"close" ?>" aria-hidden="true"></i></td>
                    </tr>
                    <tr>
                      <td>Central Locking</td>
                      <td><i class="fa fa-<?php echo $vehicle->central_lock==1?"check":"close" ?>" aria-hidden="true"></i></td>
                    </tr>
                    <tr>
                      <td>Power Door Locks</td>
                      <td><i class="fa fa-<?php echo $vehicle->power_door==1?"check":"close" ?>" aria-hidden="true"></i></td>
                    </tr>
                    
                    <tr>
                      <td>Automatic Headlamps</td>
                      <td><i class="fa fa-<?php echo $vehicle->auto_headlamp==1?"check":"close" ?>" aria-hidden="true"></i></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          
       
        </div>
         
      </div>
      
      <!--Side-Bar-->
      <aside class="col-md-3">
        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-envelope" aria-hidden="true"></i>Order Now</h5>
          </div>
          <form action="<?php echo base_url('orders/insert');?>" method="post">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Name" name="name">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
             <div class="form-group">
              <input type="text" class="form-control" name="phone" placeholder="#">
            </div>
            <div class="form-group">
              <textarea rows="4" class="form-control" name="message" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-block">
            </div>
            <input type="hidden" name="vehicle_id" value="<?php echo $vehicle->vehicle_id?>">
          </form>
        </div>
      </aside>
      <!--/Side-Bar--> 
      
    </div>
    <div class="space-20"></div>
    <div class="divider"></div>
    
    <!--Similar-Cars-->
    <div class="similar_cars">
      <h3>Similar Cars</h3>
      <div class="row">
<?php 
 foreach ($vehicle_related as $vehicle_relate) 
{?>
        <div class="col-md-3 grid_listing">
          <div class="product-listing-m gray-bg">
            <div class="product-listing-img"> <a href="<?php echo base_url() ?>detail?vehicle=<?php echo $vehicle_relate->vehicle_id; ?>"><img src="<?php echo base_url() ?>frontend/vehicles_images/<?php echo $vehicle_relate->pic?>" class="img-responsive" alt="image" /> </a>
              <div class="label_icon">New</div>
                <div class="compare_item">
                <div class="checkbox">
                  <form action="<?php echo base_url() ?>compare" method="POST">
                      <input type="checkbox" id="compare<?php echo $vehicle_relate->vehicle_id; ?>" onChange="this.form.submit()">
                      <input type="hidden" name="compare_checkbox_value" value="<?php echo $vehicle_relate->vehicle_id; ?>">
                        <label for="compare<?php echo $vehicle_relate->vehicle_id; ?>">Compare</label>
                      </form>
                </div>
          </div>
            </div>

            <div class="product-listing-content">
              <h5><a href="<?php echo base_url() ?>detail?vehicle=<?php echo $vehicle_relate->vehicle_id; ?>"><?php echo $vehicle_relate->title?></a>
                <span class="price" style="float:right; color: #555555; font-weight:400">$<?php echo $vehicle_relate->price?></span>
              </h5>
              
              
              <ul class="features_list">
                <li><i class="fa fa-road" aria-hidden="true"></i><?php echo $vehicle_relate->kms?></li>
                <li><i class="fa fa-tachometer" aria-hidden="true"></i>30.000 miles</li>
                <li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $vehicle_relate->model?></li>
                <li><i class="fa fa-car" aria-hidden="true"></i><?php echo $vehicle_relate->fuel_type?></li>
              </ul>
            </div>
          </div>
        </div>
<?php }?>
      </div>
    </div>
    <!--/Similar-Cars--> 
    
  </div>
</section>
<!--/Listing-detail--> 

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

