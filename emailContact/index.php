<?php
 if(isset($_POST['submit']))
 {
    $name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$query = $_POST['message'];
	$email_from = $name.'<'.$email.'>';

 $to="zalandkhan1@gmail.com";
 $subject="Enquiry!";
 $headers  = 'MIME-Version: 1.0' . "\r\n";
 $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 $headers .= "From: ".$email_from."\r\n";
 $message="	  
 	   	 Contact Form <br> <br>
 		 Name:
		 $name 	   
         <br>
 		 Email:
		 $email 	   
         <br>
         Phone: 
         $phone
         <br>
 		 Message:
		 $query 	   
      
   ";
	if(mail($to,$subject,$message,$headers))
		header("Location:../contactus1.html");
		//header("Location:../contact.php?msg=Successful Submission! Thank you for contacting us.");
	else
		header("Location:../contactus2.html");
		//contact:-your-email@your-domain.com
 }
?>
