<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class PageController extends AbstractController
{
    public function contactPage(): Response
    {
        return $this->render('Shop/contact.html.twig',
            );
    }
}
