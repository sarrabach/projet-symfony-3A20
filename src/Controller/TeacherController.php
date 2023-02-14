<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeacherController extends AbstractController
{
    #[Route('/teacher/{name}', name: 'app_teacher')]
    public function showTeacher($name): Response
    {
       /* return $this->render('showTeacher.html.twig', [
            'controller_name' => 'TeacherController','name' => $name
        ]);*/

        return $this->redirect('/index');
}}
