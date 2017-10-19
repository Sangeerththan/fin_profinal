<?php
    include_once('config.php');
    include_once('system_session.php');
?>
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
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
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
  	       <h3>Order Invoice</h3>

  	         <div class="tab-content">

                 <?php
                    if (isset($_GET['orderId'])){
                        $orderId = $_GET['orderId'];
                        $customerId = $_GET['customerId'];
                        $customerQuery = "SELECT * from tblcustomerdetails WHERE customerId = $customerId";
                        $customerQuery = $mysqli->query($customerQuery);
                        $customerObj = $customerQuery->fetch_object();
                        $customerName = $customerObj->customerName;
                        $addressLine1 = $customerObj->addressLine1;
                        $addressLine2 = $customerObj->addressLine2;
                        $city = $customerObj->city;
                        $province = $customerObj->province;
                        $address = $addressLine1.","."\r"."<br>".$addressLine2.","."\r"."<br>".$city.","."\r"."<br>".$province.".";
                        $contactPerson = $customerObj->contactPerson;
                        $contactNo = $customerObj->contactNo.".";



                        $orderQuery = "SELECT * from tblorder WHERE orderId = $orderId";
                        $orderQuery = $mysqli->query($orderQuery);
                        $orderObj = $orderQuery->fetch_object();
                        $subTotal = $orderObj->subtotal;
                        $discount = $orderObj->discount."%";
                        $total = $orderObj->total;
                    }
                 ?>
						<div class="tab-pane active" id="horizontal-form_1">
							<form class="form-horizontal">
								<div class="form-group">
									<label  class="col-sm-3 control-label"><strong>Order ID :</strong></label>
									<label  class="col-sm-3 control-label" id="ordermodal_orderid"> <?php echo $orderId; ?></label>
									<label  class="col-sm-3 control-label"><strong>Shop Address :</strong></label>
									<label  class="col-sm-3 control-label " id="ordermodal_shopname"><?php echo $address; ?></label>
								</div>
								<div class="form-group">

									<label  class="col-sm-3 control-label"><strong>Shop Name :</strong></label>
									<label  class="col-sm-3 control-label" id="ordermodal_shopaddress"><?php echo $customerName; ?></label>

								</div>
								<div class="form-group">
									<label  class="col-sm-3 control-label"><strong>Contact Person :</strong></label>
									<label  class="col-sm-3 control-label" id="ordermodal_contactperson"><?php echo $contactPerson; ?></label>
									<label  class="col-sm-3 control-label"><strong>Contact Number :</strong></label>
									<label  class="col-sm-3 control-label" id="ordermodal_contactnumber"><?php echo $contactNo; ?></label>
								</div>
							</form>
						</div>
			 </div>
  </div>


		   <div class="grid-form1">
		   <div class="tab-content">
			   <div class="tab-pane active" id="horizontal-form_2">
				   <form class="form-horizontal">
					   <div class="form-group">
						   <label  class="col-sm-2 control-label"><strong>SKU</strong></label>
						   <label  class="col-sm-2 control-label"><strong>Product Name</strong></label>
						   <label  class="col-sm-2 control-label"><strong>Quantity</strong></label>
						   <label  class="col-sm-2 control-label"><strong>Unit Price</strong></label>
						   <label  class="col-sm-2 control-label"><strong>Price</strong></label>
					   </div>
                       <?php
                            $itemQuery = "SELECT * from tblorderitems WHERE orderId = $orderId";
                            $itemQuery = $mysqli->query($itemQuery);
                            while($itemObj = $itemQuery->fetch_object()) {
                                ?>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" id="ordermodal_sku"><?php echo $itemObj->sku; ?></label>
                                    <label class="col-sm-2 control-label"
                                           id="ordermodal_productname"><?php echo $itemObj->productName; ?></label>
                                    <label class="col-sm-2 control-label" id="ordermodal_quantity"><?php echo $itemObj->quantity; ?></label>
                                    <label class="col-sm-2 control-label" id="ordermodal_unitprice"><?php echo $itemObj->unitPrice; ?></label>
                                    <label class="col-sm-2 control-label" id="ordermodal_price"><?php echo $itemObj->price; ?></label>
                                </div>
                                <?php
                            }
                       ?>
				   </form>
			   </div>
		   </div>






			   <!-- //tables -->
		   </div>
		   <!--table for order finished-->




		   <div class="grid-form1">
		   <div class="tab-content">
		  <div class="tab-pane active" id="horizontal-form_3">
			  <form class="form-horizontal">
				  <div class="form-group">
					  <label  class="col-sm-3 control-label"><strong>SubTotal :</strong></label>
					  <label  class="col-sm-3 control-label" id="ordermodal_subtotal"><?php echo $subTotal; ?></label>

				  </div>
				  <div class="form-group">
					  <label  class="col-sm-3 control-label"><strong>Discount :</strong></label>
					  <label  class="col-sm-3 control-label" id="ordermodal_discount"><?php echo $discount; ?></label>
					  <label  class="col-sm-3 control-label"><strong>Total :</strong></label>
					  <label  class="col-sm-3 control-label" id="ordermodal total"><?php echo $total; ?></label>
				  </div>

							</form>
						</div>
					</div>
					


	<div class="bs-example" data-example-id="form-validation-states-with-icons">
    <form>
     
      


      <div class="panel-footer">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<a href="orderDetail.php?redirect=true"> <button class="btn-primary btn">Go back </button></a>
                <button class="btn-primary btn">Print </button>

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
	 <p>© 2017 WestArtVentures . All Rights Reserved | Design by  MatLogic </p>
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