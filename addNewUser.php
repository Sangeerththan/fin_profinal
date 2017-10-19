<?php

include_once("config.php");

error_reporting(E_ALL);
ini_set('display_errors', 1);
    
    $auto_id = time(); // time
    $userId = $auto_id;
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $contactNo = $_POST['contactNo'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $position = $_POST['position'];
    if ($position=='0'){
        $status = '1';
    } else {
        $status = '0';
    }
    
    $erreturn_value="firstName=".$firstName."&email=".$email."&lastName".$lastName."&contactNo".$contactNo;
   

    

    if($password==$confirmPassword)
    {   
            $password = md5($password);
            
            $results=$mysqli->query("SELECT count(userId) as count from tblLogin  where firstName ='".$firstName."'");
            $obj = $results->fetch_object();
            if ($obj->count == 0){
                $results=$mysqli->query("INSERT INTO tblLogin VALUES('$userId','$firstName','$lastName','$email','$contactNo','$password','$position','$status')");
                if($results){
                    echo '<meta http-equiv="refresh" content="0; URL=signUp.php?success=saved">';        
                } else {
                    echo '<meta http-equiv="refresh" content="0; URL=signUp.php?databaseError;">';
                }
            

            } else {
                echo '<meta http-equiv="refresh" content="0; URL=signUp.php?err=duplicate&'.$erreturn_value.'"">';
            }

        

    }else
       {
                echo '<meta http-equiv="refresh" content="0; URL=signUp.php?err=passMissMatch&'.$erreturn_value.'"">';
            }
      



?>
<!-- ***** -->