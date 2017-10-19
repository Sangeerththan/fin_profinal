<?php 
    include_once("config.php");


    session_start();
    $_SESSION['user_login_status'] = "alreadylogedin";
    $userName = $_POST['userName'];
    $password=$_POST['password'];
    $password = md5($password);


    // To protect MySQL injection (more detail about MySQL injection)
//$indexNo = stripslashes($indexNo);
//$password = stripslashes($password);

    $results = $mysqli->query("SELECT * from tblLogin where firstName = '".$userName."' and password = '".$password."'");
    
    $num_rows = mysqli_num_rows($results);
    //redirect("../index.php?error=".$indexNo.$password.$num_rows);
    if ($num_rows==1)
    {
        $obj = $results->fetch_object();
        $position = $obj->position; 
        $status = $obj->status;
        if ($status =='1') {
           
            $_SESSION['user_login_status'] = "alreadylogedin";
        
            $_SESSION['sessionStartTime'] = time();
            
            $_SESSION['userId'] = $obj->userId;
            $_SESSION['userName'] = $userName;
            $_SESSION['position'] = $position;
            if ($position == '0'){
                print('<script> window.location="admin/index.php?type=myacc"; </script> ');    
            } elseif($position == '1'){
                print('<script> window.location="juniorAdmin/index.php?type=myacc"; </script> ');
            } elseif($position=='2'){
                print('<script> window.location="salesPerson/index.php?type=myacc"; </script> '); 
            } elseif($position=='3'){
                print('<script> window.location="deliveryPerson/index.php?type=myacc"; </script> ');
            }
            
           
        }
        elseif($status == '0')
        {
            mysqli_close($mysqli);
            
            $error_msg=md5("waitForActivation");
            
            redirect("index.php?error=".$error_msg);
        }
    }
    else
    {
        //session_start();
        if(isset($_SESSION['user_login_status'])) {
            unset($_SESSION['user_login_status']);
            unset($_SESSION['user_login_id']);
            unset($_SESSION['indexNo']);
        }
        
        mysqli_close($mysqli);
        $error_msg=md5("wrongUsernamePassword");
       
        redirect("index.php?error=".$error_msg);
    }

function redirect($url){
    if (headers_sent()){
        die('<script type="text/javascript">window.location.href=' . $url . '</script>');
    }else{
        header('Location: ' . $url);
        die();
    }
}
?>