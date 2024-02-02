<?php

namespace App\Controller;

use App\Form\SocietyFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SearchController extends AbstractController
{
    #[Route('/', name: 'app_search')]
    public function index(Request $request, HttpClientInterface $httpClientInterface ): Response
    {
        $results = null;
        $form = $this->createForm(SocietyFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            dd($form->getData());
        }


        return $this->render('search/index.html.twig', [
            'form'->$form,
            
        ]);
    }
}
