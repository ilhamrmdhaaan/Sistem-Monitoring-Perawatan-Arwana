<?php  
//Composer's autoload file loads all necessary files
require 'vendor/autoload.php';
function send_email_notification($suhu) {
	$mail = new PHPMailer;
	$mail->isSMTP(true);  // Set mailer to use SMTP
	$mail->Host = 'smtp.eu.mailgun.org';  // Specify mailgun SMTP servers
	$mail->Port = 587;
	$mail->SMTPAuth = true; // Enable SMTP authentication
	$mail->Username = 'postmaster@mg.vanara.id'; // SMTP username from https://mailgun.com/cp/domains
	$mail->Password = '40f941e1ec4fb18b35c735e42239b6d5-4a62b8e8-cbdc67ea'; // SMTP password from https://mailgun.com/cp/domains
	// $mail->SMTPDebug = 4;

	#$mail->SMTPSecure = 'tls';   // Enable encryption, 'ssl'
	$mail->From = 'Monitoring@Arduino.id'; // The FROM field, the address sending the email 
	$mail->FromName = 'Arduino'; // The NAME field which will be displayed on arrival by the email client

	$mail->addAddress('ilhamramadhan011997@gmail.com');
	// $mail->addAddress('opam.qweiop@gmail.com', 'Pramesti Hatta K.');
	// $mail->addAddress('embowth@gmail.com');
	// $mail->addAddress('rhimba.aac@gmail.com');
	// $mail->addAddress('kukuhpradityo@gmail.com');
	// $mail->addAddress('anizsubhan@gmail.com');
	// $mail->addAddress('sadewoeko18@gmail.com');

	$mail->isHTML(true);   // Set email to be sent as HTML, if you are planning on sending plain text email just set it to false
	// The following is self explanatory
	$mail->Subject = 'Monitoring Suhu';
	if ($suhu > 30) {
		$mail->Body    = '<p>Info! Suhu air akuarium meningkat, suhu air saat ini <b> '.$suhu.'</b> derajat celcius</p>';
	} else if ($suhu <= 30 && $suhu >= 25) {
		$mail->Body    = '<p>Info! Suhu air akuarium sudah mulai normal suhu air saat ini <b> '.$suhu.'</b> derajat celcius</p>';
	} else if ($suhu < 25) {
		$mail->Body    = '<p>Info! Suhu air akuarium mulai menurun, suhu air saat ini <b> '.$suhu.'</b> derajat celcius</p>';
	}

	if ($suhu <20) {
		$mail->Body    = '<p>Info! Suhu air akuarium mulai extreme, suhu air saat ini <b> '.$suhu.'</b> derajat celcius</p>';		
	} else if ($suhu > 35) {
		$mail->Body    = '<p>Info! Suhu air akuarium mulai extreme, suhu air saat ini <b> '.$suhu.'</b> derajat celcius</p>';
	}
	
	if(!$mail->send()) {  
	    echo "Message hasn't been sent.";
	    echo 'Mailer Error: ' . $mail->ErrorInfo . "n";
	} else {
	    //echo "Message has been sent.";
	}
}

?>