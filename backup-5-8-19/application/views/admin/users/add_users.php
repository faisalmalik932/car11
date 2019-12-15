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
                  <h1>Add User</h1>
                  <small>User of your users</small>
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
                              <a class="btn btn-add " href="users_list"> 
                              <i class="fa fa-list"></i>  User List </a>  
                           </div>
                        </div>
                        <div class="panel-body">
                           <?php echo form_open_multipart('admin_users/insert');?>
                              <div class="form-group">
                                 <label>Name</label>
                                 <input type="text" name="name" class="form-control" placeholder="Enter First Name" required>
                              </div>
                              <div class="form-group">
                                 <label>Email</label>
                                 <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                              </div>
                              <div class="form-group">
                                 <label>Location</label>
                                 <input type="text" name="location" class="form-control" placeholder="Enter Location" required>
                              </div>
                              <div class="form-group">
                                 <label>Contact</label>
                                 <input type="text" name="phone_no" class="form-control" placeholder="Enter #" required>
                              </div>
                              <div class="form-group">
                                 <label>Picture</label>
                                 <input type="file" name="pic" required>
                                 
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

