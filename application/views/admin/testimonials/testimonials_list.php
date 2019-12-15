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
                  <h1>Testimonials</h1>
                  <small>Testimonials List</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonexport">
                              <a href="#">
                                 <h4>Add Testimonials</h4>
                              </a>
                           </div>
                        </div>
                        <div class="panel-body">
                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="btn-group">
                              <div class="buttonexport" id="buttonlist"> 
                                 <a class="btn btn-add" href="add_testimonials"> <i class="fa fa-plus"></i> Add Testimonials
                                 </a>  
                              </div>
                           </div>
                           <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           
                           <div class="table-responsive">
                              <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">
                                       <th>Photo</th>
                                       <th>Customer Name</th>
                                       <th>Message</th>
                                       <th>Designation</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <?php 
                                       foreach ($records as $record) 
                                       {?>
                                       <td><img src="<?php echo base_url() ?>frontend/testimonials/<?php echo $record->image?>" class="img-circle" alt="User Image" width="50" height="50"> </td>
                                       <td><?php echo $record->name?></td>
                                       <td><?php echo $record->message?></td>
                                       <td><?php echo $record->designation?></td>
                                       <td>
                                       <a href="<?php echo base_url()?>admin_testimonials/delete_row/<?php echo $record->id;?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="fa fa-trash-o"  aria-hidden="true"></i></a>
                                        <button type="button" id="btn_testimonials" class="btn btn-add btn-sm" data-toggle="modal" value="<?php echo $record->id ?>"
                                          data-target="#"
                                          data-id="<?php echo $record->id ?>"
                                          data-name="<?php echo $record->name ?>"
                                          data-message="<?php echo $record->message ?>"
                                          data-designation="<?php echo $record->designation ?>"
                                          data-image="<?php echo $record->image?>"
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
               <div class="modal fade modal-testimonials" id="customert" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h3><i class="fa fa-user m-r-5"></i> Update Customer</h3>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal" action="<?php echo base_url()?>admin_testimonials/edit" method="POST" enctype="multipart/form-data">
                                    <fieldset>
                                       <!-- Text input-->
                                 
                                       <div class="col-md-4 form-group">
                                          <label class="control-label">Customer Name:</label>
                                          <input type="text" id="name" name="name" value="" placeholder="Customer Name" class="form-control">
                                       </div>

                                       <div class="col-md-4 form-group">
                                          <label class="control-label">Designation:</label>
                                          <input type="text" id="designation" name="designation" value="" placeholder="Designation" class="form-control">
                                       </div>

                                       <div class="col-md-4 form-group">
                                          <label class="control-label">Message:</label>
                                          <input type="text" id="message" name="message" value="" placeholder="Designation" class="form-control">
                                       </div>

                                       <div class="col-md-4 form-group">
                                          <label class="control-label">Photo</label>
                                          <input type="file" id="image_new" name="image_new" value="" class="form-control">
                                          <input type="hidden" id="old_image" name="old_image" value="<?php $record->image ?>">
                                           <input type="hidden" id="image" name="image" value="">
                                           <input type="hidden" id="id" name="id" value="">
                                       </div>

                                       <!-- Text input-->
                                       
                                       <div class="col-md-12 form-group user-form-group">
                                          <div class="pull-right">
                                             <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
                                             <a href="<?php echo base_url()?>admin_testimonials/edit"><button type="submit" class="btn btn-add btn-sm">Save</button></a>
                                             
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
             <strong>Copyright &copy; 2019 <a href="#">CarAdviserCorp</a>.</strong> All rights reserved.
         </footer>
      </div>
      <!-- ./wrapper -->
<!---- footer ---->
        <?php $this->load->view('admin/common/footer');  ?>
<!---- footer ----> 

