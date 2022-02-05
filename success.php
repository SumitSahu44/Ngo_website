
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Success</title>
	<style type="text/css">
	.succ{

		width: 500px;
		margin: 50px auto;
		border: 2px solid green;
		padding: 8px;
	}
		img{
			width: 100px;
			margin: 0 auto;
			margin: 10px 35% ;
		}
		.thank{
			font-size: 100px;
			margin-top: 0;
		}
		.submit{
			margin-top: 0;
			margin-left: 25%;
			width: auto;
			height: 33px;
			border: 2px solid black;
			background: lightgreen;
			border-radius: 5px;
			font-size: 18px;
}

	</style>
</head>
<body>
<div class="succ">
	<img src="success_img.png">
	<h1 class="thank">Thank you! your information has succesfully submit. Our team Contact you</h1>
	<form action="index.php" method="POST">
		<input type="submit" name="submit" class="submit" value="Click here for home page ">
	</form>
</div>



</body>
</html>