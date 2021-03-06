<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class PhpmailerController extends Controller
{
    public function sendEmail (Request $request) {
        // is method a POST ?
        if($request->isMethod('post')) {
              require 'vendor/autoload.php';													// load Composer's autoloader
  
              $mail = new PHPMailer(true);                            // Passing `true` enables exceptions
  
              try {
                  // Server settings
              $mail->SMTPDebug = 0;                                	// Enable verbose debug output
                  $mail->isSMTP();                                     	// Set mailer to use SMTP
                  $mail->Host = 'smtp.gmail.com';												// Specify main and backup SMTP servers
                  $mail->SMTPAuth = true;                              	// Enable SMTP authentication
                  $mail->Username = 'example@gmail.com';             // SMTP username
                  $mail->Password = 'password';              // SMTP password
                  $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                  $mail->Port = 587;                                    // TCP port to connect to
  
                  //Recipients
                  $mail->setFrom('your-email@gmail.com', 'Mailer');
                  $mail->addAddress('his-her-email@gmail.com', 'Optional name');	// Add a recipient, Name is optional
                  $mail->addReplyTo('your-email@gmail.com', 'Mailer');
                  $mail->addCC('his-her-email@gmail.com');
                  $mail->addBCC('his-her-email@gmail.com');
  
                  //Attachments (optional)
                  // $mail->addAttachment('/var/tmp/file.tar.gz');			// Add attachments
                  // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');	// Optional name
  
                  //Content
                  $mail->isHTML(true); 																	// Set email format to HTML
                  $mail->Subject = "SUBJECT";
                  $mail->Body    = Request::input('message');						// message
  
                  $mail->send();
                  return back()->with('success','Message has been sent!');
              } catch (Exception $e) {
                  return back()->with('error','Message could not be sent.');
              }
          }
          return view('site.contact')
          ->with(['title' => 'Contacto']);
    }
  } 