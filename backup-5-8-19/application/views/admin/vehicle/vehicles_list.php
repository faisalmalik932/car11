<!---- header ---->
        <?php $this->load->view('admin/common/header');  ?>
<!---- header ----> 


<!---- sidebar ---->
        <?php $this->load->view('admin/common/sidebar');  ?>
<!---- sidebar ----> 
         <!-- =============================================== -->
         <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-users"></i>
               </div>
               <div class="header-title">
                  <h1>Vehicles</h1>
                  <small>Vehicles List</small>
               </div>
            </section>
             <section class="content">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonexport">
                              <a href="#">
                                 <h4>Vehicles List</h4>
                              </a>
                           </div>
                        </div>
                        <div class="panel-body">
                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="btn-group">
                              <div class="buttonexport" id="buttonlist"> 
                                 <a class="btn btn-add" href="<?php echo base_url() ?>admin_vehicle/add_vehicles"> <i class="fa fa-plus"></i> Add Vehicles
                                 </a>  
                              </div>
                           </div>

                           <div class="table-responsive">
                              <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">
                                       <th>Photo</th>
                                       <th>Title</th>
                                       <th>Brand</th>
                                       <th>Description</th>
                                       <th>Price</th>
                                       <th>Model Year</th>
                                       <th>Status</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <?php 
                                       foreach($records as $vehicle) 
                                       {?>
                                       <td><img src="<?php echo base_url() ?>frontend/vehicles_images/<?php echo $vehicle->pic?>" class="img-circle" alt="User Image" width="50" height="50"> </td>
                                       <td><?php echo $vehicle->title?></td>
                                       <td><?php echo $vehicle->brand?></td>
                                       <td><?php echo $vehicle->discription?></td>
                                       <td><?php echo $vehicle->price?></td>
                                       <td><?php echo $vehicle->model_year?></td>

                                       <td><span class="label-custom label label-default">Active</span>
<a href="<?php echo base_url()?>detail?vehicle=<?php echo $vehicle->id;?>" class="btn btn-link btn-sm" target="_blank">View</a>


<a href="<?php echo base_url()?>admin_vehicle/image_list/<?php echo $vehicle->id;?>" class="btn btn-success btn-sm"><i class="fa fa-camera" style="color:white" aria-hidden="true"></i>

                                       </td>
                                       <td>
                                          <a href="<?php echo base_url()?>admin_vehicle/delete_row/<?php echo $vehicle->id;?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="fa fa-trash-o"  aria-hidden="true"></i></a>
                                          
                                          <button type="button"  class="btn btn-add btn-sm btn_vehicle_images" data-toggle="modal"  value="<?php echo $vehicle->id ?>" data-target="#" data-id="<?php echo $vehicle->id ?>"><i class="fa fa-picture-o"></i></button>
                                          

                                          <button type="button" class="btn btn-add btn-sm btn_edit" data-toggle="modal" value="<?php echo $vehicle->id ?>"
                                          data-target="#"
                                          data-id="<?php echo $vehicle->id ?>"
                                          data-title="<?php echo $vehicle->title?>"
                                          data-brand="<?php echo $vehicle->brand?>"
                                          data-model="<?php echo $vehicle->model?>"
                                          data-old_pic="<?php echo $vehicle->pic?>"
                                          data-version="<?php echo $vehicle->version?>"
                                          data-discription="<?php echo $vehicle->discription?>"
                                          data-price="<?php echo $vehicle->price?>"
                                          data-model_year="<?php echo $vehicle->model_year?>"
                                          data-wheeler="<?php echo $vehicle->wheeler?>"
                                          data-kms="<?php echo $vehicle->kms?>"
                                          data-fuel_type="<?php echo $vehicle->fuel_type?>"
                                          data-engien_type="<?php echo $vehicle->engien_type?>"
                                          
                                          
                                          data-seat_capacity="<?php echo $vehicle->seat_capacity?>"
                                          data-transmission="<?php echo $vehicle->transmission?>" 
                                          
                                          >
                                          
                                          <i class="fa fa-pencil"></i> Edit  </button>


                                       </td>
                                    </tr>
                                    <?php }?>
                                    
                                 </tbody>
                              </table>
                           </div>
                           
                        </div>
                     </div>
                  </div>
               </div>
               <!-- customer Modal1 -->
               <div class="modal fade modal-vehicles-edit" id="customerv" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h3><i class="fa fa-user m-r-5"></i> Update Customer</h3>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal" action="<?php echo base_url()?>admin_vehicle/edit" method="POST" enctype="multipart/form-data">
                                    <fieldset>
                                       <!-- Text input-->
                                 
                                     <div class="col-md-4 form-group">
                                          <label class="control-label">Title:</label>
                                          <input type="text" id="title" name="title" value="" placeholder="Title" class="form-control">
                                       </div>

                                       <div class="col-md-4 form-group">
                                          <label class="control-label">Brand:</label>
                                          <input type="text" id="brand" name="brand" value="" placeholder="Brand" class="form-control">
                                       </div>
                                       <div class="col-md-4 form-group">
                                          <label class="control-label">Model:</label>
                                          <input type="text" id="model" name="model" value="" placeholder="Model" class="form-control">
                                       </div>
                                       <div class="col-md-4 form-group">
                                          <label class="control-label">Price:</label>
                                          <input type="text" id="price" name="price" value="" placeholder="Price" class="form-control">
                                       </div>
                                       <div class="col-md-4 form-group">
                                          <label class="control-label">Discription:</label>
                                          <input type="text" id="discription" name="discription" value="" placeholder="discription" class="form-control">
                                       </div>
                                       <div class="col-md-4 form-group">
                                          <label class="control-label">Model Year:</label>
                                          <input type="text" id="model_year" name="model_year" value="" placeholder="model year" class="form-control">
                                       </div>
                                       <div class="col-md-4 form-group">
                                          <label class="control-label">No. Of Wheels:</label>
                                          <input type="text" id="wheeler" name="wheeler" value="" placeholder="Select Wheels" class="form-control">
                                       </div>
                                       <div class="col-md-4 form-group">
                                          <label class="control-label">kms:</label>
                                          <input type="text" id="kms" name="kms" value="" placeholder="kms" class="form-control">
                                       </div>
                                       <div class="col-md-4 form-group">
                                          <label class="control-label">fuel_type:</label>
                                          <input type="text" id="fuel_type" name="fuel_type" value="" placeholder="fuel_type" class="form-control">
                                       </div>
                                       <div class="col-md-4 form-group">
                                          <label class="control-label">engien_type:</label>
                                          <input type="text" id="engien_type" name="engien_type" value="" placeholder="engien_type" class="form-control">
                                       </div>
                                       <!--<div class="col-md-4 form-group">
                                          <label class="control-label">no_cylinders:</label>
                                          <input type="text" id="no_cylinders" name="no_cylinders" value="" placeholder="no_cylinders" class="form-control">
                                       </div>
                                       <div class="col-md-4 form-group">
                                          <label class="control-label">mileage_city:</label>
                                          <input type="text" id="mileage_city" name="mileage_city" value="" placeholder="mileage_city" class="form-control">
                                       </div>
                                       <div class="col-md-4 form-group">
                                          <label class="control-label">mileage_highway:</label>
                                          <input type="text" id="mileage_highway" name="mileage_highway" value="" placeholder="mileage_highway" class="form-control">
                                       </div>
                                       <div class="col-md-4 form-group">
                                          <label class="control-label">fuel_capacity:</label>
                                          <input type="text" id="fuel_capacity" name="fuel_capacity" value="" placeholder="fuel_capacity" class="form-control">
                                       </div>-->
                                       <div class="col-md-4 form-group">
                                          <label class="control-label">seat_capacity:</label>
                                          <input type="text" id="seat_capacity" name="seat_capacity" value="" placeholder="seat_capacity" class="form-control">
                                       </div>
                                       <div class="col-md-4 form-group">
                                          <label class="control-label">transmission:</label>
                                          <input type="text" id="transmission" name="transmission" value="" placeholder="transmission" class="form-control">
                                       </div>

                                       <div class="col-md-4 form-group">
                                          <label class="control-label">Photo</label>
                                          <input type="file" id="pic" name="pic" value="" class="form-control">
                                          <input type="hidden" id="old_pic" name="old_pic" value="<?php $vehicle->pic ?>">
                                           <input type="hidden" id="id" name="id" value="">
                                       </div>
                                       
                                       <div class="col-md-12 form-group user-form-group">
                                          <div class="pull-right">
                                             <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
                                             <a href="<?php echo base_url()?>admin_vehicle/edit"><button type="submit" class="btn btn-add btn-sm">Save</button></a>
                                          </div>
                                       </div>
                                    </fieldset>
                                 </form>
                              </div>
                           </div>

                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>
               <!-- /.modal -->

               <div class="modal fade modal-vehicles" id="customermulti" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h3><i class="fa fa-user m-r-5"></i> Update Customer</h3>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal" action="<?php echo base_url()?>admin_vehicle/multiimages" method="POST" enctype="multipart/form-data">
                                    <fieldset>
                                       <!-- Text input-->
                                 
                                     <input type="file" name="multipleimages[]" multiple="multiple">
                                     <input type="hidden" id="id" name="id" value="">

                                  
                                       
                                       <div class="col-md-12 form-group user-form-group">
                                          <div class="pull-right">
                                             <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
                                             <a href="<?php echo base_url()?>admin_vehicle/multiimages"><button type="submit" class="btn btn-add btn-sm">Save</button></a>
                                          </div>
                                       </div>
                                    </fieldset>
                                 </form>
                              </div>
                           </div>

                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>

               <!-- Modal -->    
               <!-- Customer Modal2 -->
               <div class="modal fade" id="customer2" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h3><i class="fa fa-user m-r-5"></i> Delete Customer</h3>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal">
                                    <fieldset>
                                       <div class="col-md-12 form-group user-form-group">
                                          <label class="control-label">Delete Customer</label>
                                          <div class="pull-right">
                                             <button type="button" class="btn btn-danger btn-sm">NO</button>
                                             <button type="submit" class="btn btn-add btn-sm">YES</button>
                                          </div>
                                       </div>
                                    </fieldset>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>
               <!-- /.modal -->
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
         <footer class="main-footer">
             <strong>Copyright &copy; 2019 <a href="#">Car Advisor Corp</a>.</strong> All rights reserved.
         </footer>
      </div>
      <!-- ./wrapper -->
