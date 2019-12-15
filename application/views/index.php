
<!-- masterslider -->
<div class="master-slider ms-skin-default" id="masterslider">

<?php
foreach ($data_slides as $slides) 
{
?>
    <!-- new slide -->
    <div class="ms-slide slide-2" data-delay="10">
        
        <!-- slide background -->
        <img src="" data-src="<?php echo base_url() ?>frontend/vehicles_slider/<?php echo $slides->background?>" alt="Slide background"/>     
        
        <h3 class="ms-layer hps-title1"
			style="left: 436px;top: 89px;"
			data-type="text"
			data-delay="1500"
		 	data-duration="2800"
		 	data-ease="easeOutExpo"
		 	data-effect="rotatefront(-40,900,tr)"
		>
			<?php echo $slides->caption1?>
		</h3>
		
		<h3 class="ms-layer hps-title2"
			style="left: 445px;top: 146px;"
			data-type="text"
			data-delay="2200"
		 	data-duration="2000"
		 	data-ease="easeOutExpo"
		 	data-effect="rotate3dright(10,50,0,50)"
		>
			<?php echo $slides->caption2?>
		</h3>

		<img src="" data-src="<?php echo base_url() ?>frontend/vehicles_slider/<?php echo $slides->image1?>" alt="Master Slider in iMac"
		 	  style="left:760px; top:157px;"
		 	  class="ms-layer"
		 	  data-type="image"
		 	  data-delay="600"
		 	  data-duration="2500"
		 	  data-ease="easeOutExpo"
		 	  data-effect="scalefrom(1.1,1.1,190,0)"
		 />

		 <img src="" data-src="<?php echo base_url() ?>frontend/vehicles_slider/<?php echo $slides->image2?>" alt="Master Slider in iPhone"
		 	  style="left:146px; top:215px;"
		 	  class="ms-layer"
		 	  data-type="image"
		 	  data-delay="3000"
		 	  data-duration="3000"
		 	  data-ease="easeOutExpo"
		 	  data-effect="from(-30,350,false)"
		/>
                 
    </div>
    <!-- end of slide -->
    <?php } ?>

</div>
<!-- end of masterslider -->
	
	



<div class="container">
<div class="row">
	<div class="col-md-12 pad">
		
		<h3 class="text-center">Find Your Dream vehicle </h3>
		
	</div>
	</div>
<div class="row">
	<div class="col-md-2 col-xs-4 image">
		<a href="<?php echo base_url() ?>listings/newcar"><img class="img-responsive" src="<?php echo base_url() ?>frontend/assets/images/New car.png" alt="new-car">
		<h6 class="text-center">New Car</h6>
		</a>
	</div>
	<div class="col-md-2 col-xs-4 image">
	<a href="<?php echo base_url() ?>listings/usedcar"><img class="img-responsive" src="<?php echo base_url() ?>frontend/assets/images/Used car.png" alt="new-car"><h6 class="text-center">Used Car</h6></a>	
	</div>
	<div class="col-md-2 col-xs-4 image">
		<a href="<?php echo base_url() ?>listings/motorcycle"><img class="img-responsive" src="<?php echo base_url() ?>frontend/assets/images/bike1.png" alt="new-car"><h6 class="text-center">Motorcycle</h6></a>
	</div>
	<div class="col-md-2 col-xs-4 image">
		<a href="<?php echo base_url() ?>listings/truks"><img class="img-responsive" src="<?php echo base_url() ?>frontend/assets/images/truck.png" alt="new-car"><h6 class="text-center">Trucks</h6></a>
	</div>
	<div class="col-md-2 col-xs-4 image">
		<a href="<?php echo base_url() ?>listings/rvccar"><img class="img-responsive" src="<?php echo base_url() ?>frontend/assets/images/RV.png" alt="new-car"><h6 class="text-center">RV</h6></a>
	</div>
	<div class="col-md-2 col-xs-4 image">
		<a href="<?php echo base_url() ?>listings/classiccar"><img class="img-responsive" src="<?php echo base_url() ?>frontend/assets/images/classic car.png" alt="new-car"><h6 class="text-center">Classic Car</h6></a>
	</div>
