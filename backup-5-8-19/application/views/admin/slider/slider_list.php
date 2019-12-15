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
                  <h1>Slider</h1>
                  <small>Slider List</small>
               </div>
            </section>
             <section class="content">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonexport">
                              <a href="#">
                                 <h4>Add Slider</h4>
                              </a>
                           </div>
                        </div>
                        <div class="panel-body">
                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="btn-group">
                              <div class="buttonexport" id="buttonlist"> 
                                 <a class="btn btn-add" href="add_slider"> <i class="fa fa-plus"></i> Add Slider
                                 </a>  
                              </div>
                              
                           </div>

                           <div class="table-responsive">
                              <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">
                                       <th>Background</th>
                                       <th>Caption1</th>
                                       <th>Caption2</th>
                                       <th><center>Image1</center></th>
                                       <th><center>Image2</center></th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                     <?php
                                       foreach($slider as $slide) 
                                       {?>
                                    <tr>
                                      
                                       <td><img src="<?php echo base_url() ?>frontend/vehicles_slider/<?php echo $slide->background?>" class="img-circle" alt="User Image" width="50" height="50"> </td>
                                       <td><?php echo $slide->caption1?></td>
                                       <td><?php echo $slide->caption2?></td>
                                       
                                       <td>
                                          <a target="_blank" href="<?php echo base_url()."frontend/vehicles_slider/".$slide->image1;?>" class="btn btn-primary btn-sm"><i class="fa fa-picture-o"  aria-hidden="true"></i></a>                                         
                                       </td>
                                       <td>
                                          <a target="_blank" href="<?php echo base_url()."frontend/vehicles_slider/".$slide->image2;?>" class="btn btn-primary btn-sm"><i class="fa fa-picture-o"  aria-hidden="true"></i></a>                                         
                                       </td>
                                      
                                       <td>
                                          <a href="<?php echo base_url()?>admin_slider/delete_slider/<?php echo $slide->id;?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="fa fa-trash-o"  aria-hidden="true"></i></a>
                                           <button type="button" id="btn_slider" class="btn btn-add btn-sm" data-toggle="modal" value="<?php echo $slide->id ?>"
                                          data-target="#"
                                          data-id="<?php echo $slide->id ?>"
                                          data-caption1="<?php echo $slide->caption1 ?>"
                                          data-caption2="<?php echo $slide->caption2 ?>"
                                          
                                          data-background="<?php echo $slide->background?>"

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
               <div class="modal fade modal-slider" id="customers" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h3><i class="fa fa-user m-r-5"></i> Update Customer</h3>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal" action="<?php echo base_url()?>admin_slider/edit" method="POST" enctype="multipart/form-data">
                                    <fieldset>
                                       
                                       <div class="col-md-4 form-group">
                                          <label class="control-label">Caption1</label>
                                          <input type="text" id="caption1" name="caption1" value="" placeholder="Caption1" class="form-control">
                                       </div>
                                       <div class="col-md-4 form-group">
                                          <label class="control-label">Caption2</label>
                                          <input type="text" id="caption2" name="caption2" value="" placeholder="Caption2" class="form-control">
                                       </div>      
                                       <!-- Text input-->
                                       <div class="col-md-4 form-group">
                                          <label class="control-label">Image1</label>
                                          <input type="file" id="background_new" name="background_new" value="" class="form-control">
                                          <input type="hidden" id="old_background" name="old_background" value="<?php $slide->background ?>">
                                           <input type="hidden" id="background" name="background" value="">
                                           <input type="hidden" id="id" name="id" value="">
                                       </div>
                                      
                                       
                                       <div class="col-md-12 form-group user-form-group">
                                          <div class="pull-right">
                                             <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
                                             <a href="<?php echo base_url()?>admin_slider/edit"><button type="submit" class="btn btn-add btn-sm">Save</button></a>
                                             <!-- <button type="submit" class="btn">Submit Captions <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button> -->
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
               <div class="modal fade" id="customer3" tabindex="-1" role="dialog" aria-hidden="true">
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


      
<!-- /Brands--> 

