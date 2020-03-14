<?php

namespace App\Controller;

use App\Entity\Parti;
use App\Entity\Politique;
use App\Form\PartiType;
use App\Repository\LeaderRepository;
use App\Repository\PartiRepository;
use App\Repository\PolitiqueRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PartiController extends AbstractController
{
    /**
     * @Route("/parti", name="parti")
     */
    public function index()
    {
        return $this->render('parti/index.html.twig', [
            'controller_name' => 'PartiController',
        ]);
    }

    /**
     * @Route("/parti/build", name="partibuild")
     */
    public function form(Request $request) {
        $parti = new Parti();
        $form = $this->createForm(PartiType::class,$parti);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($parti);
            $entityManager->flush();
            return $this->redirectToRoute("partiview", ["id" => $parti->getId()]);
        } else {
            $return = $this->render('parti/form.html.twig', [
                'controller_name' => 'PartiController',
                'form' => $form->createView()
            ]);
        }
        return $return;
    }

    /**
     * @Route("/parti/view/{id}", name="partiview")
     */
    public function view(Int $id, PartiRepository $repoPartis) {
        $parti = $repoPartis->find($id);
        if($parti) {
            return $this->render('parti/view.html.twig', [
                'politique' => $parti->getPolitique(),
                'parti' => $parti,
                'leaders' => $parti->getLeaders()
            ]);
        } else {
            // error redirect on bug page
        }
    }

    /**
     * @Route("/parti/viewall", name="partiviewall")
     */
    public function viewAll(PolitiqueRepository $repoPolitique) {
        $politiques = $repoPolitique->findAll();
        if($politiques) {
            return $this->render('parti/viewall.html.twig', [
                'politiques' => $politiques
            ]);
        } else {
            return $this->redirectToRoute("partibuild");
        }
    }

    /**
     * @Route("/parti/edit/{id}", name="partiedit")
     */
    public function edit(int $id, Request $request, PartiRepository $repoPartis) {
        $parti = $repoPartis->find($id);
        if($parti) {
            $form = $this->createForm(PartiType::class, $parti);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($parti);
                $entityManager->flush();
                return $this->redirectToRoute("partiview", ["id" => $parti->getId()]);
            } else {
                $return = $this->render('parti/form.html.twig', [
                    'controller_name' => 'PartiController',
                    'form' => $form->createView()
                ]);
            }
        }
        return $return;
    }

}
