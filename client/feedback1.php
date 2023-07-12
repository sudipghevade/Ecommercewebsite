<?php
// $name=$_POST['name'];

// $email=$_POST['email'];
// $feedback=$_POST['feedback'];





$to="sudipghevade15@gmail.com";
$subject="Email from htsacademy";
$body="This is email ";
$from="neetaghevade918@gmail.com";
$headers="From: $from";
mail($to,$subject,$body,$headers);
echo "sent message";
?>