</div>
	
</div>
<br><br><br>

<!-- Resent Cat-->
<section class="section-padding gray-bg">
  <div class="container">
    <div class="section-header text-center">
      <h2>Find the Best <span>CarForYou</span></h2>
      <p>At Car Adviser Corp we don't just offer you a chance to get the best the deals; we also continue to work hard to ensure that any automobile you desire is just one simple search away. So wouldn't you rather join the train? 
</p>
    </div>

<!-- Row for cars used and new -->
<div class="row"> 
	    <!-- Nav tabs -->
	<div class="recent-tab">
		<ul class="nav nav-tabs" role="tablist">
	    	<li role="presentation" class="active"><a href="#resentnewcar" role="tab" data-toggle="tab">New Arrival</a></li>
	    	<li role="presentation"><a href="#resentusecar" role="tab" data-toggle="tab">Used Car</a></li>
	    </ul>
	</div>
	<!-- Recently Listed New Cars -->
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="resentnewcar">    
	<!--Foreach Loop -->
	<?php 
$count_compare=0;
	foreach($recent_new as $newcar):?>
	<!--div for list view -->
			<div class="col-list-3"> 
	            <div class="recent-car-list">
					<div class="car-info-box"> <a href="<?php echo base_url() ?>detail?vehicle=<?php echo $newcar->vehicle_id; ?>" target="_blank"><img src="<?php echo base_url() ?>frontend/vehicles_images/<?php echo $newcar->pic; ?>" class="img-responsive" alt="loading" style="min-height:268px; max-height: 268px"></a>
		                <div class="compare_item">
		                  <div class="checkbox">
		                  	<form action="<?php echo base_url() ?>compare" method="POST">
		                  		<input type="checkbox" id="compare<?php echo $newcar->vehicle_id; ?>" onChange="this.form.submit()">
		                  		<input type="hidden" name="compare_checkbox_value" value="<?php echo $newcar->vehicle_id; ?>">
		                    	<label for="compare<?php echo $newcar->vehicle_id; ?>">Compare</label>
		                  	</form>
		                  </div>
		                </div>
		                <ul>
		                  <li><i class="fa fa-road" aria-hidden="true"></i><?php echo $newcar->kms?> Mile</li>
		                  <li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $newcar->model?> Model</li>
		                  <li><i class="fa fa-map-marker" aria-hidden="true"></i>Colorado, USA</li>
		                </ul>
	              </div>
	              <div class="car-title-m">
	                <h6><a href="<?php echo base_url() ?>detail?vehicle=<?php echo $newcar->vehicle_id; ?>" target="_blank"><?php echo $newcar->title?></a></h6>
	                <span class="price">$<?php echo $newcar->price?></span> 
	              </div>
	              <div class="inventory_info_m">
		          <!--	<p><?php echo $newcar->discription?></p> -->
		          	<div class="row">
		             	<div class="col-md-6">
		             		<p style="color: #382EB3; font-weight: 600;">SPECS</p>
		             		<li>Engine: <?php echo $newcar->engien_type?></li>
				            <li>wheeler: <?php echo $newcar->wheeler?></li>
				            <li>Fuel: <?php echo $newcar->fuel_type?></li>
				            <li>Seats: <?php echo $newcar->seat_capacity?></li>
		             	</div>
		             	<div class="col-md-6">
		             		<p style="color: #382EB3; font-weight: 600;">HIGHLIGHTS</p>
		             		<li>City: <?php echo $newcar->mileage_city?>kms</li>
			             	<li>Highway: <?php echo $newcar->mileage_highway?>kms</li>
			             	<li>Fuel Tank: <?php echo $newcar->fuel_capacity?></li>
			             	<li><span>Transmission</span>: <?php echo $newcar->transmission?></li>
			             	<li>Cylinders:<?php echo $newcar->no_cylinders?></li>
		             	</div>
		            </div> 
	               </div>  
	            </div>
	        </div> <!--/div for list view -->
