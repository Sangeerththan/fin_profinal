<?php
    include_once('system_session.php');
    include_once('config.php');
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
        <?php if (isset($_GET['editmode'])) { ?>
            <li class="breadcrumb-item" ><a href = "index.php" > Home</a ><i class="fa fa-angle-right" ></i >Customer details </li ><i class="fa fa-angle-right" ></i ></i > Edit Customer details </li >
        <?php } else { ?>
            <li class="breadcrumb-item" ><a href = "index.php" > Home</a ><i class="fa fa-angle-right" ></i > Add New Customer </li >
        <?php } ?>

</ol>
		   <div class="grid-form1">
			   <h3><?php
                   if(isset($_GET['editmode']))
                   { echo "Edit Customer details";
                       $post_pass_value="?editmode=activated&customerId=".$_GET['customerId'];}
                   else { echo "New Customer Detail";$post_pass_value=""; } ?></h3>


               <?php
               if(isset($_GET['sucess']))
               {
                   echo "<h3 style='text-align: center;'><font color=\"red\"> Saved!.</font></h3>";
               }
               else if(isset($_GET['error']))
               {
                   echo "<h3 style='text-align: center;'><font color=\"red\"> Failed, Could not save!</font></h3>";

               }
               else if(isset($_GET['dup']))
               {
                   echo "<h3 style='text-align: center;'> <font color=\"red\"> Duplicate Shop Registration, Please Check & Re-enter it.</font></h3>";
               }?>
			   <div class="tab-content">
				   <div class="tab-pane active" id="horizontal-form_1">
					   <form class="form-horizontal" method = "post" action = "<?php echo "addCustomer.php".$post_pass_value ?>">
                           <?php if(isset($_GET['editmode'])) { ?>
                           <div class="form-group">

                               <label  class="col-sm-3 control-label"><strong>Customer ID :</strong></label>

                               <label id="editcustomer_customerid" class="col-sm-3 control-label"  > <?php if(isset($_GET['customerId'])) { echo $_GET['customerId'];}?></strong></label>


                           </div>
                           <?php } ?>
						   <div class="form-group">

							   <label  ><strong>Shop Name :</strong></label>
							   <div >
								   <input type="text" class="form-control1" onkeyup="customername()" value="<?php if(isset($_GET['customerName'])) { echo $_GET['customerName'];}?>" name = "shopName"id="addnewcustomer_customer" placeholder="Customer Name" required>
							   </div>
                                <p id="addnewcustomer_customeralert"></p>
						   </div>
						   <div class="form-group">


							   <label  ><strong>Street Address :</strong></label>
							   <div >
								   <input type="text" class="form-control1" value="<?php if(isset($_GET['addressLine1'])) { echo $_GET['addressLine1'];}?>" name = "streetAddressLine1" id="addnewcustomer_streetaddress_1" placeholder="Street Address line 1" required >
							   </div><div >
							   <input type="text" class="form-control1" value="<?php if(isset($_GET['addressLine2'])) { echo $_GET['addressLine2'];}?>" name =  "streetAddressLine2" id="addnewcustomer_streetaddress_2" placeholder="Street Address line 2" required>
						   </div>


						   </div>
						   <div class="form-group">


							   <label  ><strong>city :</strong></label>
							   <div >
								   <input type="text"   onkeyup="cityfunction()" value="<?php if(isset($_GET['city'])) { echo $_GET['city'];}?>" name = "city" class="form-control1"  id="addnewcustomer_city" placeholder="City" required>
							   </div>

						   </div>
						   <div class="form-group">


							   <label  ><strong>Province :</strong></label>
                               <div class="col-md-12 form-group2 group-mail">

                                   <select>
                                       <option value="">Western</option>
                                       <option value="">Central</option>
                                       <option value="">North Central</option>
                                       <option value="">North Western</option>
                                       <option value="">Subaragamuwa</option>
                                       <option value="">Eastern</option>
                                       <option value="">Northern</option>
                                       <option value="">Uwa</option>
                                       <option value="">Western</option>
                                   </select>
                               </div>

						   </div>
						   <div class="form-group">
							   <label  ><strong>Contact Person :</strong></label>
							   <div >
								   <input type="text"  class="form-control1" onkeyup="contactperson()" value="<?php if(isset($_GET['contactPerson'])) { echo $_GET['contactPerson'];}?>"class="form-control1" name = "contactPerson" id="addnewcustomer_contactperson" placeholder="Contact Person" required>
							   </div>
						   </div>
						   <div class="form-group">
							   <label  ><strong>Contact Number :</strong></label>
							   <div >
								   <input type="text" onkeyup="phonenumber()"  value="<?php if(isset($_GET['contactNo'])) { echo $_GET['contactNo'];} ?>" class="form-control1" name = "contactNo" id="addnewcustomer_contactnumber" placeholder="Contact Number" required>
							   </div>
						   </div>
                           <div class="grid-form1">




                               <div class="bs-example" data-example-id="form-validation-states-with-icons">
                                   <form>




                                       <div class="panel-footer">
                                           <div class="row">
                                               <div class="col-sm-8 col-sm-offset-2">
                                                   <button class="btn-primary btn" id="addnewcustomer_accept	">Accept</button>


                                               </div>
                                           </div>
                                       </div>
                                   </form>
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

    <!--Validation code-->

    <script>
        //function for phone number
        function phonenumber() {
            var content = document.getElementById("addnewcustomer_contactnumber").value;

            var subcontent=content.substring(content.length-1);
            if(content.length >10){
                alert("Phone Number not More Than 10 digits");
                content = content.substring(0, content.length - 1);
                document.getElementById("addnewcustomer_contactnumber").value=content;
            }
            if(subcontent=="."){
                alert("Must input phone number ,Not Decimal");
                content = content.substring(0, content.length - 1);
                document.getElementById("addnewcustomer_contactnumber").value=content;
            }
            if ((content%1) !=0)
            {

                alert("Must input phone number");
                content = content.substring(0, content.length - 1);
                document.getElementById("addnewcustomer_contactnumber").value=content;
            };

        }

        function customername() {
            var content=document.getElementById("addnewcustomer_customer").value;
            var subcontent=content.substring(content.length-1);
            var regex=/^[a-zA-Z]+$/;



            if(subcontent!="."){
                if (!subcontent.match(regex)) {
                    if (content.length>0) {

                        alert("Must input Text in Customer Name");
                        content = content.substring(0, content.length - 1);
                        document.getElementById("addnewcustomer_customer").value = content;
                    }
                }
            }

        }
        function cityfunction() {
            var content=document.getElementById("addnewcustomer_city").value;
            var subcontent=content.substring(content.length-1);
            var regex=/^[a-zA-Z]+$/;



                if (!subcontent.match(regex)) {
                    if (content.length>0) {
                        alert("Must input Text in City");
                        content = content.substring(0, content.length - 1);
                        document.getElementById("addnewcustomer_city").value = content;
                    }
                }

            
        }

        function contactperson() {
            var content=document.getElementById("addnewcustomer_contactperson").value;
            var subcontent=content.substring(content.length-1);
            var regex=/^[a-zA-Z]+$/;


            if(subcontent!="."){
                if (!subcontent.match(regex)) {
                    if (content.length>0) {
                        alert("Must input Text in Contact Person");
                        content = content.substring(0, content.length - 1);
                        document.getElementById("addnewcustomer_contactperson").value = content;
                    }
                }
            }

        }
    </script>

<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   

</body>
</html>