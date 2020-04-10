<?php

namespace App\Controller;

use App\Entity\Politique;
use App\Form\PolitiqueType;
use App\Repository\LeaderRepository;
use App\Repository\PartiRepository;
use App\Repository\PolitiqueRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PolitiqueController extends AbstractController
{
    /**
     * @Route("/politique", name="politique")
     */
    public function index()
    {
        return $this->render('politique/index.html.twig', [
            'controller_name' => 'PolitiqueController',
        ]);
    }

    /**
     * @Route("/politique/build", name="politiquebuild")
     */
    public function create(Request $request) {
        $politique = new Politique();
        $form = $this->createForm(PolitiqueType::class,$politique);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($politique);
            $entityManager->flush();
            return $this->redirectToRoute("politiqueview", ["id" => $politique->getId()]);
        } else {
            $return = $this->render('politique/form.html.twig', [
                'controller_name' => 'PolitiqueController',
                'form' => $form->createView()
            ]);
        }
        return $return;
    }

    /**
     * @Route("/politique/remove/{id}", name="politiqueremove")
     */
    public function delete(Int $id, PolitiqueRepository $repoPolitique) {
        $politique = $repoPolitique->find($id);
        if($politique) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($politique);
            $entityManager->flush();
        }
        return $this->redirectToRoute("politiqueviewall");
    }

    /**
     * @Route("/politique/edit/{id}", name="politiqueedit")
     */
    public function edit(int $id, Request $request) {
        $politique = new Politique();
        $politique = $this->getDoctrine()->getRepository(Politique::class)->find($id);
        $form = $this->createForm(PolitiqueType::class,$politique);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($politique);
            $entityManager->flush();
            return $this->redirectToRoute("politiqueview", ["id" => $politique->getId()]);
        } else {
            $return = $this->render('politique/form.html.twig', [
                'controller_name' => 'PolitiqueController',
                'politique' => $politique,
                'form' => $form->createView()
            ]);
        }
        return $return;
    }

    /**
     * @Route("/politique/view/{id}", name="politiqueview")
     */
    public function view($id,PolitiqueRepository $repoPolitique, PartiRepository $repoPartis, LeaderRepository $repoLeader) {
        $politique = $repoPolitique->find($id);
        if($politique) {
            $partis = $repoPartis->findBy(array('Politique' => $politique->getId()));
            return $this->render('politique/view.html.twig', [
                'politique' => $politique,
                'partis' => $partis
            ]);
        } else {
            return $this->redirectToRoute("politiqueviewAll");
        }
    }

    /**
     * @Route("/politique/viewAll", name="politiqueviewAll")
     * @Route("/", name="index")
     */
    public function viewAll(PolitiqueRepository $repoPolitique) {
        $politiques = $repoPolitique->findAll();
        if($politiques) {
            return $this->render('politique/viewAll.html.twig', [
                'politiques' => $politiques
            ]);
        } else {    // La base de données est peut être vide
            return $this->redirectToRoute("politiquebuild");
        }
    }
}
