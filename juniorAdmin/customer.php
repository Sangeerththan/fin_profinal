<?php
    include_once ('config.php');
    include_once ('system_session.php');
?>
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
                <li class="breadcrumb-item"><a href="index.php">Home</a><i class="fa fa-angle-right"></i>Customer Deatils</li>
            </ol>
<div class="agile-grids">	
				<!-- tables -->

	<div class="agile-tables">
		<div class="w3l-table-info">
			<h2>Customer Details</h2>
            <?php
            if(isset($_GET['sucess']))
            {
                echo "<h2 style='text-align: center;'><font color=\"red\"> Saved!.</font></h2>";
            }
            else if(isset($_GET['error']))
            {
                echo "<h2 style='text-align: center;'><font color=\"red\"> Failed, Could not save!</font></h2>";

            }
            else if(isset($_GET['dup']))
            {
                echo "<h2 style='text-align: center;'> <font color=\"red\"> Duplicate Shop Registration, Please Check & Re-enter it.</font></h2>";
            }?>
			<table id="table">
				<thead>
				<tr>
					<th>Customer ID</th>
					<th>Customer Name</th>
                    <th>Address</th>

                    <th>Contact Person</th>
					<th>Contact Number</th>


				</tr>
				</thead>
				<tbody>
                <?php
                    $customerQuery = "SELECT * from tblcustomerdetails";
                    $customerQuery = $mysqli->query($customerQuery);
                    while($customerObj = $customerQuery->fetch_object()){
                        $addressLine1 = $customerObj->addressLine1;
                        $addressLine2 = $customerObj->addressLine2;
                        $city = $customerObj->city;
                        $province = $customerObj->province;
                        $address = $addressLine1.","."\r"."<br>".$addressLine2.","."\r"."<br>".$city.","."\r"."<br>".$province;
                ?>
				<tr>
					<td id="customer_customerid"><?php echo $customerObj->customerId ?></td>
					<td id="customer_customername"><?php echo $customerObj->customerName ?></td>
					<td id="customer_address"><?php echo $address ?></td>
					<td id="customer_contactperson"><?php echo $customerObj->contactPerson ?></td>
					<td id="customer_streetnumber"><?php echo $customerObj->contactNo ?></td>

					<td><a href="addnewcustomer.php?editmode=activated
&customerId=<?php echo $customerObj->customerId; ?>
&customerName=<?php echo $customerObj->customerName; ?>
&addressLine1=<?php echo $addressLine1; ?>
&addressLine2=<?php echo $addressLine2; ?>
&city=<?php echo $city; ?>
&province=<?php echo $province; ?>
&contactPerson=<?php echo $customerObj->contactPerson; ?>
&contactNo=<?php echo $customerObj->contactNo; ?>
" id="customer_edit">Edit</a></td>


					<td><a href="javascript:void(0);" onclick="removeRow('+rowCount+');" id="customer_delete">Delete</a></td>
				</tr>
                <?php } ?>
				</tbody>
			</table>
		</div>
	</div>





				<!-- //tables -->
			</div>
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
	 <p>© 2017 WestArt Ventures . All Rights Reserved | Design by  MatLogic </p>
</div>	
<!--COPY rights end here-->
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

</body>
</html>