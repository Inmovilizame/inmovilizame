<?php

namespace Inmovilizame\PhotoblogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Inmovilizame\PhotoblogBundle\Form\ContactType;
use Inmovilizame\PhotoblogBundle\Model\Contact;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="in_homepage")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
    
    /**
     * @Route("/contacto/", name="in_contact")
     * @Template()
     */
    public function contactAction()
    {
        $contact = new Contact();
        
        $form = $this->createForm(new ContactType(), $contact);
        
        if ($this->getRequest()->getMethod() == 'POST')
        {
            $form->bindRequest($this->getRequest());
            if ($form->isValid())
            {
                $message = \Swift_Message::newInstance()
                    ->setSubject('[Contacto desde InmovilizaME] - Enviado por ' . $contact->getName())
                    ->setFrom($contact->getEmail())
                    ->setTo($this->container->getParameter('info_email'))
                    ->setBody($contact->getName() . " dice:\n " . $contact->getComment())
                ;

                $this->get('mailer')->send($message);
                
                $this->get('session')->setFlash('info',
                     'Gracias por contactar con nosotros, lo antes posible te responderemos.'
                 );
                
                return $this->redirect($this->generateUrl('in_homepage'));
            }
        }
        
        return array(
            'form' => $form->createView()
        );
    }
    
    /**
     * @Route("/sobre-nosotros/", name="in_about")
     * @Template()
     */
    public function aboutAction()
    {
        return array();
    }
}
