<?php
session_start();
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'mail/Exception.php';
require 'mail/PHPMailer.php';
require 'mail/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
   // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'mathewpeter2025@mca.ajce.in';                     //SMTP username
    $mail->Password   = 'kattimattathil@7';                               //SMTP password
    $mail->SMTPSecure ='tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('mathewpeter2025@mca.ajce.in', 'Caravan tourium');
    $email=$_SESSION['email'];
    $_SESSION['email']=$email;
    $name=$_SESSION['name'];
    $mail->addAddress($email);     //Add a recipient
$email="http://localhost/mathew/miniproject-s6/admin/Employee/feedbackuserview.php#!";

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'customer Feedback Link';
    $mail->Body    = '<div style="font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:2">
    <div style="margin:50px auto;width:70%;padding:20px 0">
      <div style="border-bottom:6px solid #eee">
        <a href="" style="font-size:1.4em;color: #00466a;text-decoration:none;font-weight:600">caravan tourism</a>
      </div>
<p>Hello ,'.$name.'<v</p>
<p>Thank you for booking caravan and we hope that you have enjoyed the trip.Please provide a feedback our service</p>


<font size="5"color="red">Feedback Link is:<br>'.$email.'<p></font>
      <p> Please use this link to send feedback to us</p>
      <p style="font-size:0.9em;">Regards,<br />caravan tourium</p>
      <hr style="border:none;border-top:1px solid #eee" />
      <div style="float:right;padding:8px 0;color:#aaa;font-size:0.8em;line-height:1;font-weight:300">
        <p>caravan tourium</p>
        <p>Elanji P.O</p>
        <p>ernakulam</p>
      </div>
   </div>
</div>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
    $id=$_SESSION['id'];
    $_SESSION['id']=$id;

    $_SESSION['feedback']="succss";
    ?>
    <script>
        alert("Feedback form has been successfully processed to customer")
        window.location.href='dashboard.php';
        </script>
        <?php
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>