<?php $count_compare=$count_compare+1;
	    endforeach; ?><!--/Foreach Loop -->
	    </div><!--/Recently Listed New Cars -->
	        
	<!-- Recently Listed Used Cars -->
	    <div role="tabpanel" class="tab-pane" id="resentusecar">
	    <!--Foreach Loop -->
	    <?php foreach($recent_used as $usedcar):?>
	    	<!--div for list view -->
	        <div class="col-list-3">
	            <div class="recent-car-list">
	            	<div class="car-info-box"> <a href="<?php echo base_url() ?>detail?vehicle=<?php echo $usedcar->vehicle_id; ?>" target="_blank"><img src="<?php echo base_url() ?>frontend/vehicles_images/<?php echo $usedcar->pic; ?>" class="img-responsive" alt="loading" style="min-height:268px; max-height: 268px"></a>
	                	<div class="compare_item">
	                  		<div class="checkbox">
	                    		<form action="<?php echo base_url() ?>compare" method="POST">
		                  		<input type="checkbox" id="compare<?php echo $usedcar->vehicle_id; ?>" onChange="this.form.submit()">
		                  		<input type="hidden" name="compare_checkbox_value" value="<?php echo $usedcar->vehicle_id; ?>">
		                    	<label for="compare<?php echo $usedcar->vehicle_id; ?>">Compare</label>
		                  	</form>
	                  		</div>
	                	</div>
	                	<ul>
		                  	<li><i class="fa fa-road" aria-hidden="true"></i><?php echo $usedcar->kms?> Mile</li>
		                  	<li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $usedcar->model?> Model</li>
		                  	<li><i class="fa fa-map-marker" aria-hidden="true"></i>Colorado, USA</li>
		                </ul>
	              	</div>
	              	<div class="car-title-m">
	                	<h6><a href="<?php echo base_url() ?>detail?vehicle=<?php echo $usedcar->vehicle_id; ?>" target="_blank"><?php echo $usedcar->title?></a></h6>
	                	<span class="price">$<?php echo $usedcar->price?></span> 
	              	</div>
	              	<div class="inventory_info_m">
		               <!-- <p><?php echo $usedcar->discription?></p>-->
			            <div class="row">
			             	<div class="col-md-6">
				             	<p style="color: #382EB3; font-weight: 600;">SPECS</p>
				             	<li><?php echo $usedcar->engien_type?></li>
				             	<li><?php echo $usedcar->wheeler?></li>
				             	<li><?php echo $usedcar->fuel_type?></li>
				             	<li><?php echo $usedcar->engien_type?></li>
				             	<li><?php echo $usedcar->seat_capacity?></li>
				            </div>
			             	<div class="col-md-6">
			             		<p style="color: #382EB3; font-weight: 600;">HIGHLIGHTS</p>
			             		<li><?php echo $usedcar->mileage_city?></li>
			             		<li><?php echo $usedcar->mileage_highway?></li>
			             		<li><?php echo $usedcar->fuel_capacity?></li>
			             		<li><?php echo $usedcar->transmission?></li>
			             		<li><?php echo $usedcar->no_cylinders?></li>
			             	</div>
			            </div>  
	                </div>
	            </div>
	        </div><!--div for list view -->
	    <?php endforeach; ?><!--/Foreach Loop -->
	    </div><!-- Recently Listed Used Cars -->
	</div><!-- /tab-content -->
</div><!-- /Row for cars used and new -->
    
    <div class="section-header text-center section-padding gray-bg">
      <h2>Find the Best <span>Classic Cars And RV Recreation Vehicles </span></h2>
      <p>At Car Adviser Corp we don't just offer you a chance to get the best the deals; we also continue to work hard to ensure that any automobile you desire is just one simple search away. So wouldn't you rather join the train?
