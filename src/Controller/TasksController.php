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

        $taskRepository =  $this->getDoctrine()
            ->getRepository(Task::class);
        $taskToDelete = $taskRepository->findOneBy(['id' => $taskId]);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($taskToDelete);

        $entityManager->flush();

        return new Response();
    }
}