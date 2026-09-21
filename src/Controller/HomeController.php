<?php

namespace App\Controller;

use App\Entity\Question; // Import your entity class
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        // Example: Fetching questions from a repository
        $questions = $this->getDoctrine()->getRepository(Question::class)->findAll();

        return $this->render('home.html.twig', [
            'questions' => $questions, // Pass fetched questions to the template
        ]);
    }
}
