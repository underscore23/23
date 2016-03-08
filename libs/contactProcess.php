<?php
include_once  "sg-cons.php";
include_once  "sg-connect.php";
include_once  "sales.php";



$name = $_POST['name'];
$email = $_POST['email'];
$query = $_POST['query'];
$subject = $_POST['subject'];
$template = $_POST['template'];
$message = $_POST['message'];

if( $name == "" || $email == || ) {
 // do nothing
} else {
    $weRock = iInsertCon($name, $email, $query, $subject, $template,$message);
}

?>