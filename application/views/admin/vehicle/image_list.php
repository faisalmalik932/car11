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
                  <h1>More Photos</h1>
                  <small>Vehicles Images</small>
               </div>
            </section>
             <section class="content">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonexport">
                              <a href="#">
                                 <h4>Vehicles Images</h4>
                              </a>
                           </div>
                        </div>
                        <div class="panel-body">
                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="btn-group">
                              <div class="buttonexport" id="buttonlist"> 
                                 <a class="btn btn-add" href="<?php echo base_url() ?>admin_vehicle/vehicles_list"> <i class="fa fa-arrow-left"></i>Vehicles List
                                 </a>  
                              </div>
                           </div>

                           <div class="table-responsive">
                               <?php echo form_open('admin_vehicle/delete_multipic_checklist'); ?>
                              <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">
                                        <a><button type="submit" name="delete" class="btn btn-add btn-sm" onclick="return confirm('Are you sure?')">Multiple Delete</button></a>
                                       <th>Delete</th> 
                                       <th>Photo</th>
                                       
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <?php 
                                       foreach($images as $vehicle) 
                                       {
                                       ?>
                                       <td><input type="checkbox" name="id[]" value="<?php echo $vehicle->id?>"/></td>
                                      <!--  <input type='hidden' name='vehicle_id' value='<?php echo $vehicle->vehicle_id?>' /> -->
                                       <td><img src="<?php echo base_url() ?>frontend/multiimages/<?php echo $vehicle->multipleimages?>" class="img-circle" alt="User Image" width="50" height="50"> </td>
                                       
                                   
                                    </tr>
                                    <?php }?>

                                 </tbody>
                              </table>
                              <?php echo form_close(); ?>
                           </div>
                           
                        </div>
                     </div>
                  </div>
               </div>
               <!-- customer Modal1 -->
              
               <!-- /.modal -->

          

               <!-- Modal -->    
            
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

