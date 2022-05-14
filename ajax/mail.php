<?php
$rate = $_POST["rate"];
$comment = $_POST["comment"];
$email = $_POST["email"];

$subject = "=?utf-8?B?" . base64_encode("Comment form web site") . "?=";
$header = "From: $email\r\nReply-to: $email\r\nContent-type: text/plain; charset=utf-8\r\n";
// $success = mail("miqaelyan.vrej1999@gmail.com", $subject, $message, $header);
$success = "great";
