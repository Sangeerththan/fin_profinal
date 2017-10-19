<?php
    include_once('system_session.php');
    include_once('config.php');
    $position = $_SESSION['position'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div class="sidebar-menu">
    <header class="logo1">
        <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a>
    </header>
    <div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
    <div class="menu">
        <ul id="menu" >
            <li><a href="index.php"><i class="fa fa-home"></i> <span>HOME</span><div class="clearfix"></div></a></li>
            <!--customer details-->
            <li ><a href="#"><i class="fa fa-group" aria-hidden="true"></i><span> CUSTOMER </span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                <ul  >
                    <li  ><a href="addnewcustomer.php">ADD NEW</a></li>
                    <li  ><a href="customer.php">DETAILS</a></li>

                </ul>
            </li>
            <!--product details-->
            <?php
                    if ($position==1){
                        ?>

            <li ><a href="#"><i class="fa fa-archive" aria-hidden="true"></i><span> PRODUCT </span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                <ul  >

                    <li  ><a href="product.php">DETAILS</a></li>

                </ul>
            </li>
            <?php } ?>
            <!--Supplier Details-->
            <li ><a href="#"><i class="fa fa-group" aria-hidden="true"></i><span> SUPPLIER </span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                <ul  >
                    <li  ><a href="addnewsupplier.php">ADD NEW</a></li>
                    <li  ><a href="supplier.php">DETAILS</a></li>

                </ul>
            </li>

            <!--Sales Rep  details-->
            <li ><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span>EMPLOYEE </span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                <ul  >
                    <!--<li  ><a href="addnewemployee.php">ADD NEW</a></li> -->
                    <li  ><a href="employee.php">SALES REP</a></li>
                    <li  ><a href="deliverypersondetails.php">DELIVERY PERSON </a></li>
                    <li  ><a href="approveemployee.php">FOR APPROVAL </a></li>

                </ul>
            </li>
            <li ><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span> ORDER </span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                <ul  >
                    <li  ><a href="orderDetail.php"> VIEW ORDER </a> </li>
                    <li  ><a href="approveOrderDetails.php">  APPROVE ORDER </a></li>

                </ul>
            </li>
            <li ><a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i><span> INVENTARY </span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                <ul  >
                    <li  ><a href="addInventary.php"> ADD </a> </li>
                    <li  ><a href="incentarydetails.php">  DETAILS </a></li>


                </ul>
            </li>
            <li><a href="weeklyreport.php"><i class="fa fa-home"></i> <span>WEEKLY REPORT old</span><div class="clearfix"></div></a></li>
            <li><a href="weekrep.php"><i class="fa fa-home"></i> <span>WEEKLY REPORT new</span><div class="clearfix"></div></a></li>

        </ul>
    </div>
</div>
</body>
</html>