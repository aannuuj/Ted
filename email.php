<?php

if($_POST["submit"]) {
    $recipient="hariompalkar@gmail.com,maaz.tedxchennai@gmail.com";
    $subject="TEDx Query";
    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
   
    $phoneno= $_POST["phoneno"];
    $message= $_POST["message"];

    $mailBody="Name: $sender\n
    Email: $senderEmail\n
    Reg No: $regno \n
    Phone No: $phoneno \n
    Message: $message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");
}

?>
