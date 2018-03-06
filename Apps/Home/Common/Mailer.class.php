<?php
namespace Home\Common;
Class Mailer
{
	public function sendMail($to, $title, $content)
	{
        Vendor('swiftmailer.lib.swift_required');
        $transport = (new \Swift_SmtpTransport(C('MAIL_HOST'), 25))
            ->setUsername(C('MAIL_FROM'))
            ->setPassword(C('MAIL_PASSWORD'));
        $mailer = new \Swift_Mailer($transport);

        $message = (new \Swift_Message($title))
            ->setFrom([C('MAIL_FROM') => C('MAIL_FROMNAME')])
            ->setTo($to)
            ->setContentType('text/html')
            ->setCharset('utf-8')
            ->setBody($content);
//        $mailer->protocol='smtp';

        try{
            $mailer->send($message);
        }catch (\Exception $e){
            $msg = "error code :".$e -> getcode()."\n";
            $msg .= "error message :".$e -> getMessage()."\n";
            $msg .= "error trace".$e ->getTraceAsString()."\n";
            return $msg;
        }
	}
}