</p>
    </div>
    <!-- Row Start -->
    <div class="row"> 
      <!-- Nav tabs -->
      <div class="recent-tab">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#resentnewcar1" role="tab" data-toggle="tab">Classic Cars </a></li>
          <li role="presentation"><a href="#resentusecar2" role="tab" data-toggle="tab">RV Recreation Vehicles</a></li>
        </ul>
      </div>
      <!-- Recently Listed Classic and RV Cars -->
  		<!--Tab Panel  -->
      <div class="tab-content">
		<!-- Classic Cars -->
        <div role="tabpanel" class="tab-pane active" id="resentnewcar1">
          
          <!--Foreach Loop -->
	    <?php foreach($recent_classic as $classiccar):?>
	    <!-- Div Col-md-3 Classic Cars -->
          <div class="col-list-3">
            <div class="recent-car-list">
	            	<div class="car-info-box"> <a href="<?php echo base_url() ?>detail?vehicle=<?php echo $classiccar->vehicle_id; ?>" target="_blank"><img src="<?php echo base_url() ?>frontend/vehicles_images/<?php echo $classiccar->pic; ?>" class="img-responsive" alt="loading" style="min-height:268px; max-height: 268px"></a>
	                	<div class="compare_item">
	                  		<div class="checkbox">
	                    		<form action="<?php echo base_url() ?>compare" method="POST">
		                  		<input type="checkbox" id="compare<?php echo $classiccar->vehicle_id; ?>" onChange="this.form.submit()">
		                  		<input type="hidden" name="compare_checkbox_value" value="<?php echo $classiccar->vehicle_id; ?>">
		                    	<label for="compare<?php echo $classiccar->vehicle_id; ?>">Compare</label>
		                  	</form>
	                  		</div>
	                	</div>
	                	<ul>
		                  	<li><i class="fa fa-road" aria-hidden="true"></i><?php echo $classiccar->kms?> Mile</li>
		                  	<li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $classiccar->model?> Model</li>
		                  	<li><i class="fa fa-map-marker" aria-hidden="true"></i>Colorado, USA</li>
		                </ul>
	              	</div>
	              	<div class="car-title-m">
	                	<h6><a href="<?php echo base_url() ?>detail?vehicle=<?php echo $classiccar->vehicle_id; ?>" target="_blank"><?php echo $classiccar->title?></a></h6>
	                	<span class="price">$<?php echo $classiccar->price?></span> 
	              	</div>
	              	<div class="inventory_info_m">
		                <!--<p><?php echo $classiccar->discription?></p>-->
			            <div class="row">
			             	<div class="col-md-6">
				             	<p style="color: #382EB3; font-weight: 600;">SPECS</p>
				             	<li><?php echo $classiccar->engien_type?></li>
				             	<li><?php echo $classiccar->wheeler?></li>
				             	<li><?php echo $classiccar->fuel_type?></li>
				             	<li><?php echo $classiccar->engien_type?></li>
				             	<li><?php echo $classiccar->seat_capacity?></li>
				            </div>
			             	<div class="col-md-6">
			             		<p style="color: #382EB3; font-weight: 600;">HIGHLIGHTS</p>
			             		<li><?php echo $classiccar->mileage_city?></li>
			             		<li><?php echo $classiccar->mileage_highway?></li>
			             		<li><?php echo $classiccar->fuel_capacity?></li>
			             		<li><?php echo $classiccar->transmission?></li>
			             		<li><?php echo $classiccar->no_cylinders?></li>
			             	</div>
			            </div>  
	                </div>
	            </div>
          </div><!-- /Div Col-md-3 Classic Cars -->
      <?php endforeach; ?><!--/Foreach Loop -->
        </div><!-- /Classic Cars -->
        
       <!-- RV Cars -->
        <div role="tabpanel" class="tab-pane" id="resentusecar2">
        	
        <!--Foreach Loop -->
	    <?php foreach($recent_rvs as $rvcar):?>
	    <!-- Div Col-md-3 RV Cars -->
          <div class="col-list-3">
            <div class="recent-car-list">
	            	<div class="car-info-box"> <a href="<?php echo base_url() ?>detail?vehicle=<?php echo $rvcar->vehicle_id; ?>" target="_blank"><img src="<?php echo base_url() ?>frontend/vehicles_images/<?php echo $rvcar->pic; ?>" class="img-responsive" alt="loading" style="min-height:268px; max-height: 268px"></a>
	                	<div class="compare_item">
	                  		<div class="checkbox">
	                    		<form action="<?php echo base_url() ?>compare" method="POST">
		                  		<input type="checkbox" id="compare<?php echo $rvcar->vehicle_id; ?>" onChange="this.form.submit()">
		                  		<input type="hidden" name="compare_checkbox_value" value="<?php echo $rvcar->vehicle_id; ?>">
		                    	<label for="compare<?php echo $rvcar->vehicle_id; ?>">Compare</label>
		                  	</form>
	                  		</div>
	                	</div>
	                	<ul>
		                  	<li><i class="fa fa-road" aria-hidden="true"></i><?php echo $rvcar->kms?> Mile</li>
		                  	<li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $rvcar->model?> Model</li>
		                  	<li><i class="fa fa-map-marker" aria-hidden="true"></i>Colorado, USA</li>
		                </ul>
	              	</div>
	              	<div class="car-title-m">
	                	<h6><a href="<?php echo base_url() ?>detail?vehicle=<?php echo $rvcar->vehicle_id; ?>" target="_blank"><?php echo $rvcar->title?></a></h6>
	                	<span class="price">$<?php echo $rvcar->price?></span> 
	              	</div>
	              	<div class="inventory_info_m">
		               <!-- <p><?php echo $rvcar->discription?></p>-->
			            <div class="row">
			             	<div class="col-md-6">
				             	<p style="color: #382EB3; font-weight: 600;">SPECS</p>
				             	<li><?php echo $rvcar->engien_type?></li>
				             	<li><?php echo $rvcar->wheeler?></li>
				             	<li><?php echo $rvcar->fuel_type?></li>
				             	<li><?php echo $rvcar->engien_type?></li>
				             	<li><?php echo $rvcar->seat_capacity?></li>
				            </div>
			             	<div class="col-md-6">
			             		<p style="color: #382EB3; font-weight: 600;">HIGHLIGHTS</p>
			             		<li><?php echo $rvcar->mileage_city?></li>
			             		<li><?php echo $rvcar->mileage_highway?></li>
			             		<li><?php echo $rvcar->fuel_capacity?></li>
			             		<li><?php echo $rvcar->transmission?></li>
			             		<li><?php echo $rvcar->no_cylinders?></li>
			             	</div>
			            </div>  
	                </div>
	            </div>
          </div><!-- /Div Col-md-3 RV Cars -->
         <?php endforeach; ?><!--/Foreach Loop -->
        </div><!-- /RV Cars -->
      </div><!--/Tab Panel  -->
    </div><!-- /Row Start -->
    <div class="section-header text-center section-padding gray-bg">
      <h2>Find the Best <span>Trucks And Motor Motorcycles  </span></h2>
      <p>At Car Adviser Corp we don't just offer you a chance to get the best the deals; we also continue to work hard to ensure that any automobile you desire is just one simple search away. So wouldn't you rather join the train?
