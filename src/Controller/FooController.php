<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FooController extends AbstractController
{
    /**
     * @Route("/foo", name="foo")
     */
    public function index()
    {
        return $this->json([
            'message' => 'Hello world!',
        ]);
    }
}
