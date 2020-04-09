<?php

namespace App\Controller;

use App\Entity\TraitElement;
use App\Form\TraitElementType;
use App\Repository\TraitElementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TraitElementController extends AbstractController
{
    /**
     * @Route("/trait/element", name="trait_element")
     */
    public function index()
    {
        return $this->render('trait_element/index.html.twig', [
            'controller_name' => 'TraitElementController',
        ]);
    }

    /**
     * @Route("/trait/build", name="traitbuild")
     */
    public function create(Request $request) {
        $trait = new TraitElement();
        $form = $this->createForm(TraitElementType::class,$trait);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($trait);
            $entityManager->flush();
            return $this->redirectToRoute("traitview", ["id" => $trait->getId()]);
        } else {
            $return = $this->render('trait_element/form.html.twig', [
                'form' => $form->createView()
            ]);
        }
        return $return;
    }


    /**
     * @Route("/trait/view/{id}", name="traitview")
     */
    public function view($id,TraitElementRepository $repotraits ) {
        $trait = $repotraits->find($id);
        if($trait) {
            return $this->render('trait_element/view.html.twig', [
                'trait' => $trait
            ]);
        } else {
            return $this->redirectToRoute("traitviewAll");
        }
    }

    /**
     * @Route("/trait/viewAll", name="traitviewall")
     */
    public function viewAll(TraitElementRepository $repotraits) {
        $traits = $repotraits->findAll();
        if($traits) {
            return $this->render('trait_element/viewAll.html.twig', [
                'traits' => $traits
            ]);
        } else {    // La base de données est peut être vide
            return $this->redirectToRoute("traitbuild");
        }
    }

    /**
     * @Route("/trait/edit/{id}", name="traitedit")
     */
    public function edit(int $id, Request $request, TraitElementRepository $repoTraits) {
        $trait = $repoTraits->find($id);
        if($trait) {
            $form = $this->createForm(TraitElementType::class, $trait);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($trait);
                $entityManager->flush();
                return $this->redirectToRoute("traitview", ["id" => $trait->getId()]);
            } else {
                $return = $this->render('trait_element/form.html.twig', [
                    'form' => $form->createView()
                ]);
            }
        }
        return $return;
    }
}
