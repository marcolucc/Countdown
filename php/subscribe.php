<?php
//Sending Email with the Email Address entered to the owner of the site 
//Please change "your@email.address" with the email address where you want to recive the notification of new subscriptions
//Example: I want to recive the notifications on my email address, I'll write : $to = "Jhon@smith.com";
$to = "your.email@address.com";

//Enter the address you want to recive the notification from, it works even if you leave it like that, or if you want to change it just enter the email 
//address below, it could even be a non-existant email address
//Example: I want the sender of these emails to be newsub@mysite.com, I'll write: $from = "newsub@mysite.com";
$from = "no-reply@yoursite.com";

$headers = "From: " . $from . "\r\n";

//Subject of the email sent to the owner of the site ($to = "your@email.address";)
$subject = "New subscription";
$body = "New user subscription: " . $_POST['email'];
 
if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) )
{ 
    if (mail($to, $subject, $body, $headers, "-f " . $from))
    {
       echo "<meta http-equiv='refresh' content=\"0; url=/index.html\">";
    }
    else
    {
      echo "<meta http-equiv='refresh' content=\"0; url=/index.html\">";  
    }
}
else
{
  echo "<meta http-equiv='refresh' content=\"0; url=/index.html\">";  
}
