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
                  <i class="fa fa-envelope"></i>
               </div>
               <div class="header-title">
                  <h1>Email Settings</h1>
                  <small>List of Email Settings</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonexport">
                              <a href="#">
                                 <h4>Email Settings</h4>
                              </a>
                           </div>
                        </div>
                        <div class="panel-body">
                           <form class="col-sm-6">
                              <div class="form-group">
                                 <label>Protocol</label>
                                 <select class="form-control">
                                    <option>PHP</option>
                                    <option>SMTP</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label>Smtp Host</label>
                                 <input type="text" class="form-control" placeholder="Enter Smtp Host" required>
                              </div>
                              <div class="form-group">
                                 <label>Smtp user</label>
                                 <input type="text" class="form-control" placeholder="Enter Smtp user" required>
                              </div>
                              <div class="form-group">
                                 <label>Smtp Password</label>
                                 <input type="password" class="form-control" placeholder="Enter Smtp Password" required>
                              </div>
                              <div class="form-group">
                                 <label>Smtp Port</label>
                                 <input type="number" class="form-control" placeholder="Enter Smtp Port" required>
                              </div>
                              <div class="form-group">
                                 <label>System mail</label>
                                 <input type="email" class="form-control" placeholder="Enter Email" required>
                              </div>
                              <div class="reset-button">
                                 <a href="#" class="btn btn-warning">Reset</a>
                                 <a href="#" class="btn btn-add">Save</a>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
         <footer class="main-footer">
             <strong>Copyright &copy; 2017 <a href="#">CarAdviserCorp</a>.</strong> All rights reserved.
         </footer>
      </div>
      <!-- ./wrapper -->
<!---- footer ---->
        <?php $this->load->view('admin/common/footer');  ?>
<!---- footer ----> 