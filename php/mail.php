<?php
if (isset($_POST['send'])) {
  $to = 'uttuffupux-9360@yopmail.com';
   $subject = 'Teacher submittion';
   $message = 'Name: ' . $_POST['name'] . "\r\n\r\n";
   $message .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
   $message .= 'Comments: ' . $_POST['comments'];
}
?>
