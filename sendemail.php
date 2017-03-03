<?php
        class query{
            public $qid;
            public $name;
            public $email;
            public $subject;
            public $message;

            function __construct($i,$n,$e,$s,$m){
                $this->qid      =$i;
                $this->name     =$n;
                $this->email    =$e;
                $this->subject  =$s;
                $this->message  =$m;
            }
        }

        $db = new mysqli('localhost','root','','stcs');
        if($db->connect_errno> 0 ) die('Unable to connect to database ['. $db->connect_error .']');

        STATIC $count = 6;
        $count++;

        $new_query =new query(rand(10, 1000), $_POST['name'],$_POST['email'],$_POST['subject'],$_POST['message']);

        $query = "INSERT INTO queries VALUES('".
        $new_query->qid."','".
        $new_query->name."','".
        $new_query->email."','".
        $new_query->subject."','".
        $new_query->message."')";

        if(!$result = $db->query($query)) die('There was an error adding the new email to the table Queries [' . $db->error . ']');
        else echo('Email Added To Database');
        header("Location: contact-us.html");

    ?>

    <!--header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Thank you for your query. We will contact you as soon as possible.'
	);
    $name       = @trim(stripslashes($_POST['name'])); 
    $email      = @trim(stripslashes($_POST['email'])); 
    $subject    = @trim(stripslashes($_POST['subject'])); 
    $message    = @trim(stripslashes($_POST['message'])); 

    $email_from = $email;//email sender
    $email_to = 'stromcs.sales@outlook.com';//email reciever

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
    die;-->