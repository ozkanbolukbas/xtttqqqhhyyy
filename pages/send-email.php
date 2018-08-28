<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


//Load composer's autoloader

// echo phpversion();

require 'vendor/autoload.php';

try {
    $mail = new PHPMailer(true);
    $mail->CharSet = "utf-8";
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'rank.guzelhosting.com';                   // Specify main and backup SMTP servers
    $mail->SMTPAuth = false;                               // Enable SMTP authentication
    $mail->Username = 'developer@evyasam.com.tr';                 // SMTP username
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;  //465                         // TCP port to connect to

    //Recipients
    $mail->setFrom('developer@evyasam.com.tr', 'Mailer');
    $mail->addAddress('itrevo7@gmail.com', 'Ahmed User');     // Add a recipient
    //$mail->addAddress('contact@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML

    function died($error)
    {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error . "<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }

    // validation expected data exists
    if (!isset($_POST['name']) ||
        !isset($_POST['surname']) ||
        // !isset($_POST['email']) ||
        !isset($_POST['telefon']) ||
        !isset($_POST['birth_place']) ||
        !isset($_POST['birth_date']) ||
        !isset($_POST['address']) ||
        !isset($_POST['education_status']) ||
        !isset($_POST['last_degree']) ||
        !isset($_POST['school_name']))
        // !isset($_POST['school_degree']) ||
        // !isset($_POST['last_company']) ||
        // !isset($_POST['last_position']) ||
        // !isset($_POST['last_company_address']) ||
        // !isset($_POST['evyasam_position']) ||
        // !isset($_POST['message']))
    {
        died('We are sorry, but there appears to be a problem with the form you submitted.');
    }

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email_address = $_POST['email'];
    $phone_number = $_POST['telefon'];
    $birth_place = $_POST['birth_place'];
    $birth_date = $_POST['birth_date'];
    $address = $_POST['address'];
    $education_status = $_POST['education_status'];
    $last_degree = $_POST['last_degree'];
    $school_name = $_POST['school_name'];
    $school_degree = $_POST['school_degree'];
    $last_company = $_POST['last_company'];
    $last_position = $_POST['last_position'];
    $last_company_address = $_POST['last_company_address'];
    $position = $_POST['evyasam_position'];
    $comments = $_POST['message'];

    $email_message = "Form details below. <br /><br />";
    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }

    $email_message .= "Ad: " . clean_string($name) . '<br />';
    $email_message .= "Soyad: " . clean_string($surname) . '<br />';
    $email_message .= "E-posta: " . clean_string($email_address) . '<br />';
    $email_message .= "Cep Telefonun No: " . clean_string($phone_number) . '<br />';
    $email_message .= "Doğum Yeri: " . clean_string($birth_place) . '<br />';
    $email_message .= "Doğum Günü: " . clean_string($birth_date) . '<br />';
    $email_message .= "Adres: " . clean_string($address) . '<br />';
    $email_message .= "Eğitim Durumu: " . clean_string($education_status) . '<br />';
    $email_message .= "Eğitim Seviyesi: " . clean_string($last_degree) . '<br />';
    $email_message .= "Okul Adı: " . clean_string($school_name) . '<br />';
    $email_message .= "Mezun Olunan Bölüm: " . clean_string($school_degree) . '<br />';
    $email_message .= "Eski İş Yeri Adı: " . clean_string($last_company) . '<br />';
    $email_message .= "Eski Pozisyonu: " . clean_string($last_position) . '<br />';
    $email_message .= "Eski İş Yeri Adresi: " . clean_string($last_company_address) . '<br />';
    $email_message .= "Çalışmak İstediği Pozisyon: " . clean_string($position) . '<br />';
    $email_message .= "Ek Bilgi: " . clean_string($comments) . '<br />';


    $mail->Subject =  "Yeni İş Başvuru";
    $mail->Body    = $email_message;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();

    header("Location:http://deneme.evyasam.com.tr/pages/kariyer.html");
}

catch (phpmailerException $e) {
    echo $e->errorMessage();
}
catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
