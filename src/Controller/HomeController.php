<?php


namespace App\Controller;


use App\Entity\User;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;

class HomeController extends FOSRestController
{
    /**
     * @Rest\View(serializerGroups={"users"})
     *
     * @param \Swift_Mailer $mailer
     *
     * @return User
     */
    public function indexAction(\Swift_Mailer $mailer)
    {
        $message = (new \Swift_Message('Hello Email'))
            ->setFrom('dominikg@infobuzer.pl')
            ->setTo('kontakt@dominikgasior.pl')
            ->setBody('Test');

        $mailer->send($message);

        $user = new User(1, 'Test');

        return $user;
    }
}