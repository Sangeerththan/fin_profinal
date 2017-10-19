<?php
  include_once("config.php");
  $adminCount = $mysqli->query("SELECT * FROM tblLogin where position = '0'");
  $adminCount = mysqli_num_rows($adminCount);
  $juniorAdminCount = $mysqli->query("SELECT * FROM tblLogin where position = '1'");
  $juniorAdminCount = mysqli_num_rows($juniorAdminCount);
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>WestArt Ventures Register form</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <div class="login-wrap">
  <h2>SignUp</h2>
  <form  method = "post" action = "addNewUser.php">
   <?php if(isset($_GET['err']))
          {
              if($_GET['err']=='passMissMatch')
                {
                  echo "<p class='text-danger' style='text-align: center;'> Password does not match.</p>";
                }
              else if($_GET['err']=='indexNoLen')
                {
                  echo "<p class='text-danger' style='text-align: center;'> Something wrong with your index number, Please Check!</p>";
                }
              else if($_GET['err']=='indexNotNo')
                {
                  echo "<p class='text-danger' style='text-align: center;'> Something wrong with your index number, Please Check!</p>";
                }
              else if($_GET['err']=='duplicate')
                {
                  echo "<p class='text-danger' style='text-align: center;'> You are already registered, Please Check!</p>";
                }
          }  

          else if(isset($_GET['success']))
          {
              if($_GET['success']=='saved')
              {
                  echo "<p class='text-success' style='text-align: center;'> Thank you for the Registration. <a href='index.php'> Go to Login</a></p>";
              }
          }

      if(!isset($_GET['success']))   {    ?>
    <div class="form" >
    <input type="text" onkeyup="firstname()" id="signup_firstname"placeholder="First name" name="firstName" required/>
    <input type="text" onkeyup="lastname()" id="signup_lastname"placeholder="Last name" name="lastName" required/>
    <input type="email" placeholder="E-Mail" name="email" required/>
    <input type="text" onkeyup="phonenumber()" id="signup_contactnumber"placeholder="Contact No" name="contactNo" required/>
    <input type="password" id="signup_password"placeholder="Password" name="password" required/>
    <input type="password" onkeyup="passwordvalidation()" id="signup_confirmpassword"placeholder="Retype Password" name="confirmPassword" required/>
        <span id='message'></span>
    <select id="position" name="position" placeholder = "Select your position" required>
                            <?php 
                               if ($adminCount == '0'){  ?>
                            <option value="0" <?php if(isset($_GET['position'])) { if($_GET['position']==0) {echo "Selected";}}?>> Admin </option>
                            <?php } 
                               if ($juniorAdminCount == '0'){ ?>

                            <option value="1" <?php if(isset($_GET['position'])) { if($_GET['position']==1) {echo "Selected";}}?>> Junior admin </option>
                            <?php } ?>
                            <option value="2" <?php if(isset($_GET['position'])) { if($_GET['position']==2) {echo "Selected";}}?>> Sales person </option>
                            <option value="3" <?php if(isset($_GET['position'])) { if($_GET['position']==3) {echo "Selected";}}?>> Delivery person </option>
    </select>
    
    
    <button > Sign Up </button>

        <!--Validation code-->

        <script>
            //function for phone number
            function phonenumber() {
                var content = document.getElementById("signup_contactnumber").value;

                var subcontent=content.substring(content.length-1);
                if(content.length >10){
                    alert("Phone Number not More Than 10 digits");
                    content = content.substring(0, content.length - 1);
                    document.getElementById("signup_contactnumber").value=content;
                }
                if(subcontent=="."){
                    alert("Must input phone number ,Not Decimal");
                    content = content.substring(0, content.length - 1);
                    document.getElementById("signup_contactnumber").value=content;
                }
                if ((content%1) !=0)
                {

                    alert("Must input phone number");
                    content = content.substring(0, content.length - 1);
                    document.getElementById("signup_contactnumber").value=content;
                };

            }

            function firstname() {
                var content = document.getElementById("signup_firstname").value;
                var subcontent = content.substring(content.length - 1);
                var regex = /^[a-zA-Z]+$/;


                if (subcontent != ".") {
                    if (!subcontent.match(regex)) {
                        if (content.length > 0) {

                            alert("Must input Text in Customer Name");
                            content = content.substring(0, content.length - 1);
                            document.getElementById("signup_firstname").value = content;
                        }
                    }
                }
            }
                function lastname() {
                    var content=document.getElementById("signup_lastname").value;
                    var subcontent=content.substring(content.length-1);
                    var regex=/^[a-zA-Z]+$/;



                    if(subcontent!="."){
                        if (!subcontent.match(regex)) {
                            if (content.length>0) {

                                alert("Must input Text in Customer Name");
                                content = content.substring(0, content.length - 1);
                                document.getElementById("signup_lastname").value = content;
                            }
                        }
                    }

                }

                    function passwordvalidation() {
                        var pword=document.getElementById("signup_password").value;
                        var cpword=document.getElementById("signup_confirmpassword").value;
                        var ok=true;
                        if(cpword.length==0){
                            document.getElementById('message').innerHTML = '';

                        }
                        if(pword.length<cpword.length){
                            document.getElementById('message').style.color = 'red';
                            document.getElementById('message').innerHTML = '!!!';
                        }
                        for(count=0;count<cpword.length;count++){
                            if (pword[count] != cpword[count]) {
                                document.getElementById('message').style.color = 'red';
                                document.getElementById('message').innerHTML = '!!!';

                            }
                            else{
                                document.getElementById('message').innerHTML = '';
                            }
                            if(cpword.length==0){
                                document.getElementById('message').innerHTML = '';

                            }
                        }
                        if(pword==cpword){
                            document.getElementById('message').style.size = '4';
                            document.getElementById('message').style.color = 'green';
                            document.getElementById('message').innerHTML = 'ok';
                        }


                    }



        </script>
     <?php } ?>
    <a href="index.php"> <p> Already Registered? Login </p></a>
  </div>
  </form>
</div>
  <script src='https://code.jquery.com/jquery-1.10.0.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
