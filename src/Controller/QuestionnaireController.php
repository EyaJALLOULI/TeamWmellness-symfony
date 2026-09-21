<?php

namespace App\Controller;

use App\Repository\QuestionRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionnaireController extends AbstractController
{
    #[Route('/questions', name: 'questionnaire')]
    public function list(QuestionRepository $questionRepository, PaginatorInterface $paginator, Request $request): Response
    {
        $queryBuilder = $questionRepository->createQueryBuilder('q');

        $pagination = $paginator->paginate(
            $queryBuilder,
            $request->query->getInt('page', 1),
            1 // Nombre d'éléments par page
        );

        return $this->render('home/list.html.twig', [
            'pagination' => $pagination,
        ]);
    }
}
