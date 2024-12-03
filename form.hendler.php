<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_form='22002171510001@ljku.edu.in';
$email_subject='New Form Submission';
$email_body="user name:$name.\n".
            "user email:$visitor_email.\n".
            "subject:$subject.\n".
            "user message:$message.\n".
   

$to='purvaasodariya003@gmail.com';
$headers="Form:$email_form \r\n";
$headers="Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location:contect.html");

?>
