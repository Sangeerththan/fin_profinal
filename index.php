


<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>WestArt Ventrures Login form</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
<form action = "login.php" method = "post">
  <div class="login-wrap">
  
  <h2>Login</h2>
  
  <div class="form">

     <?php
      if(isset($_GET['error']))
        {
          $username_id="has-error";
          $arrived_msg=$_GET['error'];
        }
            
      else 
        {  
            $username_id="";
            $arrived_msg=""; }
    ?>


            <?php if($username_id!='') { 
                        if($arrived_msg==md5("wrongUsernamePassword"))
                        { ?>
                        <label style="width:100%; margin: 0 auto;text-align:center; position: relative;  float: none;"> <p>Username or Password is incorrect</p></label>
                           
                        
                        <?php
                        }
                        elseif($arrived_msg==md5("waitForActivation"))
                        {
                        ?>
                        <label class="control-label" for="inputError" style="width:100%; margin: 0 auto;text-align:center; position: relative;  float: none;"><p>Please.. Wait for the activation </p></label>

                         <?php
                        }
                        else
                        {
                        ?>
                        <label class="control-label" for="inputError" style="width:100%; margin: 0 auto;text-align:center; position: relative;  float: none;"><p>Could not Login to Account! </p></label>
                        <?php
                        }}
                        ?>
          
    <input type="text" placeholder="Username" name="userName" required />
    <input type="password" placeholder="Password" name="password" required/>
    <button> Sign in </button>
    </form>

    <a href="signUp.php"> <p> Don't have an account? Register </p></a>
    </div>
  </div>
</div>
  <script src='https://code.jquery.com/jquery-1.10.0.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
