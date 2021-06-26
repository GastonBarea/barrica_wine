<?php


require_once(DIR_BASE.'vendor/autoload.php');
require_once(DIR_BASE.'web/config/mail.php');


function sendMail($data){
    $transport = (new Swift_SmtpTransport($GLOBALS['mail_smtp_addr'],$GLOBALS['mail_smtp_port']))
    ->setUsername($GLOBALS['mail_smtp_user'])
    ->setPAssword($GLOBALS['mail_smtp_pass']);

    $mailer = new Swift_Mailer($transport);

    $message = (new Swift_Message('Contacto desde el barrica wine'))
        ->setFrom([$data['email']=>$data['nombre']])
        ->setTo([$GLOBALS['mail_smtp_user']=>'Formulario de contacto de Carrito'])
        ->setBody(processMailBody($data))
        ->setContentType("text/html");

    var_dump($message);
return $mailer->send($message);
}

function processMailBody($data){
    $body = file_get_contents(DIR_BASE.'web/contact.html');
    foreach($data as $key=>$value){
        $body = str_replace("{".$key."}",$value,$body);
    }
    return $body;
}

?>