<?php

$to=$from=$phone=$name=$headers=$subject=$body="";
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
    $to = 'rohitsuthar886@gmail.com';
    $from = $_POST['email'];
    $name = $_POST['name'];
    $phone=$_POST['phone'];
    $headers = "From:" .$from;
    $subject = 'You have a new message from '. $name;
    $body = $_POST['message']; 
    }

    if(mail($to,$subject, $body, $headers))
    {
        echo "Your message was sent successfully! I will be in touch as soon as I can.";
    }
    else
    {
        echo "Something went wrong, try refreshing and submitting the form again!";
    }
    
?>