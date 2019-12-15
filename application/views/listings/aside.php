      <!--Side-Bar-->
      <aside class="col-md-3 col-md-pull-9">
        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-filter" aria-hidden="true"></i> Find Your Dream Trucks </h5>
          </div>
          <div class="sidebar_filter">
            <form action="<?php echo base_url() ?>search/search_test" method="post">
              <div class="form-group select">
                <select class="form-control" name="location">
                  <option>Select Location</option>
                      <option value="">Select Location </option>
                  <option value="pakistan">pakistan</option>
                  <option value="lahore">Lahore</option>
                  <option value="audi3">Audi3</option>
                  <option value="">Location 1 </option>
                  <option>Audi</option>
                  <option>BMW</option>
                  <option>Nissan</option>
                  <option>Toyota</option>
                  <option>Volvo</option>
                  <option>Mazda</option>
                  <option>Mercedes-Benz</option>
                  <option>Lotus</option>
                </select>
              </div>
              <div class="form-group select">
                <select class="form-control" name="brand">
                  <option value="">Select Brand</option>
                  <option value="audi">Audi</option>
                  <option>Acura</option>
                  <option>Alfa Romeo</option>
                  <option value="aston martin">Aston Martin</option>
                  <option value="bmw">BMW</option>
                  <option>Volvo</option>
                  <option>Mazda</option>
                  <option>Mercedes-Benz</option>
                  <option>Lotus</option>
                </select>
              </div>
              <div class="form-group select">
                <select class="form-control" name="model">
                  <option>Select Model</option>
                  <option value="honda">Honda1</option>
                  <option value="toyota">tyota 2</option>
                  <option value="model 4">model 4</option>
                  <option value="model 3">Model 3</option>
                </select>
              </div>
              <div class="form-group select">
                <select class="form-control" name="model_year">
                    <option>Year of Model </option>
                    <option value="2016">2016</option>
                    <option value="2015">2015</option>
                    <option value="2014">2014</option>
                    <option>2011</option>
                    <option>2010</option>
                    <option>2009</option>
                    <option>2008</option>
                </select>
              </div>
              
              <div class="form-group">
                  <label class="form-label">Price Range ($)</label>
                  <input id="price_range" type="text" name="price" class="span2" value="" data-slider-min="50" data-slider-max="6000" data-slider-step="5" data-slider-value="[1000,5000]"/>
              </div>
              <div class="form-group select">
                <select class="form-control" name="type">
                  <option value="typecar">Type of Car </option>
                  <option value="newcar">New Car</option>
                  <option value="usedcar">Used Car</option>
                  <option value="rvccar">RVC Car</option>
                </select>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-block"><i class="fa fa-search" aria-hidden="true"></i> Search Truck</button>
              </div>
            </form>
          </div>
        </div>
        <div class="sidebar_widget sell_car_quote">
          <div class="white-text div_zindex text-center">
            <h3>Sell Your Truck</h3>
            <p>Request a quote and sell your car now!</p>
            <a href="#" class="btn">Request a Quote <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> </div>
          <div class="dark-overlay"></div>
        </div>
        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-car" aria-hidden="true"></i> Recently Listed Cars</h5>
          </div>
          <div class="recent_addedcars">
            <ul>
              <li class="gray-bg">
                <div class="recent_post_img"> <a href="#"><img src="<?php echo base_url() ?>frontend/assets/images/post_200x200_1.jpg" alt="image"></a> </div>
                <div class="recent_post_title"> <a href="#">Ford Shelby GT350</a>
                  <p class="widget_price">$92,000</p>
                </div>
              </li>
              <li class="gray-bg">
                <div class="recent_post_img"> <a href="#"><img src="<?php echo base_url() ?>frontend/assets/images/post_200x200_2.jpg" alt="image"></a> </div>
                <div class="recent_post_title"> <a href="#">BMW 535i</a>
                  <p class="widget_price">$92,000</p>
                </div>
              </li>
              <li class="gray-bg">
                <div class="recent_post_img"> <a href="#"><img src="<?php echo base_url() ?>frontend/assets/images/post_200x200_3.jpg" alt="image"></a> </div>
                <div class="recent_post_title"> <a href="#">Mazda CX-5 SX, V6, ABS, Sunroof </a>
                  <p class="widget_price">$92,000</p>
                </div>
              </li>
              <li class="gray-bg">
                <div class="recent_post_img"> <a href="#"><img src="<?php echo base_url() ?>frontend/assets/images/post_200x200_4.jpg" alt="image"></a> </div>
                <div class="recent_post_title"> <a href="#">Ford Shelby GT350 </a>
                  <p class="widget_price">$92,000</p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </aside>
      <!--/Side-Bar--> 