<?php
$con = mysqli_connect("cosc360.ok.ubc.ca","83864363","83864363","db_83864363");

$con = mysqli_connect('cosc360.ok.ubc.ca', 'root', '','db_contact');

$username= $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO `user_auth` (`Username`, `Email`, `Password`) VALUES ('$username', '$email', '$assword');"

$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}
?>