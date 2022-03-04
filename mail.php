<?php

if($_POST){

    $data = $_POST['data'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'] . " from " . $email . " regarding EreOko";
    $message = $_POST['message'];

    // To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    
    // Create email headers
    $headers .= 'From: '.$email."\r\n".
        'Reply-To: '.$email."\r\n" .
        'X-Mailer: PHP/' . phpversion();

    //send email
    $mail = mail("info@ereoko.com", $subject, $message, $headers);

    echo $subject;
}

?>