</p>
    </div>
    <!-- Row Recently Listed New Truks And Motorcycles -->
    <div class="row"> 
      <!-- Nav tabs -->
      <div class="recent-tab">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#resentnewcar3" role="tab" data-toggle="tab">Trucks</a></li>
          <li role="presentation"><a href="#resentusecar4" role="tab" data-toggle="tab">Motorcycles</a></li>
        </ul>
      </div>
      <!-- Recently Listed New Truks And Motorcycles -->
      <div class="tab-content">

        <!-- Recently Listed New Truks -->
        <div role="tabpanel" class="tab-pane active" id="resentnewcar3">
        
          <!--Foreach Loop -->
	    <?php foreach($recent_truck as $truck):?>
	    	<!-- Div Col-md-3 Truks -->
	        <div class="col-list-3">
	            <div class="recent-car-list">
	            	<div class="car-info-box"> <a href="<?php echo base_url() ?>detail?vehicle=<?php echo $truck->vehicle_id; ?>" target="_blank"><img src="<?php echo base_url() ?>frontend/vehicles_images/<?php echo $truck->pic; ?>" class="img-responsive" alt="loading" style="min-height:268px; max-height: 268px"></a>
	                	<div class="compare_item">
	                  		<div class="checkbox">
	                    		<form action="<?php echo base_url() ?>compare" method="POST">
		                  		<input type="checkbox" id="compare<?php echo $truck->vehicle_id; ?>" onChange="this.form.submit()">
		                  		<input type="hidden" name="compare_checkbox_value" value="<?php echo $truck->vehicle_id; ?>">
		                    	<label for="compare<?php echo $truck->vehicle_id; ?>">Compare</label>
		                  	</form>
	                  		</div>
	                	</div>
	                	<ul>
		                  	<li><i class="fa fa-road" aria-hidden="true"></i><?php echo $truck->kms?> Mile</li>
		                  	<li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $truck->model?> Model</li>
		                  	<li><i class="fa fa-map-marker" aria-hidden="true"></i>Colorado, USA</li>
		                </ul>
	              	</div>
	              	<div class="car-title-m">
	                	<h6><a href="<?php echo base_url() ?>detail?vehicle=<?php echo $truck->vehicle_id; ?>" target="_blank"><?php echo $truck->title?></a></h6>
	                	<span class="price">$<?php echo $truck->price?></span> 
	              	</div>
	              	<div class="inventory_info_m">
		                <!--<p><?php echo $truck->discription?></p>-->
			            <div class="row">
			             	<div class="col-md-6">
				             	<p style="color: #382EB3; font-weight: 600;">SPECS</p>
				             	<li><?php echo $truck->engien_type?></li>
				             	<li><?php echo $truck->wheeler?></li>
				             	<li><?php echo $truck->fuel_type?></li>
				             	<li><?php echo $truck->engien_type?></li>
				             	<li><?php echo $truck->seat_capacity?></li>
				            </div>
			             	<div class="col-md-6">
			             		<p style="color: #382EB3; font-weight: 600;">HIGHLIGHTS</p>
			             		<li><?php echo $truck->mileage_city?></li>
			             		<li><?php echo $truck->mileage_highway?></li>
			             		<li><?php echo $truck->fuel_capacity?></li>
			             		<li><?php echo $truck->transmission?></li>
			             		<li><?php echo $truck->no_cylinders?></li>
			             	</div>
			            </div>  
	                </div>
	            </div>
	        </div><!-- Div Col-md-3 Trucks -->
	      <?php endforeach; ?><!--/Foreach Loop -->
        </div> <!-- /Recently Listed New Truks -->
        
        <!-- Recently Listed New Motorcycles -->
        <div role="tabpanel" class="tab-pane" id="resentusecar4">
        
        	<!--Foreach Loop -->
	    <?php foreach($recent_motorcycle as $motorcycle):?>
	    	<!-- Div Col-md-3 Truks -->
	        <div class="col-list-3">
	            <div class="recent-car-list">
	            	<div class="car-info-box"> <a href="<?php echo base_url() ?>detail?vehicle=<?php echo $motorcycle->vehicle_id; ?>" target="_blank"><img src="<?php echo base_url() ?>frontend/vehicles_images/<?php echo $motorcycle->pic; ?>" class="img-responsive" alt="loading" style="min-height:268px; max-height: 268px"></a>
	                	<div class="compare_item">
	                  		<div class="checkbox">
	                    		<form action="<?php echo base_url() ?>compare" method="POST">
		                  		<input type="checkbox" id="compare<?php echo $motorcycle->vehicle_id; ?>" onChange="this.form.submit()">
		                  		<input type="hidden" name="compare_checkbox_value" value="<?php echo $motorcycle->vehicle_id; ?>">
		                    	<label for="compare<?php echo $motorcycle->vehicle_id; ?>">Compare</label>
		                  	</form>
	                  		</div>
	                	</div>
	                	<ul>
		                  	<li><i class="fa fa-road" aria-hidden="true"></i><?php echo $motorcycle->kms?> Mile</li>
		                  	<li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $motorcycle->model?> Model</li>
		                  	<li><i class="fa fa-map-marker" aria-hidden="true"></i>Colorado, USA</li>
		                </ul>
	              	</div>
	              	<div class="car-title-m">
	                	<h6><a href="<?php echo base_url() ?>detail?vehicle=<?php echo $motorcycle->vehicle_id; ?>" target="_blank"><?php echo $motorcycle->title?></a></h6>
	                	<span class="price">$<?php echo $motorcycle->price?></span> 
	              	</div>
	              	<div class="inventory_info_m">
		               <!-- <p><?php echo $motorcycle->discription?></p>-->
			            <div class="row">
			             	<div class="col-md-6">
				             	<p style="color: #382EB3; font-weight: 600;">SPECS</p>
				             	<li><?php echo $motorcycle->engien_type?></li>
				             	<li><?php echo $motorcycle->wheeler?></li>
				             	<li><?php echo $motorcycle->fuel_type?></li>
				             	<li><?php echo $motorcycle->engien_type?></li>
				             	<li><?php echo $motorcycle->seat_capacity?></li>
				            </div>
			             	<div class="col-md-6">
			             		<p style="color: #382EB3; font-weight: 600;">HIGHLIGHTS</p>
			             		<li><?php echo $motorcycle->mileage_city?></li>
			             		<li><?php echo $motorcycle->mileage_highway?></li>
			             		<li><?php echo $motorcycle->fuel_capacity?></li>
			             		<li><?php echo $motorcycle->transmission?></li>
			             		<li><?php echo $motorcycle->no_cylinders?></li>
			             	</div>
			            </div>  
	                </div>
	            </div>
	        </div><!-- Div Col-md-3 Truks -->
	      <?php endforeach; ?>
	      <!--/Foreach Loop -->
       
        </div> <!-- /Recently Listed New Motorcycles -->
      </div>
      <!-- /Recently Listed New Truks And Motorcycles -->
    </div><!-- /RowRecently Listed New Truks And Motorcycles -->
  </div>
