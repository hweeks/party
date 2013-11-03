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

if(!filter_var($field_email, FILTER_VALIDATE_EMAIL)){ 		

}

if (strlen($field_password) < 8) {

}

if (!preg_match("#[0-9]+#", $field_password)) {

}

if (!preg_match("#[a-zA-Z]+#", $field_password)) {

} 

$field_user_parsed = str_replace('.', '', $field_user);

if (!ctype_lower($field_user_parsed)) {

}

if (substr_count($field_user, '.') > 1) {

}

if (!empty($errors)) {

}

else{
session_destroy();
}

if ($mail_status) {

}
?>