<?php
	if(!empty($_POST['email'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$message=$_POST['message'];

        $to = "faraz.n.ansari@gmail.com, vivekrajraja@gmail.com";
        $subject = "New enquiry received from contact form.";

        $message = "
        <html>
        <head>
        <title>YTMojo</title>
        </head>
        <body>
        <p>New enquiry received from contact form.<br><br><b>User Details:</b><br><br><b>Name:</b> $name<br><b>Email Id:</b> $email<br><b>Message:</b> $message</p>
        </body>
        </html>
        ";
		$host=$_server['host'];

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: <YTMojo@shivajidigital.com>';

        mail($to,$subject,$message,$headers);
		if(mail==true){
			echo"success";
		}else{
			echo"error";
		}
	}
?>