</section>
<!-- /Resent Cat --> 









<!-- Fun Facts-->
<section class="fun-facts-section">
  <div class="container div_zindex">
    <div class="row">
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-calendar" aria-hidden="true"></i>40+</h2>
            <p>Years In Business</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-car" aria-hidden="true"></i><?php echo $newcar_stat ?>+</h2>
            <p>New Cars For Sale</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-car" aria-hidden="true"></i><?php echo $usedcar_stat ?>+</h2>
            <p>Used Cars For Sale</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-user-circle-o" aria-hidden="true"></i>600+</h2>
            <p>Satisfied Customers</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Fun Facts--> 

<!--Featured Car-->
<section class="section-padding">
  <div class="container">
    <div class="section-header text-center">
      <h2>Featured  Cars <span>Special Offers</span></h2>
      <p>caradvisercorp.com is fast becoming the go-to website and platform as far as helping car shoppers, and owners get the best and most attractive deals in car ownership, and sales are concerned. Our team is made up of seasoned professionals who are passionate about establishing a new paradigm in the car sale and purchase landscape.  </p>
    </div>
    <div class="row">
       <!--Foreach Loop -->
	    <?php foreach($recent_featured as $featured):?>
	    	<!--div for list view -->
	        <div class="col-list-3">
	            <div class="recent-car-list">
	            	<div class="car-info-box"> <a href="<?php echo base_url() ?>detail?vehicle=<?php echo $featured->vehicle_id; ?>" target="_blank"><img src="<?php echo base_url() ?>frontend/vehicles_images/<?php echo $featured->pic?>" class="img-responsive" alt="loading" style="min-height:268px; max-height: 268px"></a>
	                	<div class="compare_item">
	                  		<div class="checkbox">
	                    		<form action="<?php echo base_url() ?>compare" method="POST">
		                  		<input type="checkbox" id="compare<?php echo $featured->vehicle_id; ?>" onChange="this.form.submit()">
		                  		<input type="hidden" name="compare_checkbox_value" value="<?php echo $featured->vehicle_id; ?>">
		                    	<label for="compare<?php echo $featured->vehicle_id; ?>">Compare</label>
		                  	</form>
	                  		</div>
	                	</div>
	                	<ul>
		                  	<li><i class="fa fa-road" aria-hidden="true"></i><?php echo $featured->kms?> Mile</li>
		                  	<li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $featured->model?> Model</li>
		                  	<li><i class="fa fa-map-marker" aria-hidden="true"></i>Colorado, USA</li>
		                </ul>
	              	</div>
	              	<div class="car-title-m">
	                	<h6><a href="<?php echo base_url() ?>detail?vehicle=<?php echo $featured->vehicle_id; ?>" target="_blank"><?php echo $featured->title?></a></h6>
	                	<span class="price">$<?php echo $featured->price?></span> 
	              	</div>
	              	<div class="inventory_info_m">
		               <!-- <p><?php echo $featured->discription?></p>-->
			            <div class="row">
			             	<div class="col-md-6">
				             	<p style="color: #382EB3; font-weight: 600;">SPECS</p>
				             	<li><?php echo $featured->engien_type?></li>
				             	<li><?php echo $featured->wheeler?></li>
				             	<li><?php echo $featured->fuel_type?></li>
				             	<li><?php echo $featured->engien_type?></li>
				             	<li><?php echo $featured->seat_capacity?></li>
				            </div>
			             	<div class="col-md-6">
			             		<p style="color: #382EB3; font-weight: 600;">HIGHLIGHTS</p>
			             		<li><?php echo $featured->mileage_city?></li>
			             		<li><?php echo $featured->mileage_highway?></li>
			             		<li><?php echo $featured->fuel_capacity?></li>
			             		<li><?php echo $featured->transmission?></li>
			             		<li><?php echo $featured->no_cylinders?></li>
			             	</div>
			            </div>  
	                </div>
	            </div>
	        </div><!--div for list view -->
	    <?php endforeach; ?><!--/Foreach Loop -->
    </div>
  </div>
