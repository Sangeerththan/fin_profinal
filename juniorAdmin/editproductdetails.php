<?php
    include_once('config.php');
    include_once('system_session.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Pooled Admin Panel Category Flat Bootstrap Responsive Web Template | Tabels :: w3layouts</title>


	<script src="js/w3.js"></script>
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
<!-- tables -->
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
                <li class="breadcrumb-item"><a href="index.php">Home</a><i class="fa fa-angle-right"></i>Product Deatils</li>
            </ol>
<div class="agile-grids">	
				<!-- tables -->

	<div class="agile-tables">
		<div class="w3l-table-info">
			<h2>Product Details</h2>
			<table id="table">
				<thead>
				<tr>
					<th>SKU</th>
					<th>product Name</th>
					<th>TR Price</th>
					<th>WS Price</th>
					<th>MR Price</th>
					<th>Supplier</th>
					<th>Threshold Amount</th>

				</tr>
				</thead>
				<tbody>
                <?php
                if (isset($_GET['sku'])){
                    $editSku = $_GET['sku'];

                }
                $productQuery = "SELECT * from tblproductdetails";
                $productQuery = $mysqli->query($productQuery);
                while($productObj=$productQuery->fetch_object()) {
                    $sku = $productObj->sku;
                    if ($sku == $editSku) {
                        ?>
                        <form method = "post" action = "addProduct.php?editmode=activated&sku=<?php echo $sku; ?>">
                        <tr>
                            <td id="product_sku"><?php echo $_GET['sku']; ?></td>
                            <td id="product_productname"><?php echo $_GET['productName']; ?></td>
                            <td id="product_trprice"><input value = "<?php echo $_GET['trPrice']; ?>" name="trPrice" type="text" size="10%"/></td>
                            <td id="product_wsprice"><input value = "<?php echo $_GET['wsPrice']; ?>" name="wsPrice" type="text" size="10%"/></td>
                            <td id="product_mrprice"><input value = "<?php echo $_GET['mrPrice']; ?>" name="mrPrice" type="text" size="10%"/></td>
                            <td id="product_supplier"><?php echo $_GET['supplier']; ?></td>
                            <td id="product_thresholdamount"><input value = "<?php echo $_GET['threshold']; ?>" name="threshold" type="text" size="10%"/></td>
                            <td><div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <button class="btn-primary btn"> Change </button>


                                    </div>
                                </div></td>

                        </tr>
                        </form>
                        <?php
                    }else { ?>
                        <tr>
                            <td id="product_productid"><?php echo $productObj->sku; ?></td>
                            <td id="product_productname"><?php echo $productObj->name; ?></td>
                            <td id="product_trprice"><?php echo $productObj->trPrice; ?></td>
                            <td id="product_wsprice"><?php echo $productObj->wsPrice; ?></td>
                            <td id="product_mrprice"><?php echo $productObj->mrPrice; ?></td>
                            <td id="product_supplier"><?php echo $productObj->supplier; ?></td>
                            <td id="product_thresholdamount"><?php echo $productObj->threshold; ?></td>


                        </tr>

                        <?php
                    }
                }
                ?>
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