<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Pooled Admin Panel Category Flat Bootstrap Responsive Web Template | Tabels :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script src="js/w3.js"></script>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->

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
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<!-- tables -->
<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<link rel="stylesheet" type="text/css" href="css/basictable.css" />
<script type="text/javascript" src="js/jquery.basictable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>
<!-- //tables -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
           <?php
           include_once("notifi.php");
           include_once("slidebar.php");
           ?>

		   <!--heder end here-->
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a><i class="fa fa-angle-right"></i>Add New Product</li>
</ol>
		   <div class="grid-form1">
			   <h3>New Product Detail</h3>

               <?php
                if (isset($_GET['sucess'])){
                    echo "<h3 style='text-align: center;'><font color=\"red\"> Saved!.</font></h3>";
                }else if(isset($_GET['error'])){
                    echo "<h3 style='text-align: center;'><font color=\"red\"> Failed, Could not save!</font></h3>";

                }else if(isset($_GET['dup'])){
                    echo "<h3 style='text-align: center;'> <font color=\"red\"> Duplicate product detail, Please Check & Re-enter it.</font></h3>";
                }

               ?>

			   <div class="tab-content">
				   <div class="tab-pane active" id="horizontal-form_1">
					   <form class="form-horizontal" method = "post" action = "addProduct.php">
						   <div class="form-group">

							   <label  ><strong>SKU :</strong></label>
							   <div >
								   <input type="text" class="form-control1" name = "sku" id="addnewproduct_sku" placeholder="SKU" required>
							   </div>

						   </div>
						   <div class="form-group">


							   <label  ><strong>Product Name :</strong></label>
							   <div >
								   <input type="text" class="form-control1" name = "productName" id="addnewproduct_productname" placeholder="Product Name" required>
							   </div>


						   </div>
						   <div class="form-group">


							   <label  ><strong>Supplier :</strong></label>
							   <div >
								   <input type="text" class="form-control1" name = "supplier" id="addnewproduct_city" placeholder="Supplier" required>
							   </div>

						   </div>
						   <div class="form-group">


							   <label  class="col-sm-3 control-label"><strong>TR Price :</strong></label>
							   <div >
								   <input class="col-sm-3 control-label" type="text" name = "trPrice" class="form-control1" id="addnewproduct_trprice" placeholder="TR price" required>
							   </div>
							   <label  class="col-sm-3 control-label"><strong>WS Price :</strong></label>
							   <div >
								   <input class="col-sm-3 control-label" type="text" name = "wsPrice" class="form-control1" id="addnewproduct_wsprice" placeholder="WS price" required>
							   </div>


						   </div>
						   <div class="form-group">
							   <label  class="col-sm-3 control-label"><strong>MR Price :</strong></label>
							   <div >
								   <input class="col-sm-3 control-label" name = "mrPrice" type="text" class="form-control1" id="addnewproduct_mrprice" placeholder="MR price" required>
							   </div>
							   <label  class="col-sm-3 control-label"><strong>Threshold Amount :</strong></label>
							   <div >
								   <input class="col-sm-3 control-label" name = "threshold" type="text" class="form-control1" id="addnewproduct_thresholdamunt" placeholder="Threshold" required>
							   </div>
						   </div>
                           <div class="grid-form1">




                               <div class="bs-example" data-example-id="form-validation-states-with-icons">





                                       <div class="panel-footer">
                                           <div class="row">
                                               <div class="col-sm-8 col-sm-offset-2">
                                                   <button class="btn-primary btn" id="addnewproduct_enter	">ENTER</button>


                                               </div>
                                           </div>
                                       </div>

                               </div>
                           </div>

					   </form>
				   </div>
			   </div>
		   </div>









  <!--//content-inner-->
		<!--/sidebar-menu-->
	   <div w3-include-html="slidebar.html"></div>
	   <script>
           w3.includeHTML();
	   </script>

	   <div class="clearfix"></div>
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   
</div>
   </div>
</body>
</html>