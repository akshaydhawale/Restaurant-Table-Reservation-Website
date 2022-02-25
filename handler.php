<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use  PHPMailer\PHPMailer\SMTP;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
//require_once "pdo.php";

    require 'vendor/autoload.php';

function send_mail($records){
    

    

    $mail = new PHPMailer(true);
    $body='Hotel booking is completed for '.$records['name'].' on '.strval(date( "Y-m-d", strtotime($records['date']) )).'. Time slot is '.strval($records['slot']).' pm to '.strval($records['slot']+1).' pm for '.strval($records['ppl']).' people. Enjoy your evening!';

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com ';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'hotelbooking1103@gmail.com';                     // SMTP username
    $mail->Password   = 'hotel1103';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('hotelbooking1103@gmail.com', 'Hotel Booking');
    $mail->addAddress($records['email'], $records['name']);     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Hotel Booking confirmed';
    $mail->Body    =$body;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    //echo 'Message has been sent';
} catch (Exception $e) {
    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}



}

function book_table($records){
    require_once "pdo.php";

    $time_stmt=$pdo->prepare("SELECT COUNT(*) as 'count' FROM booking WHERE slot=:slot AND booking_date=:date");
    $time_stmt->execute(array(':slot'=>$records['slot'],':date'=>$records['date']));
    $count=$time_stmt->fetchAll(PDO::FETCH_ASSOC)[0]['count'];

    if($count>25){
        return "Seats full for this slot.Please choose other slots.";
    }

    else{
        $insert_stmt=$pdo->prepare("INSERT INTO users(name,email,mobile) VALUES (:name,:email,:mobile);");
        $insert_stmt->execute(array(':name'=>$records['name'],':email'=>$records['email'],':mobile'=>$records['mobile']));
        $last=$pdo->lastInsertId();

        $insert_booking_stmt=$pdo->prepare("INSERT INTO booking VALUES (:last,:slot,:people,:bdate);");
        $insert_booking_stmt->execute(array(':last'=>$last,':slot'=>$records['slot'],':people'=>$records['ppl'],':bdate'=>date( "Y-m-d", strtotime($records['date']) )));
        
        send_mail($records);
        return "Booking complete";
    }


}


if(isset($_POST['send'])){
    if(isset($_POST['name'])&&isset($_POST['slot'])&&isset($_POST['email'])&&isset($_POST['date'])&&isset($_POST['ppl']) ){
        
        $records=$_POST;
        echo(book_table($records));

    }
    else{
        echo("Insufficient information");
    }
}





?>