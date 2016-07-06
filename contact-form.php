<?php

$to = "rkschoenrock@gmail.com";
$subject = "New Contact Form Submission";
$message = Trim(stripslashes($_POST['Message']));
$from = Trim(stripslashes($_POST['Email']));
$name = Trim(stripslashes($_POST['Name']));

$validationOK = true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

$body = "";
$body .= "Name: ";
$body .= $name;
$body .= "\n";
$body .= "Email: ";
$body .= $from;
$body .= "\n";
$body .= "Message: ";
$body .= $message;
$body .= "\n";

$success = mail($to, $subject, $body, "From: <$from>");

if($success) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=thank-you.php\">";
}
  else{
    print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  }
 ?>
