<?php
$con = mysqli_connect("cosc360.ok.ubc.ca","83864363","83864363","db_83864363");

    echo "It worked !";
    $username= $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // $verifyPassword = $_POST['verifyPassword'];
    $selectedOption = $_POST['selectionMenu'];
    $image = file_get_contents($_FILES['img']['pfp']);

    if($con->connect_error){
        echo "Connection Failed !";
        die('Connection Failed :' .$con->connect_error);
    }else{
        $stmt = $con->prepare("INSERT INTO `user_auth` (`Username`, `Email`, `Password`,`comingFrom`,`profilePicture`) VALUES (?,?,?,?,?)");
        $stmt->bind_param("sssss",$username,$email,$password,$selectedOption,$image);
        $stmt->execute();
        header('location:signUp.php');
        $stmt->close();
        $con->close();
    }

?>