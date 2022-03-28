<?php




namespace app\mails;




use app\mails\mail;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;



class VerificationMail extends mail
{
    private $emailTo,$subject,$body;
    public function __construct(string $emailTo, string $subject, string $body)
    {
        $this->emailTo = $emailTo;
        $this->subject = $subject;
        $this->body = $body;
    }

    public function send()
    {
        try {
            $mail = $this->serverSetting();
            $mail->setFrom('ntiproject.x1@gmail.com', 'Ecommerce');
            $mail->addAddress($this->emailTo);      

            $mail->isHTML(true);                          
            $mail->Subject = $this->subject;
            $mail->Body    = $this->body;

            $mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

}
