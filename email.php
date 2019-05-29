<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="nadia.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<title>Приглашение</title>
</head>
<body>
	<h1>вернитесь обратно</h1>
	<?php
		$fio = $_POST['surname'];
		$email = $_POST['name'];
		mail("12345678nikolaev@gmail.com", "njkjhkljhk", "jkhkhk");

	?>
	<a href="index.html"><button>вернуться</button></a>
</body>
</html>