<?php
$con = mysqli_connect("cosc360.ok.ubc.ca","83864363","83864363","db_83864363");

if(isset($_POST['submit'])){

    $username= $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $verifyPassword = $_POST['verifyPassword'];
    $selectedOption = $_POST['selectionMenu'];
    $image = $_POST['img'];

    if($con->connect_error){
        die('Connection Failed :' .$con->connect_error);
    }else{
        $stmt = $con->prepare("INSERT INTO `user_auth` (`Username`, `Email`, `Password`,`comingFrom`,`profilePicture`, `userType`) VALUES (?,?,?,?,?,?)");
        $stmt->bind_param("ssssbs",$username,$email,$password,$selectedOption,$image,'user');
        $stmt->execute();
        header('location:signIn.php');
        $stmt->close();
        $con->close();
    }
};
?>