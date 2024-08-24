<?php

 if(isset($_POST['submit']))

 {

    $name = $_POST['name'];

	$email = $_POST['email'];

	$query = $_POST['message'];

	$email_from = $name.'<'.$email.'>';

	$ip_remote = $_SERVER["REMOTE_ADDR"];



 $to="referencemega@gmail.com";

 $subject="Demande D'information";

 $headers  = 'MIME-Version: 1.0' . "\r\n";

 $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

 $headers .= "From: ".$email_from."\r\n";

 $message="	  

 	   

 		 IP: 

 		 $ip_remote

		<br>

 		 Name:

		 $name 	   

		<br>

 		 Email:

		 $email 	   

		<br><br>	

 		 Message:

		 $query 	   

      

   ";

	if(mail($to,$subject,$message,$headers))

		header("Location:../?msg=successful");

	else

		header("Location:../?msg=error");



 }

?>

