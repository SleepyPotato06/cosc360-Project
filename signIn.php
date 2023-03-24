<?php

include 'DBconnection.php';

session_start();

if(isset($_GET['submit'])){

    $userOremail= $_POST['user-email'];
    $password = $_POST['password'];

   $select = " SELECT * FROM user_auth WHERE (Email = '$userOremail' && Password = '$password')  || (Username = '$userOremail' && Password = '$password')";

   $result = mysqli_query($con, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['userType'] == 'admin'){

         $_SESSION['userType'] = $row['username'];
         header('location:admin.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['username'];
         header('location:account.php');

      }
     
   }else{
        header('location:signUp.php');
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
                <img src="images/sitelogo.png" style="float: left;">
            </div>
            <nav>
                <a href="http://cosc360.ok.ubc.ca/suyash06/cosc360-Project/community.php">Community</a>
                <a href="http://cosc360.ok.ubc.ca/suyash06/cosc360-Project/help.php">Help</a>
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
            <div class="login-info">
                <h1>Home/</h1>
                <h2>Sign In</h2>
                <p>Lorem ipsum dolor sit amet consectetur. Erat facilisi varius est cursus. Neque sagittis mi non purus semper lacus mauris magnis.</p>
                <div class="info-footer">
                    <p><a href="http://cosc360.ok.ubc.ca/suyash06/cosc360-Project/signUp.php">Don’t Have An Account?</a></p>
                    <p>or</p>
                    <p><a href="http://cosc360.ok.ubc.ca/suyash06/cosc360-Project/community.php">Explore Dashboards?</a></p>
                </div>
            </div>  
            <div class="login-box">
                <form name = "LoginForm" id ="LoginForm" action= "" onsubmit="return validateLoginForm()" method="POST" required>
                    <div class="item-1">
                        <label>Username or Email</label><br>     
                        <input type = "text" name = "user-email" placeholder="What’s Your Registered Username or Email?">
                    </div>
                    <div class="item-2">
                        <label>Password</label><br>
                        <input type = "password" name = "password" placeholder="What’s Your Password?">
                    </div>
                    <div class="item-3">
                        <input type="reset" value="Reset Form">
                    </div>
                    <div class="item-4">
                        <input type="submit" value="Login">
                    </div>
                </form>
            </div>
        </div>
        <div class = "display-card-container">
            <div class = "display-card-grid">
                <a href = "http://cosc360.ok.ubc.ca/suyash06/cosc360-Project/dashboard.php"><img class="dashboardCard"></a>
                <a href = "http://cosc360.ok.ubc.ca/suyash06/cosc360-Project/dashboard.php"><img class="dashboardCard"></a>
                <a href = "http://cosc360.ok.ubc.ca/suyash06/cosc360-Project/dashboard.php"><img class="dashboardCard"></a>
                <!-- <a href = "http://localhost/project360/dashboard.php"><img class="dashboardCard"></a>
                <a href = "http://localhost/project360/dashboard.php"><img class="dashboardCard"></a> -->
            </div>            
        </div>
    </div>
</body>

</html>