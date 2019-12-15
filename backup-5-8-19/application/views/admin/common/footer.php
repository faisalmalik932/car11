  
      <!-- ./wrapper -->
      <!-- Start Core Plugins
         =====================================================================-->
      <!-- jQuery -->
      <script src="<?php echo base_url()?>admin_assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
      <!-- jquery-ui --> 
      <script src="<?php echo base_url()?>admin_assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
      <!-- Bootstrap -->
      <script src="<?php echo base_url()?>admin_assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
      <!-- lobipanel -->
      <script src="<?php echo base_url()?>admin_assets/plugins/lobipanel/lobipanel.min.js" type="text/javascript"></script>
      <!-- Pace js -->
      <script src="<?php echo base_url()?>admin_assets/plugins/pace/pace.min.js" type="text/javascript"></script>
      <!-- SlimScroll -->
      <script src="<?php echo base_url()?>admin_assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
      <!-- FastClick -->
      <script src="<?php echo base_url()?>admin_assets/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
      <!-- CRMadmin frame -->
      <script src="<?php echo base_url()?>admin_assets/dist/js/custom.js" type="text/javascript"></script>
      <!-- End Core Plugins
         =====================================================================-->
      <!-- Start Theme label Script
         =====================================================================-->
      <!-- Dashboard js -->
      <script src="<?php echo base_url()?>admin_assets/dist/js/dashboard.js" type="text/javascript"></script>
      <script>
$(document).on("click", "#btn", function () {
     var myBookId = $(this).val();
     alert(myBookId);

      var id = $(this).data('id');
      var name = $(this).data('name');
      var email = $(this).data('email');
      var type = $(this).data('type');
      var pic = $(this).data('pic');
      
      $(".modal #id").val( id );
      $(".modal #name").val( name );
      $(".modal #email").val( email );
      $(".modal #type").val( type );
      $(".modal #old_pic").val( pic );
      
      $('#customer1').modal('show');
     //$(".data #id").val( myBookId );
     // As pointed out in comments, 
     // it is superfluous to have to manually call the modal.
     // $('#addBookDialog').modal('show');
});

$(document).on("click", "#btn_vehicle", function () {
     var myBookId = $(this).val();
     //alert(myBookId);

      var title = $(this).data('title');
      var brand = $(this).data('brand');
      var model = $(this).data('model');
      var pic = $(this).data('pic');
      var id = $(this).data('id');

      //alert(pic);
      
      $(".modal-vehicles #pic").val( pic );
      $(".modal-vehicles #title").val( title );
      $(".modal-vehicles #id").val( id );
      $(".modal-vehicles #brand").val( brand );
      $(".modal-vehicles #model").val( model );
      $(".modal-vehicles #old_pic").val( pic );
      /*$(".modal #image1").val( image1 );
      $(".modal #image2").val( image2 );*/
      
      $('#customerv').modal('show');
});


$(document).on("click", "#btn_testimonials", function () {
     var myBookId = $(this).val();
     //alert(myBookId);

      var name = $(this).data('name');
      var message = $(this).data('message');
      var designation = $(this).data('designation');
      var image = $(this).data('image');
      var id = $(this).data('id');


      //alert(image);
      
      /*$(".modal-testimonials #pic").val( pic );*/
      $(".modal-testimonials #name").val( name );
      $(".modal-testimonials #id").val( id );
      $(".modal-testimonials #message").val( message );
      $(".modal-testimonials #designation").val( designation );
      $(".modal-testimonials #image").val( image );
       $(".modal-testimonials #old_image").val( image );
      /*$(".modal #image1").val( image1 );
      $(".modal #image2").val( image2 );*/
      
      $('#customert').modal('show');
});


$(document).on("click", "#btn_slider", function () {
     var myBookId = $(this).val();
     //alert(myBookId);

      var caption1 = $(this).data('caption1');
      var caption2 = $(this).data('caption2');
      
      var background = $(this).data('background');
      var id = $(this).data('id');


      //alert(background);
      
      /*$(".modal-testimonials #pic").val( pic );*/
      $(".modal-slider #caption1").val( caption1 );
      $(".modal-slider #id").val( id );
      $(".modal-slider #caption2").val( caption2 );
 
      $(".modal-slider #background").val( background );
       $(".modal-slider #old_background").val( background );
      /*$(".modal #image1").val( image1 );
      $(".modal #image2").val( image2 );*/
      
      $('#customers').modal('show');
});


$(document).on("click", "#btn_users", function () {
     var myBookId = $(this).val();
     //alert(myBookId);

      var name = $(this).data('name');
      var email = $(this).data('email');
      var location = $(this).data('location');
      var phone_no = $(this).data('phone_no');
      
      var pic = $(this).data('pic');
      var id = $(this).data('id');

/*   function myFunction() 
{
    if (confirm("Confirm message")) 
    {
       // do stuff
    } 
    else 
    {
      return false;
    }
}*/
      //alert(pic);
      
      /*$(".modal-testimonials #pic").val( pic );*/
      $(".modal-users #name").val( name );
      $(".modal-users #email").val( email );
      $(".modal-users #location").val( location );
      $(".modal-users #id").val( id );
      $(".modal-users #phone_no").val( phone_no );
 
      $(".modal-users #pic").val( pic );
       $(".modal-users #old_picu").val( pic );
      /*$(".modal #image1").val( image1 );
      $(".modal #image2").val( image2 );*/
      
      $('#customeru').modal('show');
});


</script>