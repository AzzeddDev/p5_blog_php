<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require( __DIR__ . './../../../vendor/autoload.php');

$mail = new PHPMailer(true);

//Enable SMTP debugging.
$mail->SMTPDebug = 0;

//Set PHPMailer to use SMTP.
$mail->isSMTP();

//Set SMTP host name
$mail->Host = "smtp.gmail.com";

//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

//Provide username and password
$mail->Username = "salmi.azzeddine100@gmail.com";
$mail->Password = "fdwzlplmomdsyjxe";

//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";

//Set TCP port to connect to
$mail->Port = 587;


if(isset($_POST['mailform'])) {
    if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message'])) {

        $mail->isHTML(true);

        $mail->Subject = "Contact Form Monblog.fr";

        $header="MIME-Version: 1.0\r\n";
        $header.='From:"nom_d\'expediteur"<votre@mail.com>'."\n";
        $header.='Content-Type:text/html; charset="uft-8"'."\n";
        $header.='Content-Transfer-Encoding: 8bit';
        $message='
	      <html>
	         <body>
	            <div>
	            <p>Voici un nouveau message de votre site : monblog.fr</p><br />
	               <u style="padding-bottom: 5px; font-weight: 500">Nom de l\'expéditeur :</u><br />'.$_POST['nom'].'<br /><br />
	               <u style="padding-bottom: 5px">Mail de l\'expéditeur :</u><br />'.$_POST['mail'].'<br /><br />
	               <u style="padding-bottom: 5px">Message :</u><br />'.nl2br($_POST['message']).'<br /><br />
	            </div>
	         </body>
	      </html>
	      ';

        $mail->Body = $message;
        $mail->From = $_POST['mail'];
        $mail->FromName = 'Contact Form';

        $mail->addAddress("salmi.azzeddine100@gmail.com", "Salmi Azz Eddine");

        //mail("salmi.azzeddine100@gmail.com", "Contact - monblog.fr", $message, $header);

        try {
            $mail->send();
        } catch (Exception $e) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        }

        header('Location: http://localhost/mon-blog/templates/front_office/contactez-moi.php');

        $msg="Votre message a bien été envoyé !";

    } else {
        $msg="Tous les champs doivent être complétés !";
    }
}