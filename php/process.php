<?php
$email = $_POST['email'];
$name = $_POST['name'];
$message = $_POST['message'];

if (empty($email) || empty($name) || empty($message)) {
  print 'You must fill all the fields.';
}

if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
}

include('../index.html');
?>
