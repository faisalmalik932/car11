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
                  <i class="fa fa-gears"></i>
               </div>
               <div class="header-title">
                  <h1>General Settings</h1>
                  <small>General Settings</small>
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
                                 <h4>General Settings</h4>
                              </a>
                           </div>
                        </div>
                        <div class="panel-body">
                           <form class="col-sm-6">
                              <div class="form-group">
                                 <label>Application Name/ Company Name</label>
                                 <input type="text" class="form-control" placeholder="Enter Name" required>
                              </div>
                              <div class="form-group">
                                 <label>Default Landing Page</label>
                                 <select class="form-control">
                                    <option>Admin Login</option>
                                    <option>client Login</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label>Dashboard Page</label>
                                 <select class="form-control">
                                    <option>Canvas</option>
                                    <option>Legacy</option>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label>Pay To Address</label>
                                 <textarea class="form-control" rows="3" required></textarea>
                              </div>
                              <div class="form-group">
                                 <label>Default Invoice Terms</label>
                                 <textarea class="form-control" rows="3" required></textarea>
                              </div>
                              <div class="form-group">
                                 <label>Invoice Starting</label>
                                 <input type="text" class="form-control" placeholder="Enter Invoice Starting" required>
                              </div>
                              <div class="form-group">
                                 <label>Company Email</label>
                                 <input type="email" class="form-control" placeholder="Enter Email" required>
                              </div>
                              <div class="form-group">
                                 <label>Company Mobile</label>
                                 <input type="number" class="form-control" placeholder="Enter Mobile" required>
                              </div>
                              <div class="form-group">
                                 <label>Domain Name</label>
                                 <input type="text" class="form-control" placeholder="Enter domain" required>
                              </div>
                              <div class="form-group">
                                 <label>Default currency</label>
                                 <select class="form-control">
                                    <option>US dollar</option>
                                    <option>Australian dollar</option>
                                    <option>Bdt</option>
                                    <option>Canadian dollar</option>
                                    <option>Euro</option>
                                    <option>Pound</option>
                                 </select>
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
