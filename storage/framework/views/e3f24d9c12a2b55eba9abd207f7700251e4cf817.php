<!DOCTYPE html>
<html lang="en">
<head>
<title>Maruti Admin</title>
<meta charset="UTF-8" />
<base href="<?php echo e(asset('')); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="asset_admin/css/bootstrap.min.css" />
<link rel="stylesheet" href="asset_admin/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="asset_admin/css/fullcalendar.css" />
<link rel="stylesheet" href="asset_admin/css/maruti-style.css" />
<link rel="stylesheet" href="asset_admin/css/maruti-media.css" class="skin-color" />

</head>
<body>

      <?php echo $__env->make('admin.layout.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php echo $__env->yieldContent('content'); ?>
</div>
<div class="row-fluid">
  <div id="footer" class="span12"> 2012 &copy; Marutii Admin. Brought to you by <a href="#">Themedesigner.in</a> </div>
</div>
<script src="asset_admin/js/excanvas.min.js"></script> 
<script src="asset_admin/js/jquery.min.js"></script> 
<script src="asset_admin/js/jquery.ui.custom.js"></script> 
<script src="asset_admin/js/bootstrap.min.js"></script> 
<script src="asset_admin/js/jquery.flot.min.js"></script> 
<script src="asset_admin/js/jquery.flot.resize.min.js"></script> 
<script src="asset_admin/asset_admin/ity.min.js"></script> 
<script src="asset_admin/js/fullcalendar.min.js"></script> 
<script src="asset_admin/js/maruti.js"></script> 
<script src="admin_asset/js/maruti.dashboard.js"></script> 
<script src="asset_admin/js/maruti.chat.js"></script> 
 

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
