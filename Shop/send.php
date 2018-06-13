<?php

$name = $_POST['name'];
$request = $_POST['request'];

$to = "kblinkov@gmail.com";
$subject = "Tutorial request";
$body = "Bla bla bla. \n\n $request";

mail ($to,$subject,$body);

echo "Message sanded!"
?>