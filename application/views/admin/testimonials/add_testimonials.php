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
                  <h1>Add Testimonial</h1>
                  <small>Testimonial of your users</small>
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
                              <a class="btn btn-add " href="testimonials_list"> 
                              <i class="fa fa-list"></i>  Testimonial List </a>  
                           </div>
                        </div>
                        <div class="panel-body">
                           <?php echo form_open_multipart('admin_testimonials/insert');?>
                              <div class="form-group">
                                 <label>Name</label>
                                 <input type="text" name="name" class="form-control" placeholder="Enter First Name" required>
                              </div>
                              <div class="form-group">
                                 <label>designation</label>
                                 <input type="text" name="designation" class="form-control" placeholder="Enter designation" required>
                              </div>
                              <div class="form-group">
                                 <label>Message</label>
                                 <input type="text" name="message" class="form-control" placeholder="Enter message" required>
                              </div>
                              <div class="form-group">
                                 <label>Picture upload</label>
                                 <input type="file" name="image" required>
                                 
                              </div>
                             
                              <div class="reset-button">
                                 <input class="btn btn-success" type="submit" name="submit" value="submit">
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

