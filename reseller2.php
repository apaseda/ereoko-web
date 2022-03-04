<?php

    $data = $_POST['data'];
    $firstname = 'ayo';
    $lastname = 'paseda';
    $companyname = 'ATB';
    $email = 'pase01.okiki@gmail.com';
    $streetname = 'street name';
    $houseNumber = 'number';
    $zipcode = 'zip code';
    $city = 'city';
    $nationality = 'nigeria';
    $telephone = 'telephone';
    $msg = 'gghjgvjhjvj';

    // To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    
    // Create email headers
    $headers .= 'From: '.$email."\r\n".
        'Reply-To: '.$email."\r\n" .
        'X-Mailer: PHP/' . phpversion();

    $message = '<html><body>';

    $message .= '<h2>NEW RESELLER REQUEST</h2>';

    $message .= '<h5>You have a new reseller request, contact info is as follows;</h5>';

    $message .= '<p><b>First name: ';
    $message .= $firstname;
    $message .= '</p></b>';

    $message .= '<p><b>Last name: ';
    $message .= $lastname;
    $message .= '</p></b>';

    $message .= '<p><b>Company name: ';
    $message .= $companyname;
    $message .= '</p></b>';

    $message .= '<p><b>Email: ';
    $message .= $email;
    $message .= '</p></b>';

    $message .= '<p><b>Phone number: ';
    $message .=  $telephone;
    $message .= '</p></b>';

    $message .= '<p><b>Street name: ';
    $message .= $streetname;
    $message .= '</p></b>';

    $message .= '<p><b>House number: ';
    $message .= $houseNumber;
    $message .= '</p></b>';

    $message .= '<p><b>Zip code: ';
    $message .= $zipcode;
    $message .= '</p></b>';

    $message .= '<p><b>City: ';
    $message .= $city;
    $message .= '</p></b>';

    $message .= '<p><b>Country: ';
    $message .= $nationality;
    $message .= '</p></b>';

    $message .= '<p><b>message:</p></b>';

    $message .= '<p>';
    $message .= $msg;
    $message .= '</p>';

    $message .= '</body></html>';

    //send email
    ;

    if($mail = mail("pase01.okiki@gmail.com", 'NEW RESELLER REQUEST', $message, $headers)){
        echo 'Your mail has been sent successfully.';
    } else{
        echo 'Unable to send email. Please try again.';
    }

?>