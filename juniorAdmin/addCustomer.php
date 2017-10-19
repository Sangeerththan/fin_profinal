<?php
/**
 * Created by PhpStorm.
 * User: Haran
 * Date: 06/07/2017
 * Time: 00:29
 */
include_once('config.php');
if (isset($_POST['shopName'])){
    $shopName = $_POST['shopName'];
    $addressLine1 = $_POST['streetAddressLine1'];
    $addressLine2 = $_POST['streetAddressLine2'];

    $city = $_POST['city'];
    $province = $_POST['province'];
    $address = $addressLine1.","."\r".$addressLine2.","."\r".$city.","."\r".$province;
    $contactPerson = $_POST['contactPerson'];
    $contactNo = $_POST['contactNo'];
    $time = time();
    $customerId = $time;
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
        $insert = "INSERT INTO `tblcustomerdetails` (`customerId`, `customerName`, `addressLine1`,`addressLine2`,`city`,`province`, `contactPerson`, `contactNo`) VALUES ('$customerId', '$shopName', '$addressLine1', '$addressLine2', '$city', '$province', '$contactPerson', '$contactNo')";
        $results = $mysqli->query($insert);
        if($results){
            print('<script> window.location="addnewcustomer.php?sucess=ok"; </script> ');
        }
        else{
            if($mysqli->errno=="1062")
            {
                print('<script> window.location="addnewcustomer.php?dup=fail"; </script> ');
            }
            else
            {
                print('<script> window.location="addnewcustomer.php?error=fail"; </script> ');
                $error = $mysqli->errno;
            }
        }
    }




}