<!---- footer ---->
        <?php $this->load->view('admin/common/footer');  ?>
<!---- footer ----> 

<script type="text/javascript">
   
$(document).on("click", ".btn_vehicle_images", function () {
     var myBookId = $(this).val();
     //alert(myBookId);
      var id = $(this).data('id');

      //alert(pic);
      
      $(".modal-vehicles #pic").val( pic );
     $(".modal-vehicles #id").val( id );
      $(".modal-vehicles #old_pic").val( pic );
      /*$(".modal #image1").val( image1 );
      $(".modal #image2").val( image2 );*/
      
      $('#customermulti').modal('show');
});

$(document).on("click", ".btn_edit", function () {
     //var myBookId = $(this).val();
     //alert(myBookId);
      var id = $(this).data('id');

      var title = $(this).data('title');
      var brand = $(this).data('brand');
      var model = $(this).data('model');
      var price = $(this).data('price');
      var discription = $(this).data('discription');
      var model_year = $(this).data('model_year');
      var wheeler = $(this).data('wheeler');
      var kms = $(this).data('kms');
      var fuel_type = $(this).data('fuel_type');
      var engien_type = $(this).data('engien_type');
      //var no_cylinders = $(this).data('no_cylinders');
      //var mileage_city = $(this).data('mileage_city');
      //var mileage_highway = $(this).data('mileage_highway');
      //var fuel_capacity = $(this).data('fuel_capacity');
      //var seat_capacity = $(this).data('seat_capacity');
      var transmission = $(this).data('transmission');
      var old_pic = $(this).data('old_pic');
      //alert(discription);

      //alert(pic);
      $(".modal-vehicles-edit #title").val( title );
      $(".modal-vehicles-edit #brand").val( brand );
      $(".modal-vehicles-edit #model").val( model );

      $(".modal-vehicles-edit #old_pic").val( old_pic );
      $(".modal-vehicles-edit #price").val( price );
      $(".modal-vehicles-edit #id").val( id );
      $(".modal-vehicles-edit #discription").val( discription );
      $(".modal-vehicles-edit #model_year").val( model_year );
      $(".modal-vehicles-edit #wheeler").val( wheeler );
      $(".modal-vehicles-edit #kms").val( kms );
      $(".modal-vehicles-edit #fuel_type").val( fuel_type );
      $(".modal-vehicles-edit #engien_type").val( engien_type );
      //$(".modal-vehicles-edit #no_cylinders").val( no_cylinders );
      //$(".modal-vehicles-edit #mileage_city").val( mileage_city );
      //$(".modal-vehicles-edit #mileage_highway").val( mileage_highway );
      //$(".modal-vehicles-edit #fuel_capacity").val( fuel_capacity );
      //$(".modal-vehicles-edit #seat_capacity").val( seat_capacity );
      $(".modal-vehicles-edit #transmission").val( transmission );
      
      
      $('#customerv').modal('show');
});
</script>
      
<!-- /Brands--> 

