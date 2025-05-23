<!-- Main Footer -->
<footer class="main-footer">
  <div class="hidden-xs" style="float: right;">Designed and developed by <a class="link-primary" href="https://orderitsolution.com/" target="_blank">Order It Solution.</a></div>
  Copyright &copy; <?php echo date('Y'); ?> <a class="footer-privacy__link link-primary" target="_blank" href="https://medassure.co.in">Medassure</a> All rights reserved.
</footer>

<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>



<link rel="stylesheet" href="<?php echo base_url('admin_assets/css/jquery-ui.1.13.1.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('admin_assets/css/sweetalert.css'); ?>">

<!-- Jquery ui js -->
<script src="<?php echo base_url('admin_assets/js/jquery-ui.1.13.1.js'); ?>"></script>
<!-- Date picker -->
<script src="<?php echo base_url('admin_assets/js/jquery-ui.multidatespicker.js'); ?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url('admin_assets/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('admin_assets/js/custom.js'); ?>"></script>
<!-- Sweet alert js -->
<script src="<?php echo base_url('admin_assets/js/sweetalert.js');?>"></script>
<!-- Jquery validation js -->
<script src="<?php echo base_url( ); ?>admin_assets/js/jquery.validate.js" type="text/javascript"></script>

<!-- CDN Moment js -->
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script> -->
<!-- CDN for full calendar js -->
<script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js"></script>
<!-- Multi select dropdown js -->
<script src="<?php echo base_url( ); ?>admin_assets/js/multiselect.js" type="text/javascript"></script>

<script src="<?php echo base_url( ); ?>admin_assets/js/validation.js" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/qtip2/3.0.3/jquery.qtip.min.js"></script>
<!-- Sweet alert js -->
<script src="<?php echo base_url('admin_assets/js/main2.js');?>"></script>

<!-- <script src="<?php echo base_url( ); ?>admin_assets/js/calendarscript.js" type="text/javascript"></script> -->

</body>
</html>

<script>
  var path = window.location.pathname;

  var page = '';
  var getPages = [];
  var segments = path.split("/");
  segments = segments.filter(function(segment) {
    return segment !== "";
  });

  for (var i = 0; i < segments.length; i++) {
    //console.log("Segment " + i + ": " + segments[i]);
    getPages.push(segments[i]);
  }
  var lastIndex = getPages.length - 1;
  var lastPath = getPages[lastIndex];

  if (!isNaN(lastPath)) {
    page = getPages[lastIndex-1];
  } else {
    page = lastPath;
  }
  


  if(page == 'index.php' || page == '' || page == 'admin'){
    $('#indexPage').addClass('active');
  }
  if(page == 'hospital' || page == 'addhospital' || page == 'edithospital'){
    $('#hospitalPage').addClass('active');
  }
  if(page == 'doctor' || page == 'adddoctor' || page == 'editdoctor'){
    $('#doctorPage').addClass('active');
  }
  if(page == 'enquiry'){
    $('#enquiryPage').addClass('active');
  }
  if(page == 'faq' || page == 'addfaq' || page == 'editfaq'){
    $('#faqPage').addClass('active');
  }
  if(page == 'author' || page == 'addauthor' || page == 'editauthor'){
    $('#authorPage').addClass('active');
  }
  if(page == 'googlerating' || page == 'addgooglerating' || page == 'editgooglerating'){
    $('#googleratingPage').addClass('active');
  }
  if(page == 'category' || page == 'addcategory' || page == 'editcategory'){
    $('#categoryPage').addClass('active');
  }
  if(page == 'video' || page == 'addvideo' || page == 'editvideo'){
    $('#videoPage').addClass('active');
  }
  if(page == 'patienttestimonial' || page == 'addpatienttestimonial' || page == 'editpatienttestimonial'){
    $('#patienttestimonialPage').addClass('active');
  }
  if(page == 'lowestquote' || page == 'addlowestquote' || page == 'editlowestquote'){
    $('#lowestquotePage').addClass('active');
  }
  if(page == 'multispecialty' || page == 'addmultispecialty' || page == 'editmultispecialty'){
    $('#multispecialtyPage').addClass('active');
  }
  if(page == 'tophospital' || page == 'edittophospital'){
    $('#tophospitalPage').addClass('active');
  }
  if(page == 'department' || page == 'adddepartment' || page == 'editdepartment'){
    $('#departmentPage').addClass('active');
  }
  if(page == 'treatment' || page == 'addtreatment' || page == 'edittreatment'){
    $('#treatmentPage').addClass('active');
  }
  if(page == 'cost' || page == 'addcost' || page == 'editcost'){
    $('#costPage').addClass('active');
  }
  if(page == 'service' || page == 'addservice' || page == 'editservice'){
    $('#servicesPage').addClass('active');
  }
  if(page == 'adminuser' || page == 'addadminuser' || page == 'editadminuser'){
    $('#adminuserPage').addClass('active');
  }
  console.log(page);
  
</script>