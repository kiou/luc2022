<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Contact;
use App\Form\Type\ContactType;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;

class GlobalController extends AbstractController
{
    public function index(Request $request, MailerInterface $mailer)
    {
        $contact = new Contact;
        $form = $this->createForm(ContactType::class, $contact);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $email = (new Email())
                ->from('contact@lucpinelli.fr')
                ->to('pinelli.luc@outlook.fr')
                ->subject('Time for Symfony Mailer!')
                ->text('Sending emails is fun again!')
                ->html('<p>See Twig integration for better HTML integration!</p>');

            $mailer->send($email);

            $request->getSession()->getFlashBag()->add('succes', 'Message envoyé avec succès');
            return $this->redirect($this->generateUrl('app_index'));

        }

        return $this->render('index.html.twig',[
            'form' => $form->createView()
        ]);
    }
}