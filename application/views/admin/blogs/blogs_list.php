<!---- header ---->
        <?php $this->load->view('admin/common/header');  ?>
<!---- header ----> 


<!---- header ---->
        <?php $this->load->view('admin/common/sidebar');  ?>
<!---- header ----> 
         <!-- =============================================== -->
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-users"></i>
               </div>
               <div class="header-title">
                  <h1>Blogs List</h1>
                  <small></small>
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
                                 <h4>Blog List</h4>
                              </a>
                           </div>
                        </div>
                        <div class="panel-body">
                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="btn-group">
                              <div class="buttonexport" id="buttonlist"> 
                                 <a class="btn btn-add" href="add-customer.html"> <i class="fa fa-plus"></i> Add Blogs
                                 </a>  
                              </div>
                              <button class="btn btn-exp btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Table Data</button>
                              <ul class="dropdown-menu exp-drop" role="menu">
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'json',escape:'false'});"> 
                                    <img src="<?php echo base_url()?>admin_assets/dist/img/json.png" width="24" alt="logo"> JSON</a>
                                 </li>
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'json',escape:'false',ignoreColumn:'[2,3]'});">
                                    <img src="<?php echo base_url()?>admin_assets/dist/img/json.png" width="24" alt="logo"> JSON (ignoreColumn)</a>
                                 </li>
                                 <li><a href="#" onclick="$('#dataTableExample1').tableExport({type:'json',escape:'true'});">
                                    <img src="<?php echo base_url()?>admin_assets/dist/img/json.png" width="24" alt="logo"> JSON (with Escape)</a>
                                 </li>
                                 <li class="divider"></li>
                                 <li><a href="#" onclick="$('#dataTableExample1').tableExport({type:'xml',escape:'false'});">
                                    <img src="<?php echo base_url()?>admin_assets/dist/img/xml.png" width="24" alt="logo"> XML</a>
                                 </li>
                                 <li><a href="#" onclick="$('#dataTableExample1').tableExport({type:'sql'});"> 
                                    <img src="<?php echo base_url()?>admin_assets/dist/img/sql.png" width="24" alt="logo"> SQL</a>
                                 </li>
                                 <li class="divider"></li>
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'csv',escape:'false'});"> 
                                    <img src="<?php echo base_url()?>admin_assets/dist/img/csv.png" width="24" alt="logo"> CSV</a>
                                 </li>
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'txt',escape:'false'});"> 
                                    <img src="<?php echo base_url()?>admin_assets/dist/img/txt.png" width="24" alt="logo"> TXT</a>
                                 </li>
                                 <li class="divider"></li>
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'excel',escape:'false'});"> 
                                    <img src="<?php echo base_url()?>admin_assets/dist/img/xls.png" width="24" alt="logo"> XLS</a>
                                 </li>
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'doc',escape:'false'});">
                                    <img src="<?php echo base_url()?>admin_assets/dist/img/word.png" width="24" alt="logo"> Word</a>
                                 </li>
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'powerpoint',escape:'false'});"> 
                                    <img src="<?php echo base_url()?>admin_assets/dist/img/ppt.png" width="24" alt="logo"> PowerPoint</a>
                                 </li>
                                 <li class="divider"></li>
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'png',escape:'false'});"> 
                                    <img src="<?php echo base_url()?>admin_assets/dist/img/png.png" width="24" alt="logo"> PNG</a>
                                 </li>
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'pdf',pdfFontSize:'7',escape:'false'});"> 
                                    <img src="<?php echo base_url()?>admin_assets/dist/img/pdf.png" width="24" alt="logo"> PDF</a>
                                 </li>
                              </ul>
                           </div>
                           <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="table-responsive">
                              <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">
                                       <th>Photo</th>
                                       <th>Blog Title</th>
                                       <th>Description</th>
                                       <th>Long Description</th>
                                       <th>Address</th>
                                       <th>type</th>
                                       <th>Join</th>
                                       <th>Status</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php foreach ($blogs_data as $key => $bd):?>
                                    <tr class="<?php echo $bd->status==0?"deactive_blogs":"" ?>">

                                       <td><img id="img" src="<?php echo base_url()?>admin_assets/img/blogs/<?php echo $bd->pic ?>" class="img-circle" alt="User Image" width="50" height="50"> 
                                       </td>
                                       <td><?php echo $bd->title ?></td>
                                       <td><?php echo $bd->description ?></td>
                                       <td><?php echo $bd->long_description ?>
                                       </td>
                                       <td>98 Green Rd, Dhaka 1215, Bangladesh</td>
                                       <td><?php echo $bd->type ?></td>
                                       <td>27th April,2017</td>
                                       <td> <a href="<?php echo base_url() ?>Admin_blogs/status/<?php echo $bd->id; ?>/<?php echo $bd->status==0?1:0?>" class="btn outline btn-xs active-btn"><?php echo $bd->status==0?"Active":"Deactive" ?></a>
                                       <td>
                                          <button type="button" id="btn-modal" class="btn btn-add btn-sm" data-toggle="modal" value="<?php echo $bd->id ?>"
                                          data-target="#"
                                          data-id="<?php echo $bd->id ?>"
                                          data-title="<?php echo $bd->title ?>"
                                          data-description="<?php echo $bd->description ?>"
                                          data-long_description="<?php echo $bd->long_description ?>"
                                          data-type="<?php echo $bd->type ?>"
                                          data-pic="<?php echo base_url()?>admin_assets/img/blogs/<?php echo $bd->pic ?>"

                                          >
                                          <i class="fa fa-pencil"></i> Edit  </button>
                                         <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> Delete </button>
                                       </td>
                                    </tr>
                                    <?php endforeach; ?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- customer Modal1 -->
                
               <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h3><i class="fa fa-user m-r-5"></i> Update Customer</h3>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal" action="<?php echo base_url()?>Admin_blogs/edit" method="POST" enctype="multipart/form-data" >
                                    <fieldset>
                                       <!-- Text input-->
                                       <div class="col-md-4 form-group" >
                                          <label class="control-label">Blog Title:</label>
                                          <input type="hidden" name="id" id="id" value="">
                                          <input type="text" id="title" value="" Name="title" class="form-control">
                                       </div>
                                       <!-- Text input-->
                                       <div class="col-md-4 form-group">
                                          <label class="control-label">Description:</label>
                                          <input type="text" id="description" value="" name="description" class="form-control">
                                       </div>
                                       <!-- Text input-->
                                       <div class="col-md-4 form-group">
                                          <label class="control-label">pic</label>
                                          <input type="file" id="pic" name="pic" value="" class="form-control">
                                           <input type="hidden" id="old_pic" name="pic" value="" class="form-control">
                                       </div>
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">Long Description</label><br>
                                          <textarea name=" long_description" id="long_description" value="" rows="3"></textarea>
                                       </div>
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">type</label>
                                          <input type="text" id="type" value="" name="type" class="form-control">
                                       </div>
                                       <div class="col-md-12 form-group user-form-group">
                                          <div class="pull-right">
                                             <button type="button" class="btn btn-danger btn-sm">Cancel</button>
                                             <a href="<?php echo base_url()?>Admin_blogs/edit"><button type="submit" class="btn btn-add btn-sm">Save</button></a>
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
                           <h3><i class="fa fa-user m-r-5"></i> Delete Brand</h3>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal">
                                    <fieldset>
                                       <div class="col-md-12 form-group user-form-group">
                                          <label class="control-label">Delete Brand</label>
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
             <strong>Copyright &copy; 2017 <a href="#">CarAdviserCorp</a>.</strong> All rights reserved.
         </footer>
      </div>
      <!-- ./wrapper -->
<!---- footer ---->
        <?php $this->load->view('admin/common/footer');  ?>
<!---- footer ----> 
 <script src="<?php echo base_url()?>admin_assets/dist/js/dashboard.js" type="text/javascript"></script>
      <script>
$(document).on("click", "#btn-modal", function () {
    
      var id = $(this).data('id');    
      var title = $(this).data('title');
      var description = $(this).data('description');
      var long_description = $(this).data('long_description');
      var type = $(this).data('type');
      var pic = $(this).data('pic');
      alert(pic);
      $(".modal #id").val( id );
      $(".modal #title").val( title );
      $(".modal #description").val( description );
      $(".modal #long_description").val( long_description );
      $(".modal #type").val( type );
      //$(".modal #pic").val( pic );
      $(".modal #old_pic").val( pic );
      
      $('#modal').modal('show');
     //$(".data #id").val( myBookId );
     // As pointed out in comments, 
     // it is superfluous to have to manually call the modal.
     // $('#addBookDialog').modal('show');
});
</script>