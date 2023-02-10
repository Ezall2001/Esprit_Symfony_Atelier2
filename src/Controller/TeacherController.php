<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeacherController extends AbstractController
{

    #[Route('teacher/goToIndex', name: 'app_teacher_goToIndex')]
    public function goToIndex(): Response
    {
        return $this->redirectToRoute('app_student');
    }

    #[Route('/teacher/{name}', name: 'app_teacher', defaults: ['name' => null])]
    public function showTeacher($name): Response
    {

        return $this->render('teacher.html.twig', ['name' => $name]);
    }
}
