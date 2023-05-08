<?php
session_start();
$a=$_SESSION['email'];
$b=$_SESSION['id'];
$_SESSION['id']=$b;
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
    $mail->setFrom('mathewpeter2025@mca.ajce.in', 'Caravan tourisum');
    $a=$_SESSION['email'];
    $mail->addAddress($a);     //Add a recipient
   $code=substr(str_shuffle('1234567890QWERTYUIOPASDFGHJKLZXCVBNM'),0,10);

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'OTP verification for Caravan Tourism';
    $mail->Body    = '<div style="font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:2">
    <div style="margin:50px auto;width:70%;padding:20px 0">
      <div style="border-bottom:1px solid #eee">
        <a href="" style="font-size:1.4em;color: #00466a;text-decoration:none;font-weight:600">Caravan Tourism</a>
      </div>
      <p>Thank you for registering on Caravan Tourism. We are providing good service for caravan and we always keep in touch with your queries. We have sent an OTP (one-time password) to the registered email address. Please use the OTP given below to complete the registration process and get started with our services. </p>
      <h2 style="background: #00466a;margin: 0 auto;width: max-content;padding: 0 10px;color:green;border-radius: 4px;">'.$code.'</h2>
      <p style="font-size:0.9em;">Regards,<br />Caravan Tourism</p>
      <hr style="border:none;border-top:7px solid #eee" />
      <div style="float:right;padding:8px 0;color:#aaa;font-size:0.8em;line-height:1;font-weight:300">
        <p>Caravan Tourism</p>
        <p>Elanji P.O</p>
        <p>Ernakulam</p>
      </div>
   </div>
</div>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
    $_SESSION["code"]=$code;
    ?>
    <script>
        window.location.href='otpverificationregisternew.php';
        </script>
        <?php
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
