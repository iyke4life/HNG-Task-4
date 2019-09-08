<?php

$text = stripslashes($_POST['text']);
$email = stripslashes($_POST['email']);
$title = stripslashes($_POST['title']);
$message = stripslashes($_POST['message']);

$concat_msg = "\nName: " . $text . "| Email: " . $email . "| Title: " .$title . "| Message: " .$message;

$f = fopen('messages.txt', "a");
fwrite($f, $concat_msg);

fclose($f);

echo "<script type='text/javascript'>alert('Your message has been sent successfully. Thanks for contacting us!')</script>";
echo "<script type='text/javascript'>document.location='index.html'</script>";

?>