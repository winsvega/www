<?php 
if(strpos($_SERVER['HTTP_REFERER'],'slock') !== false) { 
    $to = "info@xonia7.de, chr.jentzsch@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "slock.it-request: ".$_POST['subject'];
    $subject2 = "Copy of your slock.it form submission";
    $message = $name . " ( $from ) wrote the following:" . "\n\n" . $_POST['txt'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['txt'];

    $headers = "";//"From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
}
?>
