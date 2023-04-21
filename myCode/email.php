<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$addressee = "jesusnieves303@gmail.com";
	$body = '
		<html>
			<head>
				<title>Sent E-mail</title>
			</head>
			<body>
				<h1>Contact Request: '.$name . '</h1></br>
				<h3><b>Name:</b> '.$name . '</h3>
				<h3><b>E-mail:</b> '.$email . '</h3>
				<h3><b>Subject:</b> '.$subject . '</h3>
				<h3><b>Message:</b> '.$message . '</h3>
			</body>
		</html>
	';
	
	$headers = "MIME-Version: 1.0\r\n";
	$headers = "Content-type: text/html; charset=UTF8\r\n";
	$headers .=  "FROM: Contact Request <$email>\r\n";
	mail($addressee, $subject, $body, $headers);
?>
    <!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Jesús A. Nieves</title>
			
		</head>
		<body>
			<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
			<script> 
				Swal.fire({
				    icon: 'success',
				    title: '¡Your Message was Sent!',
				    showConfirmButton: false,
			        timer: 1500,
			    });
			</script>
		</body>
	</html>
<?php
	echo "<script> setTimeout(\"location.href='index.html'\",1500)</script>";
?>