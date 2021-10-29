<?php
	if(isset($_POST['submit'])){
	
    $name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
    $placeofbirth=$_POST['placeofbirth'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $comment=$_POST['comment'];


		$to='xyz.123@mail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Email :".$email. "\n". "Phone :".$phone."\n"."Place of Birth :".$placeofbirth. "\n". "Date of Birth :".$date. "\n"."Time of Birth :".$time. "\n"."Query :".$comment; 
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>