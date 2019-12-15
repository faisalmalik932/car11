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
                  <i class="fa fa-money"></i>
               </div>
               <div class="header-title">
                  <h1>Payment Settings</h1>
                  <small>Payment Settings list</small>
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
                                 <h4>Payment Settings</h4>
                              </a>
                           </div>
                        </div>
                        <div class="panel-body">
                           <form class="col-sm-6">
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
                              <div class="form-group">
                                 <label>Payment Methods</label>
                                 <select class="form-control">
                                    <option>Paypal</option>
                                    <option>Cash</option>
                                    <option>ATM</option>
                                    <option>Check</option>
                                    <option>Credit card</option>
                                    <option>Debit card</option>
                                    <option>Electronic transfer</option>
                                    <option>Online transfer</option>
                                 </select>
                              </div>
                              <div class="reset-button text-center">
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
<!---- footer ---->
        <?php $this->load->view('admin/common/footer');  ?>
<!---- footer ----> 