<?php
$link= mysqli_connect("localhost","root","","togyzkumalak");
$name=$_POST['name'];
$email=$_POST['email'];
$login=$_POST['login'];
$wallet=$_POST['wallet'];
$password=$_POST['password'];
$knopka=$_POST['button'];
if (isset($_POST['button'])) {
	$text_zaprosa="INSERT INTO `users` (`user_name`, `email`, `nickname`,`wallet_address`, `password`) VALUES ('$name', '$email', '$login','$wallet','$password')";
	mysqli_query($link,$text_zaprosa);
	echo " <script type='text/javascript'>window.location.href='login.html';</script>";
}
else {
	echo "<script type='text/javascript'>alert('error');</script>";

}
?>