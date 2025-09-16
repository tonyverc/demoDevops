<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

final class MailController extends AbstractController
{
    #[Route('/send-mail', name: 'send_mail')]
    public function sendMail(MailerInterface $mailer): Response
    {
        $email = (new Email())
        
            ->from('hello@example.com')
            ->to('recipient@example.com')
            ->subject('Test Email')
            ->text('This is a test email.');

        $mailer->send($email);

        return new Response('Email envoyé avec succès !');
    }
}
