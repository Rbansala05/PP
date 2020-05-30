<?php

if (isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];
    $emailTo = 'rbansal@iasate.edu';

    $headers = "From: ".$visitor_email;
    $txt = "You have received an email from ".$firstname." " .$lastname. ".\n\n".$message;

    mail($emailTo, $txt, $headers);
    header("Location: index.php?mailsend");
}


?>