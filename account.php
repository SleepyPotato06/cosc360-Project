<?php
session_start();

$email= $_GET['email'];
$password = $_GET['password'];
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}else{
    $stmt = $con->prepare("SELECT * FROM `user_auth` WHERE  `Email` = ? && `Password` = ? || `Username` = ? && `Password` = ? ");
    $stmt->bind_param("ssss", $userOremail,$password,$userOremail,$password); 
    $stmt->execute();
    $resultSet = $stmt->get_result(); // get the mysqli result
    $result = $resultSet->fetch_assoc();

    if($result != null){
        if($result['userType'] == 'admin'){
            header('location:admin.php');

        }elseif($result['userType'] == 'user'){
            header('location:account.php');
        }
        
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Settings</title>
    <link rel="stylesheet" href="font/helvetica-now-display/stylesheet.css">
    <link rel="stylesheet" href="css/var.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/header-footer.css">
    <link rel="stylesheet" href="css/module.css">
    <link rel="stylesheet" href="css/userAuth.css">
    <link rel="stylesheet" href="css/account.css">
    <script src="js/signIn.js"></script>
    <script src="js/signUp.js"></script>
    <script src="js/account.js"></script>
</head>
<body>
<div class="main-container">
        <header class="header-container">
            <div class="logo">
                <img src="images/sitelogo.png" style="float: left;">
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
        <div class = "user-account-container">
            <div class="user-account-info">
                <h2>Account Settings</h2>
                <p>Lorem ipsum dolor sit amet consectetur. Erat facilisi varius est cursus. Neque sagittis mi non purus semper lacus mauris magnis.</p>
            </div>  
            <div class="user-account-box">
                <div class="profile-box">

                    <?php echo '<img  id= "profilePhoto" src="data:image/jpeg;base64,'.base64_encode( $_SESSION["pfp"] ).'"/>';?>
                    <div id="centered">Upload<br>Photo</div>
                    <h1>Username</p>
                    <h2><?php echo $_SESSION["user"] ;?></h2>
                </div>
                <form action= "" method="POST">
                    <div class="item-1">
                        <label>Email</label><br>     
                        <!-- <img class="editField" src = "svgs/editField.svg"/> -->
                        <input type = "text" name = "email" value = "<?php echo $_SESSION["email"] ;?>">
                    </div>
                    <div class="item-2">
                        <label>Password</label><br>
                        <input type = "password" name = "password" disabled="disabled">
                    </div>
                    <div class="item-3">
                        <input type="reset" value="Reset Form">
                    </div>
                    <div class="item-4">
                        <input type="submit" value="Confirm Changes">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>