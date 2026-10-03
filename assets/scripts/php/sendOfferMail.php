<?php

//Load Composer's autoloader
require("./PHPMailer.php");
require("./SMTP.php");
require("./Exception.php");

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer\PHPMailer\PHPMailer(true);

try {
  $errors = false;
  $website = "waymovers-umzug.de";
  $km = "n/A";
  $variables = array('name', 'mail', 'phone', "flaeche", "add_info", "auszug", "einzug", "datum");
  $datumHTML = "";

  foreach ($variables as $variable_name) {
    if (isset($_POST[$variable_name])) {
    } else {
      $errors = true;
    }
  }

  if (isset($_POST["km"]) && $_POST["km"] !== "") {
    $km = $_POST["km"];
  }

  if ($_POST["datum"] !== "") {
    $datumArr = explode(",", $_POST["datum"]);
    $first = true;
    foreach ($datumArr as $str) {
      if (!$first)
        $datumHTML .= "<br>";

      $datumHTML .= $str;

      $first = false;
    }
  }

  if (!$errors) {
    //Server settings
    $mail->Port       = 25;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom("noreply@$website", 'Angebotsanfrage', 0);
    $mail->addAddress('office@waymovers-umzug.de');
    $mail->addReplyTo($_POST["mail"], 'Kunde');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->CharSet   = 'UTF-8';
    $mail->Encoding  = 'base64';
    $mail->Subject = "Neue Angebotsanfrage $website";

    $mail->Body = "Sie haben eine neue Anfrage über $website erhalten.<br><br>" .
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
      "<td width='111' style='font-size:1px;line-height:21px;'>&nbsp;</td>" .
      "<tr>" .
      "<th valign='top'>" . "von" . "</th>" .
      "<td>" . "&emsp;&emsp;"   . "</td>" .
      "<td>" . $_POST["auszug"] . "</td>" .
      "</tr>" .
      "<tr>" .
      "<th valign='top'>" . "bis" . "</th>" .
      "<td>" . "&emsp;&emsp;"   . "</td>" .
      "<td>" . $_POST["einzug"] . "</td>" .
      "</tr>" .
      "<tr>" .
      "<th>" . "Strecke" . "</th>" .
      "<td>" . "&emsp;&emsp;"   . "</td>" .
      "<td>" . $km . " (Fluglinie)" . "</td>" .
      "</tr>" .
      "<tr>" .
      "<th>" . "Fläche in m²" . "</th>" .
      "<td>" . "&emsp;&emsp;"   . "</td>" .
      "<td>" . $_POST["flaeche"] . "</td>" .
      "</tr>" .
      "<td width='111' style='font-size:1px;line-height:21px;'>&nbsp;</td>" .
      "<tr>" .
      "<th valign='top'>" . "Wunschtermine" . "</th>" .
      "<td>" . "&emsp;&emsp;"   . "</td>" .
      "<td>" . $datumHTML . "</td>" .
      "</tr>" .
      "</table>" . "<br><br>" .
      "<b>Zusatzinformationen</b><br>" . $_POST["add_info"];

    $mail->AltBody    = "Sie haben eine neue Angebotsanfrage über $website erhalten.\n\n" .
      'Vor- und Nachname: ' . $_POST["name"] . '\n' .
      'E-Mail-Adresse: ' . $_POST["mail"] . '\n' .
      'Telefonnummer: ' . $_POST["phone"] . '\n' .
      '\n' .
      'von: ' . $_POST["auszug"] . '\n' .
      'bis: ' . $_POST["einzug"] . '\n' .
      'Strecke (Fluglinie): ' . $km . '\n' .
      'Fläche in m²: ' . $_POST["flaeche"] . '\n' .
      '\n' .
      'Wunschtermine: ' . $_POST["datum"] . '\n' .
      "\n" .
      'Zusatzinformationen\n' . $_POST["add_info"];
    $mail->send();
    echo 'success';
  } else {
    echo "error: unknown problem.";
  }
} catch (Exception $e) {
  echo "error: {$mail->ErrorInfo}";
}
