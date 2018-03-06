<?php
Vendor('Swift.swift_required');
class Mail
{
	public function sendMail($to,$title,$content)
	{
		$transport = (new Swift_SmtpTransport(C('MAIL_HOST'), 25))
		  ->setUsername(C('MAIL_FROM'))
		  ->setPassword(C('MAIL_PASSWORD'));
		$mailer = new Swift_Mailer($transport);

		$message = (new Swift_Message($title))
		  ->setFrom([C('MAIL_FROM') => C('MAIL_FROMNAME')])
		  ->setTo($to)
		  ->setContentType('text/html')
		  ->setCharset('utf-8')
		  ->setBody($content);

		$result = $mailer->send($message);
	}
}