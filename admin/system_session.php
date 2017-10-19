<?php
ob_start();

if(session_id() == '') {
    session_start();
}

if(isset($_SESSION['user_login_status']))
{
    if($_SESSION['user_login_status']!='alreadylogedin')
    {
        header("location:http://localhost/fin_pro/index.php?msg=Please Login First");
    }
    else
    {


//$TimeOutMinutes =10; //  TimeOut period in minutes
//$TimeOutSeconds = $TimeOutMinutes * 60; // TimeOut in Seconds
//if (isset($_SESSION['SessionStartTime'])) {
//    $InactiveTime = time() - $_SESSION['SessionStartTime'];
//	 $a=(int)$TimeOutSeconds ;
// 	$b=(int)$InactiveTime;
//	    if($a <= $b) {
//        if(isset($_SESSION['user_login_status'])) {
//			unset($_SESSION['user_login_status']);
//			unset($_SESSION['user_login_id']);
//			unset($_SESSION['user_previllages']);
//			unset($_SESSION['user_surname']);
//			unset($_SESSION['user_login_districtname']);
//			unset($_SESSION['user_login_districtid']);
//		}
//		//session_destroy();
//      // header("Location:index.php?msg=Last Login was Timeout ");
//	   		print('<script> window.location="index.php?msg=Last Login was Timeout"; </script> ');
//    }
//	else{
//		$_SESSION['SessionStartTime'] = time();
//		}
//
//}

    }
}
else
{
    //header("location:index.php?msg=Please Login First");
    print('<script> window.location="http://localhost/fin_pro/index.php?msg=Please Login First"; </script> ');
}

function redirect($url){
    if (headers_sent()){
        die('<script type="text/javascript">window.location.href=' . $url . '</script>');
    }else{
        header('Location: ' . $url);
        die();
    }
}

ob_end_flush();
?>