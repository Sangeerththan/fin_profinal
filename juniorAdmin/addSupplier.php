<?php
/**
 * Created by PhpStorm.
 * User: Haran
 * Date: 07/07/2017
 * Time: 01:05
 */

include_once('config.php');

if (isset($_POST['supplierName'])){
    $supplierName = $_POST['supplierName'];
    $addressLine1 = $_POST['addressLine1'];
    $addressLine2 = $_POST['addressLine2'];

    $city = $_POST['city'];
    $province = $_POST['province'];

    $contactPerson = $_POST['contactPerson'];
    $contactNo = $_POST['contactNo'];
    $time = time();
    $supplierId = $time;
    if (isset($_GET['editmode'])) {
        $customerId = $_GET['customerId'];
        $insert = "UPDATE `tblcustomerdetails` SET customerName = '$shopName',addressLine1 = '$addressLine1',addressLine2 = '$addressLine2',city = '$city',province = '$province',contactPerson = '$contactPerson',contactNo = '$contactNo' WHERE customerId = $customerId";
        $results = $mysqli->query($insert);
        if($results){
            print('<script> window.location="customer.php?sucess=ok"; </script> ');
        }
        else{
            if($mysqli->errno=="1062")
            {
                print('<script> window.location="customer.php?dup=fail"; </script> ');
            }
            else
            {
                print('<script> window.location="customer.php?error=fail"; </script> ');
                $error = $mysqli->errno;
            }
        }

    }else{
        $insert = "INSERT INTO `tblsupplierdetails` (`supplierId`, `supplierName`, `addresline1`, `addressline2`, `city`, `province`, `contactPerson`, `contactNo`) VALUES ('$supplierId', '$supplierName', '$addressLine1', '$addressLine2', '$city', '$province', '$contactPerson', '$contactNo')";
        $results = $mysqli->query($insert);
        if($results){
            print('<script> window.location="addnewsupplier.php?sucess=ok"; </script> ');
        }
        else{
            if($mysqli->errno=="1062")
            {
                print('<script> window.location="addnewsupplier.php?dup=fail"; </script> ');
            }
            else
            {
                $error = $mysqli->errno;
                print('<script> window.location="addnewsupplier.php?error=fail"; </script> ');
                $error = $mysqli->errno;
            }
        }
    }




}
