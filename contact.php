<?php

    $name = $_POST['name'];
    $msg_email = $_POST['email'];
    $msg = $_POST['message'];


    $email_from = 'justin.tu049@hotmail.com';

    $email_subject = 'New Contact From Portfolio';

    $email_body = "Name: $name. \n".
                    "Email: $msg_email.\n".
                        "Message: $msg.\n";
    
    $to = 'tujustin.msu.edu';

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $msg_email \n\n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: contact.html");




?>