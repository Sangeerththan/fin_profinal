<?php

include_once("config.php");
date_default_timezone_set('Asia/colombo');
include_once("system_session.php");
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>WESTART VENTURES...ADMIN</title>



	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!--<script src="https://www.w3schools.com/lib/w3.js"></script>-->
	<script src="js/w3.js"></script>

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

    <!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/simplegrid.css"/>
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

            $customerQuery = "SELECT * from tblcustomerdetails";
            $customerQuery = $mysqli->query($customerQuery);
            $customerCount = mysqli_num_rows($customerQuery);

            $productQuery = "SELECT * from tblproductdetails";
            $productQuery = $mysqli->query($productQuery);
            $productCount = mysqli_num_rows($productQuery);

            $supplierQuery = "SELECT * from tblsupplierdetails";
            $supplierQuery = $mysqli->query($supplierQuery);
            $supplierCount = mysqli_num_rows($supplierQuery);

            $employeeQuery = "SELECT * from tbllogin";
            $employeeQuery = $mysqli->query($employeeQuery);
            $employeeCount = mysqli_num_rows($employeeQuery);
            ?>
			<!--heder end here-->
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a> <i class="fa fa-angle-right"></i></li>
			</ol>
			<!--four-grids here-->
			<div class="four-grids">
                <a href = "supplier.php">
				<div class="col-md-3 four-grid">

					<div class="four-agileits">
                        <div class="icon">
                            <i class="glyphicon glyphicon-user" aria-hidden="true"></i>
                        </div>
                        <div class="four-text">
                            <h3>Suppliers</h3>
                            <h4><?php echo $supplierCount; ?></h4>

                        </div>

                    </div>


				</div>
                </a>

                <a href = "customer.php">
				<div class="col-md-3 four-grid">
					<div class="four-agileinfo">
						<div class="icon">
							<i class="glyphicon glyphicon-user" aria-hidden="true"></i>
						</div>
						<div class="four-text">
							<h3>Clients</h3>
							<h4><?php echo $customerCount; ?></h4>

						</div>

					</div>
				</div>
                </a>


                <a href = "product.php">
				<div class="col-md-3 four-grid">
					<div class="four-w3ls">
						<div class="icon">
							<i class="glyphicon glyphicon-th" aria-hidden="true"></i>
						</div>
						<div class="four-text">
							<h3>Products</h3>
							<h4><?php echo $productCount; ?> </h4>

						</div>

					</div>
				</div>
                </a>


                <a href = "employee.php">
				<div class="col-md-3 four-grid">
                    <div class="four-wthree">
                        <div class="icon">
                            <i class="glyphicon glyphicon-briefcase" aria-hidden="true"></i>
                        </div>
                        <div class="four-text">
                            <h3>Employees</h3>
                            <h4><?php echo $employeeCount; ?></h4>

                        </div>

                    </div>
                </div>

                </a>
				<div class="clearfix"></div>
			</div>
			<!--//four-grids here-->


			<!--agileinfo-grap-->
            <!--
			<div class="agileinfo-grap">
				<div class="agileits-box">
					<header class="agileits-box-header clearfix">
						<h3>Statistics</h3>
						<div class="toolbar">
							<div class="pull-left">
								<div class="btn-group">
									<a href="#" class="btn btn-default btn-xs">Daily</a>
									<a href="#" class="btn btn-default btn-xs active">Monthly</a>
									<a href="#" class="btn btn-default btn-xs">Yearly</a>
								</div>
							</div>
							<div class="pull-right">
								<div class="btn-group">
									<a aria-expanded="false" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
										Export <i class="fa fa-angle-down"></i>
									</a>
									<ul class="dropdown-menu pull-right" role="menu">
										<li><a href="#">Export as PDF</a></li>
										<li><a href="#">Export as CSV</a></li>
										<li><a href="#">Export as PNG</a></li>
										<li class="divider"></li>
										<li><a href="#">Separated link</a></li>
									</ul>
								</div>
								<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-cog"></i></a>
							</div>
						</div>
					</header>
					<div class="agileits-box-body clearfix">
						<div id="hero-area"></div>

					</div>
				</div>

			</div>-->
			<!--//agileinfo-grap-->
			<!--photoday-section-->

            <div class = "w3-agile-pane">

                <div class="stats-info stats-last widget-shadow">
                    <table class="table stats-table ">
                        <h3 align="center" >Product with least stock</h3>
                        <thead>
                        <tr>
                            <th>SKU</th>
                            <th>Product name</th>
                            <th>Availability</th>
                            <th>Supplier</th>

                            <th>Contact no</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Lorem ipsum</td>

                            <td><h5>85% <i class="fa fa-level-up"></i></h5></td>
                        </tr>
                        <!--<tr>
                            <th scope="row">2</th>
                            <td>Aliquam</td>

                            <td><h5>35% <i class="fa fa-level-up"></i></h5></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Lorem ipsum</td>
                            <td><span class="label label-danger">Overdue</span></td>
                            <td><h5 class="down">40% <i class="fa fa-level-down"></i></h5></td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Aliquam</td>
                            <td><span class="label label-info">Out of stock</span></td>
                            <td><h5>100% <i class="fa fa-level-up"></i></h5></td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Lorem ipsum</td>
                            <td><span class="label label-success">In progress</span></td>
                            <td><h5 class="down">10% <i class="fa fa-level-down"></i></h5></td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Aliquam</td>
                            <td><span class="label label-warning">New</span></td>
                            <td><h5>38% <i class="fa fa-level-up"></i></h5></td>
                        </tr>-->
                        </tbody>
                    </table>
                </div>
                <div class="clearfix"></div>
            </div>


			<div class="col-sm-4 wthree-crd">
				<div class="card">
					<div class="card-body">
						<div class="widget widget-report-table">
							<header class="widget-header m-b-15">
							</header>

							<div class="row m-0 md-bg-grey-100 p-l-20 p-r-20">
								<div class="col-md-6 col-sm-6 col-xs-6 w3layouts-aug">
									<h3><?php echo date('M Y'); ?></h3><!--date-->
									<p>MONTHLY REPORT</p>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6 ">
                                    <?php
                                        $nameQuery = "SELECT firstName,userId from tbllogin where position = 2";
                                        $nameQuery = $mysqli->query($nameQuery);
                                        $nameCount = 0;
                                        $orderCount = 0;
                                        $totalCount = 0;
                                        $totalArray = Array();
                                        $nameArray = Array();
                                        $orderArray = Array();

                                        while($nameObj = $nameQuery->fetch_object()){

                                            $nameArray[$nameCount] = $nameObj->firstName;
                                            $nameCount += 1;
                                            $salesPersonId = $nameObj->userId;


                                            $orderQuery = "SELECT total from tblorder WHERE takenBy = $salesPersonId and MONTH(takenTime) = MONTH(CURRENT_DATE)";
                                            $orderQuery = $mysqli->query($orderQuery);
                                            $numOfOrder = mysqli_num_rows($orderQuery);
                                            $orderArray[$orderCount] = $numOfOrder;
                                            $orderCount += 1;

                                            if ($numOfOrder == 0){
                                                $totalArray[$totalCount]=0;

                                            }else{
                                                $total = 0;
                                                while($orderObj = $orderQuery->fetch_object()){
                                                    $total += $orderObj->total;
                                                }
                                                $totalArray[$totalCount] = $total;
                                            }
                                            $totalCount += 1;
                                    }
                                    $finalTotal = 0;
                                    $totalArrLen = count($totalArray);
                                    for($i = 0 ; $i < $totalArrLen; $i++){
                                        $finalTotal += $totalArray[$i];
                                    }

                                    ?>


									<h2 class="text-right c-teal f-300 m-t-20">Rs.<?php echo $finalTotal ?> </h2><!--Amount-->
								</div>
							</div>

							<div class="widget-body p-15">
								<table class="table table-bordered">
									<thead>

									<tr>
										<th>Name</th>
										<th>Order Count</th>
										<th>Amount</th>
									</tr>
									</thead>
									<tbody>
                                    <?php
                                    $nameArrLen = count($nameArray);
                                    for($i = 0 ; $i < $totalArrLen; $i++){

                                    ?>
									<tr>
                                        <th><?php echo $nameArray[$i] ?></th>
                                        <th><?php echo $orderArray[$i] ?></th>
                                        <th><?php echo $totalArray[$i] ?></th>
									</tr>

                                    <?php } ?>
									<!--<tr>
                                        <td>4589</td>
                                        <td>Lorem Ipsum</td>
                                        <td>6,500.00</td>
                                    </tr>

                                    <tr>
                                        <td>3269</td>
                                        <td>specimen book</td>
                                        <td>6,800.00</td>
                                    </tr>
                                    <tr>
                                        <td>5126</td>
                                        <td>Letraset sheets</td>
                                        <td>7,200.00</td>
                                    </tr>
                                    <tr>
                                        <td>7425</td>
                                        <td>PageMaker</td>
                                        <td>5,900.00</td>
                                    </tr>-->
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-4 w3-agileits-crd">

				<div class="card card-contact-list">
					<div class="agileinfo-cdr">
						<div class="card-header">
							<h3>Contacts</h3>
						</div>
						<div class="card-body p-b-20">
							<div class="list-group">
                                <?php

                                $employeeQuery = "SELECT * from tbllogin order by position ASC";
                                $employeeQuery = $mysqli->query($employeeQuery);
                                while($employeeObj = $employeeQuery->fetch_object()) {
                                    $position = $employeeObj->position;
                                    if ($position == 0) {
                                        $strPositon = "Admin";
                                        $img = "in1.png";
                                    } elseif ($position == 1) {
                                        $strPositon = "Junior admin";
                                        $img = "in2.png";
                                    } elseif ($position == 2) {
                                        $strPositon = "Sales person";
                                        $img = "in6.jpg";
                                    } elseif ($position == 3) {
                                        $strPositon = "Delivery person";
                                        $img = "in3.png";
                                    }

                                    $contactNo = $employeeObj->contactNo;
                                    $name = $employeeObj->firstName;

                                    ?>

                                    <a class="list-group-item media" href="">
                                        <div class="pull-left">
                                            <img class="lg-item-img" src="images/<?php echo $img; ?>" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="pull-left">
                                                <!--Stakeholders details-->
                                                <div class="lg-item-heading"><?php echo $name; ?></div>
                                                <small class="lg-item-text"><?php echo $contactNo; ?></small>
                                            </div>
                                            <div class="pull-right">
                                                <div class="lg-item-heading"><?php echo $strPositon; ?></div>
                                            </div>
                                        </div>
                                    </a>

                                    <?php
                                    }
                                ?>



							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4 w3-agile-crd">
				<div class="card">
					<div class="card-body card-padding">
						<div class="widget">
							<header class="widget-header">
								<h4 class="widget-title">Activities</h4>
							</header>
							<hr class="widget-separator">
							<div class="widget-body">
								<div class="streamline">
									<div class="sl-item sl-primary">
                                        <?php
                                        $approvalQuery = "SELECT * from tblorder WHERE status = 0 ORDER BY takenTime DESC ";
                                        $approvalQuery = $mysqli->query($approvalQuery);
                                        $approvalCount = mysqli_num_rows($approvalQuery);
                                        if($approvalCount > 0){
                                            $approvalObj = $approvalQuery->fetch_object();
                                            $takenBy = $approvalObj->takenBy;
                                            $salesPersonQuery = "SELECT firstName from tbllogin WHERE userId = $takenBy";
                                            $salesPersonQuery = $mysqli->query($salesPersonQuery);
                                            $salesPersonObj = $salesPersonQuery->fetch_object();
                                            $salesPersonName = $salesPersonObj->firstName;

                                            $currentTime = date('Y-m-d H:i:s');
                                            $takenTime = $approvalObj->takenTime;
                                            $ago = findTime($takenTime,$currentTime);

                                            $activity = "Order added by"." ".$salesPersonName;
                                        }else{
                                            $ago = "#####";
                                            $activity = "No orders added yet";
                                        }
                                        ?>
										<div class="sl-content">
											<small class="text-muted"><?php echo $ago;?> ago</small><!--TIME-->
											<p><?php echo $activity;?> </p>
										</div>
									</div>
									<div class="sl-item sl-danger">
                                        <?php
                                        $approvedQuery = "SELECT * from tblorder WHERE status != 0 ORDER BY approvedTime DESC ";
                                        $approvedQuery = $mysqli->query($approvedQuery);
                                        $approvedCount = mysqli_num_rows($approvedQuery);
                                        if($approvedCount > 0){
                                            $approvedObj = $approvedQuery->fetch_object();

                                            $takenBy = $approvedObj->takenBy;
                                            $salesPersonQuery = "SELECT firstName from tbllogin WHERE userId = $takenBy";
                                            $salesPersonQuery = $mysqli->query($salesPersonQuery);
                                            $salesPersonObj = $salesPersonQuery->fetch_object();
                                            $salesPersonName = $salesPersonObj->firstName;

                                            $currentTime = date('Y-m-d H:i:s');
                                            $approvedTime = $approvedObj->approvedTime;
                                            $ago = findTime($approvedTime,$currentTime);

                                            $activity = "Order approved added by"." ".$salesPersonName;
                                        }else{
                                            $ago = "#####";
                                            $activity = "No orders approved yet";
                                        }
                                        ?>
										<div class="sl-content">
											<small class="text-muted"><?php echo $ago;?> ago</small>
											<p><?php echo $activity; ?></p>
										</div>
									</div>
									<div class="sl-item sl-success">
                                        <?php
                                        $deliveredQuery = "SELECT * from tblorder WHERE status = 2 ORDER BY deliveredTime  DESC ";
                                        $deliveredQuery = $mysqli->query($deliveredQuery);
                                        $deliveredCount = mysqli_num_rows($deliveredQuery);
                                        if($deliveredCount > 0){
                                            $deliveredObj = $deliveredQuery->fetch_object();

                                            $deliveredBy = $deliveredObj->deliveredBy;
                                            $deliveryPersonQuery = "SELECT firstName from tbllogin WHERE userId = $deliveredBy";
                                            $deliveryPersonQuery = $mysqli->query($deliveryPersonQuery);
                                            $deliveryPersonObj = $deliveryPersonQuery->fetch_object();
                                            $deliveryPersonName = $deliveryPersonObj->firstName;

                                            $currentTime = date('Y-m-d H:i:s');
                                            $deliveredTime = $deliveredObj->deliveredTime;
                                            $ago = findTime($deliveredTime,$currentTime);

                                            $activity = "Order delivered by"." ".$deliveryPersonName;
                                        }else{
                                            $ago = "#####";
                                            $activity = "No orders delivered yet";
                                        }
                                        ?>
										<div class="sl-content">
											<small class="text-muted"><?php echo $ago;?> ago</small>
											<p><?php echo $activity; ?></p>
										</div>
									</div>
									<div class="sl-item">
										<div class="sl-content">
											<small class="text-muted">45 minutes ago</small>
											<p>John has finished his task</p>
										</div>
									</div>
									<div class="sl-item sl-warning">
										<div class="sl-content">
											<small class="text-muted">55 mins ago</small>
											<p>Jim shared a folder with you</p>
										</div>
									</div>

								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>

			<!--//photoday-section-->
			<!--w3-agileits-pane-->


			<!--//w3-agileits-pane-->
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
				<p>© 2016 Pooled. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
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
<!-- morris JavaScript -->
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
<script>
    $(document).ready(function() {
        //BOX BUTTON SHOW AND CLOSE
        jQuery('.small-graph-box').hover(function() {
            jQuery(this).find('.box-button').fadeIn('fast');
        }, function() {
            jQuery(this).find('.box-button').fadeOut('fast');
        });
        jQuery('.small-graph-box .box-close').click(function() {
            jQuery(this).closest('.small-graph-box').fadeOut(200);
            return false;
        });

        //CHARTS
        function gd(year, day, month) {
            return new Date(year, month - 1, day).getTime();
        }

        graphArea2 = Morris.Area({
            element: 'hero-area',
            padding: 10,
            behaveLikeLine: true,
            gridEnabled: false,
            gridLineColor: '#dddddd',
            axes: true,
            resize: true,
            smooth:true,
            pointSize: 0,
            lineWidth: 0,
            fillOpacity:0.85,
            data: [
                {period: '2014 Q1', iphone: 2668, ipad: null, itouch: 2649},
                {period: '2014 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
                {period: '2014 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
                {period: '2014 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
                {period: '2015 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
                {period: '2015 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
                {period: '2015 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
                {period: '2015 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
                {period: '2016 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
                {period: '2016 Q2', iphone: 8442, ipad: 5723, itouch: 1801}
            ],
            lineColors:['#ff4a43','#a2d200','#22beef'],
            xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
            pointSize: 2,
            hideHover: 'auto',
            resize: true
        });


    });
</script>
</body>
</html>