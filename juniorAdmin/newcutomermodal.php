<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Pooled Admin Panel Category Flat Bootstrap Responsive Web Template | Input :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--<script src="https://www.w3schools.com/lib/w3.js"></script>-->
    <script src="js/w3.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />

    <link rel="stylesheet" href="css/morris.css" type="text/css"/>
    <!-- Graph CSS -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="js/jquery-2.1.4.min.js"></script>
    <!-- //jQuery -->
    <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- lined-icons -->
    <link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/w3.js"></script>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
	<script src="js/w3.js"></script>
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body>

   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
           <?php
           include_once("notifi.php");
           include_once("slidebar.php");
           ?>

  <div class="grid-form1">
  	       <h3>New Customer Detail</h3>

  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form_1">
							<form class="form-horizontal">
								<div class="form-group">
									<label  class="col-sm-3 control-label" ><strong>Customer ID :</strong></label>
									<label  class="col-sm-3 control-label" id="newcustomermodal_customerid">Customer ID</label>
									<label  class="col-sm-3 control-label"><strong>Shop Name :</strong></label>
									<label  class="col-sm-3 control-label" id="newcustomermodal_shopname">Shop name</label>
								</div>
								<div class="form-group">


									<label  class="col-sm-3 control-label"><strong>Street Address :</strong></label>
									<label  class="col-sm-6 control-label" id="newcustomermodal_streetaddress_1">Street address_1</label>
									<label  class="col-sm-3 control-label"><strong></strong></label>
									<label  class="col-sm-9 control-label" id="newcustomermodal_streetaddress_2">Street address_2</label>
								</div>
								<div class="form-group">


									<label  class="col-sm-3 control-label"><strong>city :</strong></label>
									<label  class="col-sm-6 control-label" id="newcustomermodal_city">city</label>
								</div>
								<div class="form-group">


									<label  class="col-sm-3 control-label"><strong>Province :</strong></label>
									<label  class="col-sm-6 control-label"  id="newcustomermodal_province">province</label>
								</div>
								<div class="form-group">
									<label  class="col-sm-3 control-label"><strong>Contact Person :</strong></label>
									<label  class="col-sm-3 control-label" id="newcustomermodal_contactperson">contact person</label>
									<label  class="col-sm-3 control-label"><strong>Contact Number :</strong></label>
									<label  class="col-sm-3 control-label" id="newcustomermodal_number">contact number</label>
								</div>
							</form>
						</div>
			 </div>
  </div>








		   <div class="grid-form1">

					


	<div class="bs-example" data-example-id="form-validation-states-with-icons">
    <form>
     
      


      <div class="panel-footer">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<button class="btn-primary btn"  id="newcustomermodal_accept">Accept</button>


			</div>
		</div>
	 </div>
    </form>
  </div>
 	</div>
 	<!--//grid-->

<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2016 Pooled . All Rights Reserved | Design by  MatLogic </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
		<!--/sidebar-menu-->


<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   
   </div>

</body>
</html>