<!DOCTYPE html>
<html>
<head>
	<title>Contact Form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<form action="send_mail.php" method="POST">
		<div class="con">
				<h2>FOR MORE DETAILS</h2>
					<label>Name: </label>
					<input type="text" name="txt_name" class="text-line "><br><br>
					<label>Contact Number: </label>
					<input type="text" name="txt_cnt" class="text-line"><br><br>
					<label>Email: </label>
					<input type="text" name="email" class="text-line"><br><br>
					<input type="submit" name="submit">
		</div>
	</form>
</body>
</html>