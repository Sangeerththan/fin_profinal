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
                <li class="breadcrumb-item"><a href="index.php">Home</a><i class="fa fa-angle-right"></i>Add New Supplier</li>
</ol>
		   <div class="grid-form1">
			   <h3>New Supplier Detail</h3>
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
					   <form class="form-horizontal" method = "post" action = "addSupplier.php">
						   <div class="form-group">

							   <label  ><strong>Shop Name :</strong></label>
							   <div >
								   <input type="text" onkeyup="suppliername()" name = "supplierName" class="form-control1" id="addnewsupplier_supplier" placeholder="Supplier Name" required>
							   </div>

						   </div>
						   <div class="form-group">


							   <label  ><strong>Street Address :</strong></label>
							   <div >
								   <input type="text" name = "addressLine1" class="form-control1" id="addnewsupplier_streetaddress_1" placeholder="Street Address" required>
							   </div>
                               <div >
                                   <input type="text" name = "addressLine2" class="form-control1" id="addnewsupplier_streetaddress_2" placeholder="Street Address" required>
                               </div>


						   </div>
						   <div class="form-group">


							   <label  ><strong>city :</strong></label>
							   <div >
								   <input type="text"  onkeyup="cityfunction()" name = "city" class="form-control1" id="addnewsupplier_city" placeholder="City" required>
							   </div>

						   </div>
                           <div class="form-group">


                               <label  ><strong>Province :</strong></label>
                               <div class="col-md-12 form-group2 group-mail">

                                   <select>
                                       <option value="">Western</option>
                                       <option value="">Out of Ceylon</option>
                                       <option value="">North Central</option>
                                       <option value="">North Western</option>
                                       <option value="">Subaragamuwa</option>
                                       <option value="">Eastern</option>
                                       <option value="">Northern</option>
                                       <option value="">Uwa</option>
                                       <option value="">Western</option>
                                       <option value="">Central</option>

                                   </select>
                               </div>

                           </div>
						   <div class="form-group">
							   <label  ><strong>Contact Person :</strong></label>
							   <div >
								   <input type="text" onkeyup="contactperson()" name = "contactPerson" class="form-control1" id="addnewsupplier_contactperson" placeholder="Contact Person" required>
							   </div>
						   </div>
						   <div class="form-group">
							   <label  ><strong>Contact Number :</strong></label>
							   <div >
								   <input type="text" onkeyup="phonenumber()" name = "contactNo" class="form-control1" id="addnewsupplier_contactnumber" placeholder="Contact Number" required>
							   </div>
						   </div>
                           <div class="row">
                               <div class="col-sm-8 col-sm-offset-2">
                                   <button class="btn-primary btn" id="addnewsupplier_accept"> Accept </button>


                               </div>
                           </div>




						   <script type="text/javascript">
                               var rowCount = 1;
                               function addMoreRows(frm) {
                                   rowCount ++;
                                   var recRow = '<p id="addnewsupplier_product_'+rowCount+'"><tr><td background="#f3faff;"><input name="" type="text" size="17%"  maxlength="60" style="margin:10px 20px 0 0;" /></td></tr> <a href="javascript:void(0);" onclick="removeRow('+rowCount+');">Delete</a></p>';
                                   jQuery('#addedRows').append(recRow);
                               }

                               function removeRow(removeNum) {
                                   jQuery('#addnewsupplier_product_'+removeNum).remove();
                               }
						   </script>

					   </form>
				   </div>
			   </div>
		   </div>



           <!--Validation code-->

           <script>
               //function for phone number
               function phonenumber() {
                   var content = document.getElementById("addnewsupplier_contactnumber").value;

                   var subcontent=content.substring(content.length-1);
                   if(content.length >10){
                       alert("Phone Number not More Than 10 digits");
                       content = content.substring(0, content.length - 1);
                       document.getElementById("addnewsupplier_contactnumber").value=content;
                   }
                   if(subcontent=="."){
                       alert("Must input phone number ,Not Decimal");
                       content = content.substring(0, content.length - 1);
                       document.getElementById("addnewsupplier_contactnumber").value=content;
                   }
                   if ((content%1) !=0)
                   {

                       alert("Must input phone number");
                       content = content.substring(0, content.length - 1);
                       document.getElementById("addnewsupplier_contactnumber").value=content;
                   };

               }

               function suppliername() {
                   var content=document.getElementById("addnewsupplier_supplier").value;
                   var subcontent=content.substring(content.length-1);
                   var regex=/^[a-zA-Z]+$/;



                   if(subcontent!="."){
                       if (!subcontent.match(regex)) {
                           if (content.length>0) {

                               alert("Must input Text in Customer Name");
                               content = content.substring(0, content.length - 1);
                               document.getElementById("addnewsupplier_supplier").value = content;
                           }
                       }
                   }

               }
               function cityfunction() {
                   var content=document.getElementById("addnewsupplier_city").value;
                   var subcontent=content.substring(content.length-1);
                   var regex=/^[a-zA-Z]+$/;



                   if (!subcontent.match(regex)) {
                       if (content.length>0) {
                           alert("Must input Text in City");
                           content = content.substring(0, content.length - 1);
                           document.getElementById("addnewsupplier_city").value = content;
                       }
                   }


               }

               function contactperson() {
                   var content=document.getElementById("addnewsupplier_contactperson").value;
                   var subcontent=content.substring(content.length-1);
                   var regex=/^[a-zA-Z]+$/;


                   if(subcontent!="."){
                       if (!subcontent.match(regex)) {
                           if (content.length>0) {
                               alert("Must input Text in Contact Person");
                               content = content.substring(0, content.length - 1);
                               document.getElementById("addnewsupplier_contactperson").value = content;
                           }
                       }
                   }

               }
           </script>





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