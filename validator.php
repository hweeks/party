<?php
session_start();
$field_user = $_POST['user'];
$field_email = $_POST['email'];
$field_password = $_POST['password'];

$mail_to = 'h.weeks@gmail.com';
$subject = 'You have got yourself another partygoer! Break out the confetti for '.$field_user;

$body_message = 'User: '.$field_user."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Password (Which should totally never be sent in plaintext): '.$field_password;

$mail_status = mail($mail_to, $subject, $body_message);

$errors = array();

if(!filter_var($field_email, FILTER_VALIDATE_EMAIL)){ 		
$errors['email'][] = 'Email invalid, please check and resubmit.';

}

if (strlen($field_password) < 8) {
if (strlen($errors['password'][0] < 10)){	
$errors['password'][0] = 'Password must ';
}	
$errors['password'][0] = $errors['password'][0].' be at least 8 characters ';

}

if (!preg_match("#[0-9]+#", $field_password)) {
if (strlen($errors['password'][0] > 10)){	
$errors['password'][0] = $errors['password'][0].' and ';
}	
if (strlen($errors['password'][0] < 10)){	
$errors['password'][0] = 'Password must ';
}	
$errors['password'][0] = $errors['password'][0].' have numbers ';
}

if (!preg_match("#[a-zA-Z]+#", $field_password)) {
if (strlen($errors['password'][0] > 10)){	
$errors['password'][0] = $errors['password'][0].' and ';
}

if (strlen($errors['password'][0] < 10)){	
$errors['password'][0] = 'Password must ';
}	
$errors['password'][0] = $errors['password'][0].' have letters ';
} 

$field_user_parsed = str_replace('.', '', $field_user);

if (!ctype_lower($field_user_parsed)) {
$errors['user'][0] = 'Username must be lower case.';

}

if (substr_count($field_user, '.') > 1) {
$errors['user'][0] = 'Username cannot contain more that one period.';

}

if (!empty($errors)) {
$_SESSION['errors'] = $errors;
header('Location: /xampp/party/index.php');

}

else{
session_destroy();
}

if ($mail_status) {
header('Location: /xampp/party/index.php');

}
?>