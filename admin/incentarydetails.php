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
                <li class="breadcrumb-item"><a href="index.php">Home</a><i class="fa fa-angle-right"></i>Inventary Details</li>
            </ol>
<div class="agile-grids">	
				<!-- tables -->

	<div class="agile-tables">
		<div class="w3l-table-info">
			<h2>Inventary Details</h2>
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
			<table id="datatable">
				<thead>
				<tr>
					<th>Product ID</th>
					<th>Product Name</th>
                    <th>SKU</th>

                    <th>Quantity</th>




				</tr>
				</thead>
				<tbody>

				<tr id="inventarydetails_rowid">
					<td id="inventerydetails_inventaryid">
                        <input  name="trPrice" type="text" size="10%"/>
                    </td>
					<td id="inventarydetails_inventaryname">
                        <input  name="trPrice" type="text" size="10%"/>
                    </td>
					<td id="inventarydetails_sku">
                        <input  name="trPrice" type="text" size="10%"/>
                    </td>

					<td id="inventarydetails_quantity">
                        <input  name="trPrice" type="number" size="10%"/>
                    </td>






				</tr>


				</tbody>
			</table>
            <div id="addedRows"></div>

            <!--<script type="text/javascript">
                var rowCount = 1;

                function addMoreRows(frm) {
                    rowCount ++;
                    alert(rowCount);
                    var recRow = '<p id="rowCount'+rowCount+'"><tr><td ><input name="trPrice" type="text" size="10%"  maxlength="60" style="margin:10px 38px 0 0;" /></td><td id="inventary_inventaryname"> <select name="trPrice" type="text" style="margin:10px 45px 0 0;"> <option value="">Select...</option> <option value="M">Male</option> <option value="F">Female</option> </select> </td><td id="inventary_sku"><input  name="trPrice" type="text" size="10%"  maxlength="60" style="margin:10px 27px 0 0;"/> </td><td id="inventary_batchnumber"> <input  name="trPrice" type="number" size="10%"  maxlength="60" style="margin:10px 20px 0 0;"/> </td> <td id="inventary_quantity"> <input  name="trPrice" type="number" size="10%"  maxlength="60" style="margin:10px 20px 0 0;"/> </td> <td id="inventary_expirydate"> <input   name="trPrice" type="date" size="10%"  maxlength="60" style="margin:10px 20px 0 0;"/> </td> <td><span style="cursor:pointer;" onclick="removeRow('+rowCount+');">Delete</span></td></tr></p>';
                    jQuery('#addedRows').append(recRow);
                }

                function removeRow(removeNum,table) {

                    alert(removeNum);
                    tablenow.deleteRow(removeNum);

                }
            </script>-->
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