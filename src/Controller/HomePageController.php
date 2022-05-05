<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomePageController extends AbstractController
{
    public function indexAction(Request $request): Response
    {
        $message = 'Super promo sur les pulls, vient du fichier src/Controller HomePageController';

        return $this->render('@SyliusShop/Homepage/index.html.twig', [
            'message' => $message,
        ]);
    }
}
