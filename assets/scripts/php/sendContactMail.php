<?php

//Load Composer's autoloader
require("./PHPMailer.php");
require("./SMTP.php");
require("./Exception.php");

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer\PHPMailer\PHPMailer(true);

try {
    $errors = false;
    $variables = array('name', 'mail', 'phone', 'text');

    foreach($variables as $variable_name){
       if(isset($_POST[$variable_name])){

       }else{
        $errors = true;
       }
    }

    if(!$errors)
    {
      //Server settings
      $mail->Port       = 25;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

      //Recipients
      $mail->setFrom('noreply@waymovers-umzug.de', 'Kontaktanfrage', 0);
      $mail->addAddress('office@waymovers-umzug.de');
      $mail->addReplyTo($_POST["mail"], 'Kunde');

      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->CharSet   = 'UTF-8';
      $mail->Encoding  = 'base64';
      $mail->Subject = 'Neue Kontaktanfrage waymovers-umzug.de';

      $mail->Body = "Sie haben eine neue Nachricht über waymovers-umzug.de erhalten.<br><br>" .
                  "<table style='text-align: left;'>" .
                    "<tr>" .
                      "<th>" . "Vor & Nachname" . "</th>" .
                      "<td>" . "&emsp;&emsp;"   . "</td>" .
                      "<td>" . $_POST["name"]   . "</td>" .
                    "</tr>" .
                    "<tr>" .
                      "<th>" . "E-Mail-Adresse" . "</th>" .
                      "<td>" . "&emsp;&emsp;"   . "</td>" .
                      "<td>" . $_POST["mail"]   . "</td>" .
                    "</tr>" .
                    "<tr>" .
                      "<th>" . "Telefonnummer" . "</th>" .
                      "<td>" . "&emsp;&emsp;"  . "</td>" .
                      "<td>" . $_POST["phone"]  . "</td>" .
                    "</tr>" .
                  "</table>" . "<br><br>" .
                  "<b>Nachricht</b><br>" . $_POST["text"];

      $mail->AltBody    = 'Sie haben eine neue Kontaktanfrage über waymovers-umzug.de erhalten.\n\n' .
                        'Vor- und Nachname: ' . $_POST["name"] . '\n' .
                        'E-Mail-Adresse: ' . $_POST["mail"] . '\n' .
                        'Telefonnummer: ' . $_POST["phone"] . '\n' .
                        '\n' .
                        'Zusatzinformationen\n' . $_POST["text"];
      $mail->send();
      echo 'success';
    } else {
      echo "error: unknown problem.";
    }
} catch (Exception $e) {
    echo "error: {$mail->ErrorInfo}";
}
