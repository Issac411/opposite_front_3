<?php

namespace App\Controller;

use App\Entity\Effet;
use App\Form\EffetType;
use App\Repository\EffetRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class EffetController extends AbstractController
{
    /**
     * @Route("/effet", name="effet")
     */
    public function index()
    {
        return $this->render('effet/index.html.twig', [
            'controller_name' => 'EffetController',
        ]);
    }

    /**
     * @Route("/effet/build", name="effetbuild")
     */
    public function create(Request $request) {
        $effet = new Effet();
        $form = $this->createForm(EffetType::class,$effet);
        $form->handleRequest($request);

        dump($effet);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($effet);
            $entityManager->flush();
            return $this->redirectToRoute("effetview", ["id" => $effet->getId()]);
        } else {
            $return = $this->render('effet/form.html.twig', [
                'form' => $form->createView()
            ]);
        }
        return $return;
    }

    /**
     * @Route("/effet/viewAll", name="effetviewall")
     */
    public function viewAll(EffetRepository $effetRepository) {
        $effet = $effetRepository->findAll();
        if($effet) {
            return $this->render('effet/viewAll.html.twig', [
                'effets' => $effet
            ]);
        } else {    // La base de données est peut être vide
            return $this->redirectToRoute("effetbuild");
        }
    }

    /**
     * @Route("/effet/view/{id}", name="effetview")
     */
    public function view(Int $id, EffetRepository $repoEffet) {
        $effet = $repoEffet->find($id);
        if($effet) {
            return $this->render('effet/view.html.twig', [
                'effet' => $effet
            ]);
        } else {
            // error redirect on bug page
        }
    }

    /**
     * @Route("/effet/edit/{id}", name="effetedit")
     */
    public function edit(int $id, Request $request, EffetRepository $repoEffet) {
        $effet = $repoEffet->find($id);
        if($effet) {
            $form = $this->createForm(EffetType::class, $effet);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $entityManager = $this->getDoctrine()->getManager();
                dump($effet);
                $entityManager->persist($effet);
                $entityManager->flush();
                return $this->redirectToRoute("effetview", ["id" => $effet->getId()]);
            } else {
                $return = $this->render('effet/form.html.twig', [
                    'form' => $form->createView()
                ]);
            }
        }
        return $return;
    }


}
