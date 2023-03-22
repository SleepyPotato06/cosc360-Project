<?php
$con = mysqli_connect("cosc360.ok.ubc.ca","root","","db_83864363");

$username= $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

if($con->connect_error){
    die('Connection Failed :' .$con->connect_error);
}else{
    $stmt = $con->prepare("INSERT INTO `user_auth` (`Username`, `Email`, `Password`) VALUES (?,?,?)");
    $stmt->bind_param("sss",$username,$email,$password);
    $stmt->execute();
    echo "Registered Successfully !";
    $stmt->close();
    $con->close();
}
?>