<?php

include 'DBconnection.php';

if(isset($_POST['submit'])){

    $username= $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $verifyPassword = $_POST['verifyPassword'];
    $selectedOption = $_POST['selectionMenu'];
    $image = $_POST['img'];
    
   $select = " SELECT * FROM user_auth WHERE (Email = '$email' && Password = '$pass') || (Username = '$username' && Password = '$pass') ";

   $result = mysqli_query($con, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'User already exists!';

   }else{

      if($password != $verifyPassword){
         $error[] = 'Password not matched!';
      }else{
         $insert = "INSERT INTO user_auth(Username, Email, Password,profilePicture, userType) VALUES('$name','$email','$pass',$image,'user')";
         mysqli_query($conn, $insert);
         header('location:signIn.php');
      }
   }

};


?>

<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project 360</title>
    <link rel="stylesheet" href="font/helvetica-now-display/stylesheet.css">
    <link rel="stylesheet" href="css/var.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/header-footer.css">
    <link rel="stylesheet" href="css/module.css">
    <link rel="stylesheet" href="css/userAuth.css">
    <script src="js/signIn.js"></script>
    <script src="js/signUp.js"></script>
</head>

<body>
    <div class="main-container">
        <header class="header-container">
            <div class="logo">
                <img src="images/sitelogo.png">
            </div>
            <nav>
                <a href="http://cosc360.ok.ubc.ca/cosc360-Project/community.php">Community</a>
                <a href="http://cosc360.ok.ubc.ca/cosc360-Project/help.php">Help</a>
            </nav>
            <div class="settings container">
                <div class="horizontal-container fit-width" style="margin-right: 2em;">
                    <p>English-US</p>
                    <img src="images/canada-flag.png">
                    <img src="svgs/arrow-down.svg">
                </div>
                <div class="horizontal-container fit-width">
                    <p>Sign In / Sign Up</p>

                </div>
            </div>
        </header>
        <div class = "auth-container">
            <div class="register-info">
                <h1>Home/</h1>
                <h2>Sign Up</h2>
                <p>Lorem ipsum dolor sit amet consectetur. Erat facilisi varius est cursus. Neque sagittis mi non purus semper lacus mauris magnis.</p>
                <div class="info-footer">
                    <p><a href="http://cosc360.ok.ubc.ca/cosc360-Project/signIn.php">Already Have An Account?</a></p>
                    <p>or</p>
                    <p><a href="http://cosc360.ok.ubc.ca/cosc360-Project/community.php">Explore Dashboards?</a></p>
                </div>
            </div>  
            <div class="register-box">
                <form name = "RegisterForm" action= "DBconnection.php" onsubmit="return validateRegisterForm()" method="POST" required>
                            <div class="item-1">
                                <label>Username <span style="color: red;">*</span></label><br>                   
                                <input type = "text" name = "username" placeholder="What Should We Call You?">
                            </div>
                            <div class="item-2">
                                <label>Email <span style="color: red;">*</span></label><br>
                                <input type = "email" name = "email" placeholder="What's Your Email?">
                            </div>
                            <div class="item-3">
                                <label>Password <span style="color: red;">*</span></label><br>                                   
                                <input type = "password" name = "password" placeholder="What’s Your Password?">
                            </div>
                            <div class="item-4">
                                <label>Verify Password <span style="color: red;">*</span></label><br>
                                <input type = "password" name = "verifyPassword" placeholder="Confirm Password?">
                            </div>
                            <div class="item-5">
                                <label>Coming From</label><br>
                                <select name="selectionMenu">
                                    <option value="Google"  selected="selected">Google</option>
                                    <option value="Friend">Friend</option>
                                    <option value="Social Media">Social Media</option>
                                </select>
                            </div>
                            <div class="item-6">
                                <label>Profile Photo <span style="color: red;">*</span></label><br>
                                <!-- <button id="upload-file-btn" onclick= "document.getElementById('getFile').click()">Upload File <img src="svgs/arrow-right-short.svg"></button>
                                <input type='file' id="getFile" style="display:none"> -->
                                <input type="file" id="img" name="img" accept="image/*">
                            </div>
                            <div class="item-7">
                                <input type="reset" value="Reset Form">
                            </div>
                            <div class = "item-8">
                                <input type="submit" value="Get Started !">
                            </div>                    
                </form>
            </div>
        </div>
        <div class = "register-display-card-container">  
            <a href = "http://cosc360.ok.ubc.ca/cosc360-Project/dashboard.php"><img class="dashboardCard"></a>
            <a href = "http://cosc360.ok.ubc.ca/cosc360-Project/dashboard.php"><img class="dashboardCard"></a>
            <a href = "http://cosc360.ok.ubc.ca/cosc360-Project/dashboard.php"><img class="dashboardCard"></a>
        </div>
        </div>
    </div>   
</body>

</html>