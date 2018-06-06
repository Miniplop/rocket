<?php

namespace App\Controller;

use App\Entity\Task;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{

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