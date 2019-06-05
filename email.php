<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="nadia.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<title>Приглашение</title>
	<style>
		body{
			display: flex;
			justify-content: center;
			align-items: center;
			height:90vh;
		}
		h1{
			font-size: 50px ;
			color:#f48fb1;
		}
		.box{
			text-align: center;
		}
		button{
	background: none;
	border:solid 2px #ec407a;
	color: #ec407a;
	padding:20px 30px;
	font-size: 30px;
	border-radius: 50px;
	font-family: Gabriela;
	transition: 0.3s;
	animation: puls 0.8s normal infinite;
	outline: none;
	cursor: pointer;
}
button:hover{
    color:white;
    background:#ec407a
}
@keyframes puls{
	0%{
       box-shadow: 0 0 1px 0 #eeeeee
	}
	100%{
         box-shadow: 0 0 1px 30px #ffffff
	}
}
	</style>
</head>
<body>
   <div class="box">
	<h1 align="center">Заяка отправлена!</h1>
	<a href="index.html"><button>Вернуться</button></a>
   </div>
	<?php
		$surname = $_POST['surname'];
		$name = $_POST['name'];
		$radio = $_POST['quantity'];
		mail("12345678nikolaev@gmail.com", "ЗАЯВКА НА ДР", $surname." ".$name." ".$radio);
	?>
</body>
</html>