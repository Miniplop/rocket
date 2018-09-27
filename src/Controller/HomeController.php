<?php

namespace App\Controller;

use App\Entity\Task;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends Controller
{
    /**
     * @Route("/", methods="GET", name="home")
     */
    public function homeAction()
    {
        return $this->render('base.html.twig');
    }
}