<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Thank you for your query. We will contact you as soon as possible.'
	);

    $name       = @trim(stripslashes($_POST['cusname'])); 
    $email      = @trim(stripslashes($_POST['cusemail'])); 
    $subject    = @trim(stripslashes($_POST['subject'])); 
    $message    = @trim(stripslashes($_POST['query'])); 

    $email_from = $email;
    $email_to = 'stromcs.sales@outlook.com';//replace with your email

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
    die;