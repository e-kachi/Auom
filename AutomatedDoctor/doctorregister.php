<?php
    require_once('includes/connect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Automated</title>
    <link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/doctorstyle.css">
</head>
<body>
    <div class="registerbackdrop"></div>
    <div class="form-group-wrapper">
        <form class="form-group" method="post" action = "">
            <div class="form-head">
                    <h2>Create An Account</h2> 
            </div>
            <br>
            <div class="form-grouprow">
                <input type="text" name="fname" id="" placeholder=" Enter Firstname">
                <input type="text" name="lname" id="" placeholder=" Enter Lastname">
            </div>
            
            <input type="email" name="email" id="" placeholder="Enter Email">
            <input type="text" name = "uname" id = "" placeholder = "Username">
            <input type="password" name="pwd" id="" placeholder=" password">
            <input type="password" name="cfm_pwd" id="" placeholder="Confirm password">
            <input type="submit" name = "submit" value="Register" >
            
            <div class = "formcheckbox">
            <input type="checkbox" name="" id="">  By clicking here you have accepted our <a href="">Terms and Conditions</a> and our <a href="">Privacy Policy</a><br>
                Already have an account?<a href="doctorlogin.php">Log in</a> 
            </div>
            
    
        </form>
    </div>

</body>
</html>