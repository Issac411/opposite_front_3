<?php

namespace App\Controller;

use App\Entity\News;
use App\Form\LeaderType;
use App\Form\NewsType;
use App\Repository\LeaderRepository;
use App\Repository\NewsRepository;
use App\Repository\PartiRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class NewsController extends AbstractController
{
    /**
     * @Route("/news", name="news")
     */
    public function index()
    {
        return $this->render('news/index.html.twig', [
            'controller_name' => 'NewsController',
        ]);
    }

    /**
     * @Route("/news/build", name="newsbuild")
     */
    public function form(Request $request) {
        $news = new News();
        $form = $this->createForm(NewsType::class,$news);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($news);
            $entityManager->flush();
            return $this->redirectToRoute("newsview", ["id" => $news->getId()]);
        } else {
            $return = $this->render('news/form.html.twig', [
                'form' => $form->createView()
            ]);
        }
        return $return;
    }


    /**
     * @Route("/news/edit/{id}", name="newsedit")
     */
    public function edit(int $id, Request $request,  NewsRepository $reponews) {
        $news = $reponews->find($id);
        if($news) {
            $form = $this->createForm(NewsType::class,$news);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($news);
                $entityManager->flush();
                return $this->redirectToRoute("newsview", ["id" => $news->getId()]);
            } else {
                $return = $this->render('news/form.html.twig', [
                    'form' => $form->createView()
                ]);
            }
        }
        return $return;
    }

    /**
     * @Route("/news/view/{id}", name="newsview")
     */
    public function view(Int $id, NewsRepository $reponews) {
        $news = $reponews->find($id);
        if($news) {
            return $this->render('news/view.html.twig', [
                'news' => $news,
            ]);
        } else {
            // error redirect on bug page
        }
    }

    /**
     * @Route("/news/viewall", name="newsviewall")
     */
    public function viewAll(NewsRepository $reponews) {
        $lesNews = $reponews->findAll();
        if($lesNews) {
            return $this->render('news/viewall.html.twig', [
                'lesNews' => $lesNews
            ]);
        } else {
            return $this->forward('App\Controller\NewsController::form', [

            ]);
        }
    }
}
