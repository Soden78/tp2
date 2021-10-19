<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{
    /**
     * @Route("/article", name="article")
     */
    public function index(ArticleRepository $repo): Response
    {
        $articles = $repo->findAll();
        return $this->render('article/index.html.twig', [
            'articles' => $articles,
        ]);
    }

    /**
     * Permet d'afficher une seule annonce
     * 
     * @Route("/article/{id}", name="article_id")
     * 
     * @return Response
     * 
     */
       public function show(Article $art){
        return $this->render('article/show.html.twig',[
            'art'=>$art
        ]);
    }

    
}
