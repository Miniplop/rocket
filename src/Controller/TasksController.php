<?php

namespace App\Controller;

use App\Entity\Task;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TasksController extends Controller
{
    /**
     * @Route("/tasks/{taskId}", methods="DELETE", name="remove_task")
     */
    public function deleteAction($taskId) {

        return new Response();
    }
}