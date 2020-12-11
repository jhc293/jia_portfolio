<?php

    $name = $_POST['name'];
    $msg_email = $_POST['email'];
    $msg = $_POST['message'];


    $email_from = 'pspjia@gmail.com';

    $email_subject = 'New Contact From Portfolio';

    $email_body = "Name: $name. \n".
                    "Email: $msg_email.\n".
                        "Message: $msg.\n";
    
    $to = 'jiacedu@gmail.com';

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $msg_email \n\n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: contact.html");




?>