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

        $tasks = $this->getDoctrine()
            ->getRepository(Task::class)
            ->findAll();

        $tasksJson =  json_encode($tasks);

        return $this->render('base.html.twig', [
            'tasks' => $tasksJson
        ]);
    }
}