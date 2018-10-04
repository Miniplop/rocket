<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends Controller
{
    /**
     * @Route("/login", methods="GET", name="login")
     */
    public function loginViewAction()
    {
        return $this->render('base.html.twig');
    }
}