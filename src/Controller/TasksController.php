<?php

namespace App\Controller;

use App\Entity\Task;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
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

    /**
     * @Route("/tasks/{taskId}", methods="GET", name="get_task_detail")
     */
    public function detailAction($taskId) {

        $taskRepository =  $this->getDoctrine()
            ->getRepository(Task::class);
        $task = $taskRepository->findOneBy(['id' => $taskId]);

        $taskJson =  json_encode($task);

        return $this->render('detailTask.html.twig', [
            'task' => $taskJson
        ]);
    }

    /**
     * @Route("/tasks", methods="POST", name="add_task")
     */
    public function addAction(Request $request) {

        $taskToAdd = new Task();
        $taskName = json_decode($request->getContent(), true)['name'];
        $taskToAdd->setName($taskName);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($taskToAdd);

        $entityManager->flush();

        return $this->json(array('taskAdded' => $taskToAdd));
    }
}