</section>
<!-- /Featured Car--> 

<!--Trending Car-->
<section class="section-padding gray-bg">
  <div class="container">
    <div class="section-header text-center">
      <h2>Trending <span>Cars of the Year</span></h2>
      <p>At Car Adviser Corp, our team of passionate individuals continually ensures that we deliver services that make us heads and shoulders above everyone else in the industry. Simply put; we take the lead while others follow.  </p>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div id="trending_slider">
          
          <?php foreach($trending_vechicle as $trend):?>
          <div class="trending-car-m">
          	
        

            <div class="trending-car-img"> 
           	   <a href="<?php echo base_url() ?>detail?vehicle=<?php echo $trend->vehicle_id; ?>" target="_blank"> <img src="<?php echo base_url() ?>frontend/vehicles_images/<?php echo $trend->pic?>" class="img-responsive" alt="loading" style="min-height:268px; max-height: 268px ; width: 100% "> </a>  
           	   
            </div>
            <div class="trending-hover">
              <h4><a href="<?php echo base_url() ?>detail?vehicle=<?php echo $trend->vehicle_id; ?>" target="_blank"><?php echo $newcar->title?> <?php echo $trend->fuel_type ?></a></h4>
            </div>
          </div>
          <?php endforeach; ?>
          
         
         
          
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Trending Car--> 

<!--Testimonial -->
<section class="section-padding testimonial-section parallex-bg">
  <div class="container div_zindex">
    <div class="section-header white-text text-center">
      <h2>Our Satisfied <span>Customers</span></h2>
      <p>At Car Adviser Corp, our team of passionate individuals continually ensures that we deliver services that make us heads and shoulders above everyone else in the industry. Simply put; we take the lead while others follow.   </p>
    </div>
    <div class="row">
      <div id="testimonial-slider">

       <?php foreach ($data_testinomials as $testimonials) 
     	{?>
        <div class="testimonial-m">
          <div class="testimonial-img"> <img src="<?php echo base_url() ?>frontend/testimonials/<?php echo $testimonials->image?>" alt="" /> </div>
          <div class="testimonial-content">
            <div class="testimonial-heading">
              <h5><?php echo $testimonials->name?></h5>
              <span class="client-designation"><?php echo $testimonials->designation?></span> </div>
            <p><?php echo $testimonials->message?>.</p>
          </div>
        </div>
		<?php }?>
        
      </div>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Testimonial--> 


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
