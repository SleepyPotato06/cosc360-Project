<?php
$con = mysqli_connect("cosc360.ok.ubc.ca","83864363","83864363","db_83864363");

    echo "It worked !";
    $username= $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // $verifyPassword = $_POST['verifyPassword'];
    $selectedOption = $_POST['selectionMenu'];
    // $image = $_POST['img'];

    if($con->connect_error){
        echo "Connection Failed !";
        die('Connection Failed :' .$con->connect_error);
    }else{
        $stmt = $con->prepare("INSERT INTO `user_auth` (`Username`, `Email`, `Password`,`comingFrom`) VALUES (?,?,?,?)");
        $stmt->bind_param("ssss",$username,$email,$password,$selectedOption);
        $stmt->execute();
        header('location:SignUp.php');
        $stmt->close();
        $con->close();
    }

?>