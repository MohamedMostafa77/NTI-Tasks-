<?php 






namespace app\mails;



use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\PHPMailer;




class mail {
    public function serverSetting () {
         $mail = new PHPMailer(true);
         $mail->SMTPDebug = SMTP::DEBUG_OFF;                     
         $mail->isSMTP();                                        
         $mail->Host       = 'smtp.gmail.com';                    
         $mail->SMTPAuth   = true;                            
         $mail->Username   = 'ntiproject.x1@gmail.com';                 
         $mail->Password   = 'ntipro777';                              
         $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
         $mail->Port       = 465; 
         return $mail;
    }
}