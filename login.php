<?php
$link=mysqli_connect("localhost","root","","togyzkumalak");
$logina=$_POST['l'];
$passworda=$_POST['p'];
$knopka=$_POST['button'];

if (isset($_POST['button'])) {
	$text_zaprosa="SELECT * FROM `users` WHERE `email`='$login' and `password`='$password'";
	$row=mysqli_query($link,$text_zaprosa);
	while ($arr=mysqli_fetch_row($row)) {
		$l=$arr[2];
		$p=$arr[5];
	}     	

	if ($l==$login && $p==$password) {
		setcookie('login',$l);
		setcookie('password',$p);


    	echo "<script type='text/javascript'>window.location.href='main.html';</script>";
	} else {
		echo "<script type='text/javascript'>alert('не правильный пароль!');
		</script>";
	}
    }
 
    else {
    	echo "<script type='text/javascript'>alert('error');
        window.location.href='error.html';
    	</script>";

    } 
    
 ?>