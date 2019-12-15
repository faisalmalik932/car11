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
                  <h1>Users</h1>
                  <small>Users List</small>
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
                                 <h4>Add Users</h4>
                              </a>
                           </div>
                        </div>
                        <div class="panel-body">
                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                          <!--  <div class="btn-group">
                              <div class="buttonexport" id="buttonlist"> 
                                 <a class="btn btn-add" href="add_users"> <i class="fa fa-plus"></i> Add Users
                                 </a>  
                              </div>
                           </div> -->
                           <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           
                           <div class="table-responsive">
                              <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">
                                       <th>Photo</th>
                                       <th>Customer Name</th>
                                       <th>location</th>
                                       <th>phone_no</th>
                                       <th>email</th>
                                       <th>Status</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <?php 
                                       foreach ($users as $user) 
                                       {?>
                                       <td><img src="<?php echo base_url() ?>frontend/users/<?php echo $user->pic?>" class="img-circle" alt="User Image" width="50" height="50"> </td>
                                       <td><?php echo $user->name?></td>
                                       
                                       <td><?php echo $user->location?></td>
                                       <td><?php echo $user->phone_no?></td>
                                       <td><?php echo $user->email?></td>
                                       <td><span class="label-custom label label-default"><?php echo $user->status==1?"Active":"InActive" ?></span>
<!-- <a href="" class="btn btn-link btn-sm" target="_blank">View</a> -->
                                       </td>
                                       <td>
                                       <a href="<?php echo base_url()?>admin_users/delete_row/<?php echo $user->id;?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="fa fa-trash-o"  aria-hidden="true"></i></a>

                                       <button type="button" id="btn_users" class="btn btn-add btn-sm" data-toggle="modal" value="<?php echo $user->id ?>"
                                          data-target="#"
                                          data-id="<?php echo $user->id ?>"
                                          data-name="<?php echo $user->name ?>"
                                          data-location="<?php echo $user->location ?>"
                                           data-email="<?php echo $user->email ?>"
                                          data-phone_no="<?php echo $user->phone_no ?>"
                                          data-pic="<?php echo $user->pic?>"
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
               <div class="modal fade modal-users" id="customeru" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h3><i class="fa fa-user m-r-5"></i> Update Customer</h3>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal" action="<?php echo base_url()?>admin_users/edit" method="POST" enctype="multipart/form-data">
                                    <fieldset>
                                       <!-- Text input-->
                                 
                                       <div class="col-md-4 form-group">
                                          <label class="control-label">Customer Name:</label>
                                          <input type="text" id="name" name="name" value="" placeholder="Customer Name" class="form-control">
                                       </div>

                                       <div class="col-md-4 form-group">
                                          <label class="control-label">Phone:</label>
                                          <input type="text" id="phone_no" name="phone_no" value="" placeholder="" class="form-control">
                                       </div>
                                       <div class="col-md-4 form-group">
                                          <label class="control-label">Location:</label>
                                          <input type="text" id="location" name="location" value="" placeholder="" class="form-control">
                                       </div>

                                       <div class="col-md-4 form-group">
                                          <label class="control-label">Photo</label>
                                          <input type="file" id="pic_newu" name="pic_newu" value="" class="form-control">
                                          <input type="hidden" id="old_picu" name="old_picu" value="<?php $user->pic ?>">
                                           <input type="hidden" id="pic" name="pic" value="">
                                           <input type="hidden" id="id" name="id" value="">
                                       </div>

                                       <!-- Text input-->
                                       
                                       <div class="col-md-12 form-group user-form-group">
                                          <div class="pull-right">
                                             <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
                                             <a href="<?php echo base_url()?>admin_users/edit"><button type="submit" class="btn btn-add btn-sm">Save</button></a>
                                             
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
         <!-- /.content-wrapper -->
         <footer class="main-footer">
             <strong>Copyright &copy; 2019 <a href="#">CarAdviserCorp</a>.</strong> All rights reserved.
         </footer>
      </div>
      <!-- ./wrapper -->
<!---- footer ---->
        <?php $this->load->view('admin/common/footer');  ?>
<!---- footer ----> 

