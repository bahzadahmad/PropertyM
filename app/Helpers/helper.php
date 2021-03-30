<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
function StepAmount($iId){
  $aStepAmount = DB::select("SELECT amount FROM `steps` WHERE step_id = $iId");
  $aSubstepAmount = DB::select("SELECT SUM(amount) AS 'amount' FROM `steps` WHERE parent_id = $iId");
  return $aStepAmount[0]->amount - $aSubstepAmount[0]->amount;
}
function step(){
  $aStep = array();
  $aResult = DB::table('steps')->where('parent_id','=',0)->get();
  foreach ($aResult as $key => $value) {
    $aStep[$value->step_id] = ucwords($value->title);
  }
  return $aStep;
}
function substep(){
  $aStep = array();
  $aResult = DB::select('select * from steps');
  foreach ($aResult as $key => $value) {
    $aStep[$value->step_id] = ucwords($value->title);
  }
  return $aStep;
}
function sendMail($aData){
  require 'vendor/autoload.php';
  
  $mail = new PHPMailer(true);
  $mail->CharSet = "utf-8";
  try {
      //Server settings
      //$mail->SMTPDebug = SMTP::DEBUG_SERVER;             // Enable verbose debug output
      $mail->SMTPDebug = 0;   // Enable verbose debug output
      $mail->isSMTP();                                   // Send using SMTP
      $mail->Host       = 'send.one.com';                 // Set the SMTP server to send through
      $mail->SMTPAuth   = true;                         // Enable SMTP authentication
      $mail->Username   = 'noreply@carsell.se';         // SMTP username
      $mail->Password   = 'Jul@2020';             // SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;     // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
      $mail->Port       = 587;                        // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
      
      //Recipients
      $mail->setFrom('noreply@haninge.se', 'Haninge Islamiska Kulturcentret');
      $mail->addAddress($aData['to'], 'Dev1');     // Add a recipient
      //$mail->addAddress('ellen@example.com');               // Name is optional
      // $mail->addReplyTo('info@example.com', 'Information');
      // $mail->addCC('cc@example.com');
      // $mail->addBCC('bcc@example.com');

      // Attachments
      // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
      // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

      // Content
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = $aData['subject'];
      $mail->Body    = $aData['message'];
      $mail->AltBody = '';
      $mail->send();
      //echo 'Message has been sent';
  } catch (Exception $e) {
      //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}
function nets_api($aData){
  
}
?>