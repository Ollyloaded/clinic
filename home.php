<?php
  $page_title = 'Home Page';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-12">
    <?php echo display_msg($msg); ?>
  </div>
 <div class="col-md-12">
    <div class="panel">
      <div class="jumbotron text-center">
         <h2><marquee><b>Welcome to Alpha Clinic Pharmacy</marquee></h2>
         <p>You are responsible for any illegal Drugs dispenses that links to your profile.<br>Always keep your login details safe.<br>Browse around to find out the pages that you can access!</p>
		 
		 <p><br>Note: Kindly report to the I.T Department if you notice any illegal login on your account!
		 </p>
      </div>
    </div>
 </div>
</div>
<?php include_once('layouts/footer.php'); ?>
