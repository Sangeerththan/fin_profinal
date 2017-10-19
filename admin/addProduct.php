<?php
/**
 * Created by PhpStorm.
 * User: Haran
 * Date: 06/07/2017
 * Time: 05:37
 */

include_once('config.php');
if (isset($_POST['trPrice']) && isset($_POST['mrPrice'])){


    $trPrice = $_POST['trPrice'];
    $mrPrice = $_POST['mrPrice'];

    $wsPrice = $_POST['wsPrice'];
    $threshold = $_POST['threshold'];

    if (!isset($_GET['editmode'])) {
        $sku = $_POST['sku'];
        $productName = $_POST['productName'];
        $supplier = $_POST['supplier'];



        $time = time();
        $productId = $time;
        $insert = "INSERT INTO `tblproductdetails` (`productId`,`sku`,`name`, `supplier`,`trPrice`,`mrPrice`,`wsPrice`, `threshold`) VALUES ('$productId', '$sku', '$productName', '$supplier', '$trPrice', '$mrPrice', '$wsPrice','$threshold')";
        $results = $mysqli->query($insert);
        if ($results) {
            print('<script> window.location="addnewproduct.php?sucess=ok"; </script> ');
        } else {
            if ($mysqli->errno == "1062") {
                print('<script> window.location="addnewproduct.php?dup=fail"; </script> ');
            } else {
                print('<script> window.location="addnewproduct.php?error=fail"; </script> ');
                $error = $mysqli->errno;
            }
        }

    }else{
        $sku = $_GET['sku'];
        $insert = "UPDATE `tblproductdetails` SET trPrice = '$trPrice',mrPrice ='$mrPrice',wsPrice = '$wsPrice',threshold = '$threshold' WHERE sku = '$sku'";
        $results = $mysqli->query($insert);
        if ($results) {
            print('<script> window.location="product.php?sucess=ok"; </script> ');
        } else {
            if ($mysqli->errno == "1062") {
                print('<script> window.location="product.php?dup=fail"; </script> ');
            } else {
                print('<script> window.location="product.php?error=fail"; </script> ');
                $error = $mysqli->errno;
            }
        }
    }




}