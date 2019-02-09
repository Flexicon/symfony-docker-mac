<?php

namespace App\Controller;

use App\Entity\Todo;
use App\Repository\TodoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

class TodoController extends AbstractController
{
    /**
     * @Route("/todo", name="todo_list")
     */
    public function index()
    {
        $todoList = $this->getDoctrine()
            ->getRepository(Todo::class)
            ->findAll();

        return $this->json($todoList);
    }

    /**
     * @param int $id The ID passed in the route
     * @param TodoRepository $repository The todos repository
     *
     * @Route("/todo/{id}", name="todo_show")
     * @throws NotFoundHttpException
     *
     * @return JsonResponse
     */
    public function show(int $id, TodoRepository $repository)
    {
        $todo = $repository->find($id);

        if (!$todo) {
            throw $this->createNotFoundException('Todo does not exist');
        }

        return $this->json($todo);
    }
}
