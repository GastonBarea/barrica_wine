<?php

include_once(DIR_BASE.'vendor/autoload.php');
include_once(DIR_BASE.'config/mail.php');

function sendMail($data){

    $transport = (new Swift_SmtpTransport($GLOBALS['mail_smtp_addr'],$GLOBALS['mail_smtp_port'],'ssl'))
    ->setUsername($GLOBALS['mail_smtp_user'])
    ->setPAssword($GLOBALS['mail_smtp_pass']);

    $mailer = new Swift_Mailer($transport);

    $message = (new Swift_Message('Envio desde el Contacto'))
        ->setFrom([$data['email']=>$data['name']])
        ->setTo([$GLOBALS['mail_smtp_user']=>'Formulario de contacto'])
        ->setBody(processMailBody($data))
        ->setContentType("text/html");

    //var_dump($message);
return $mailer->send($message);
}

function processMailBody($data){
    $body = file_get_contents(DIR_BASE.'contact.html');
    foreach($data as $key=>$value){
        $body = str_replace("{".$key."}",$value,$body);
    }
    return $body;


}

?>