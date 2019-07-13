<?php

if(isset($_POST['submit']) and $file){

    $file = $_POST['file'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "dylancusk@dylancuskelly.com";
    $headers = "From: ". $mailFrom;
    $txt = "You have received an email from ". $name.".\n\n".$message."\nFile: ".$file;

    mail($mailTo, $subject, $txt, $headers);
}

