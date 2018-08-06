<?php
	$name=$_POST['txt_name'];
	$Contact=$_POST['txt_cnt'];
	$v_email=$_POST['email'];

	$email_from="kantivekariya@gmail.com";
	$email_subject="New Form Submission";
	$email_body="User Name : $name.\n".
					"User Email: $v_email.\n".
					"User Contact: $Contact.\n";

	$to="kantivekariya242@gmail.com";

	$header="From : $email_from \r\n";

	$header.="Reply-to: $v_email \r\n";

	mail($to, $email_subject,$email_body,$header);
	header("Location:index.php");
?>