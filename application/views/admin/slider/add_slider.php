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
                  <h1>Add Slider</h1>
                  <small>Slider list</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonlist"> 
                              <a class="btn btn-add " href="slider_list"> 
                              <i class="fa fa-list"></i>  Slider List </a>  
                           </div>
                        </div>
                        <div class="panel-body">
                           
                           <?php echo form_open_multipart('admin_slider/insert');?>
                              <div class="form-group">
                                 <label>Caption1</label>
                                 <input type="text" name="caption1" class="form-control" placeholder="Enter First Caption" required>
                              </div>
                              <div class="form-group">
                                 <label>Caption2</label>
                                 <input type="text" name="caption2" class="form-control" placeholder="Enter Second Caption" required>
                              </div>
                              <div class="form-group">
                                 <label>Background</label>
                                 <input type="file" name="background" required>    
                              </div>
                              <div class="form-group">
                                 <label>Image1</label>
                                 <input type="file" name="image1" required>    
                              </div>
                              <div class="form-group">
                                 <label>Image2</label>
                                 <input type="file" name="image2" required>    
                              </div>
                             
                              <div class="reset-button">
                                 <input type="submit" name="submit" value="submit" class="btn btn-success">
                              </div>
                           <?php echo form_close();?>
                        </div>

                     </div>
                  </div>
               </div>
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
         <footer class="main-footer">
            <strong>Copyright &copy; 2019 <a href="#">CarAdviserCorp</a>.</strong> All rights reserved.
         </footer>
      </div>

<!---- footer ---->
        <?php $this->load->view('admin/common/footer');  ?>
<!---- footer ----> 

