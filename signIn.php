<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
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
                <img src="images/radarLive.png">
            </div>
            <nav>
                <a href="#">Community</a>
                <a href="#">Help</a>
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
        <div class = "login-container">
            <div class="login-info">
                <h1>Home/</h1>
                <h2>Sign In</h2>
                <p>Lorem ipsum dolor sit amet consectetur. Erat facilisi varius est cursus. Neque sagittis mi non purus semper lacus mauris magnis.</p>
                <div class="info-footer">
                    <p><a href="http://localhost/project360/signUp.php">Don’t Have An Account?</a></p>
                    <p>or</p>
                    <p><a href="http://localhost/project360/community.php">Explore Dashboards?</a></p>
                </div>
            </div>  
            <div class="login-box">
                <form name = "LoginForm" action= "DBconnection.php" onsubmit="return validateLoginForm()" method="GET">
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
        <div class = "login-display-card-container">
            <div class="display-card">
                <a href = "http://localhost/project360/dashboard.php"><img class="dashboardCard"></a>
                <a href = "http://localhost/project360/dashboard.php"><img class="dashboardCard"></a>
                <a href = "http://localhost/project360/dashboard.php"><img class="dashboardCard"></a>
            </div>
        </div>
    </div>   
</body>

</html>