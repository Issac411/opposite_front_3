<?php

namespace App\Controller;

use App\Entity\Nation;
use App\Entity\NationParti;
use App\Form\NationType;
use App\Repository\LeaderRepository;
use App\Repository\NationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class NationController extends AbstractController
{
    /**
     * @Route("/nation", name="nation")
     */
    public function index()
    {
        return $this->render('nation/index.html.twig', [
            'controller_name' => 'NationController',
        ]);
    }

    /**
     * @Route("/nation/build", name="nationBuild")
     */
    public function create(Request $request) {
        $nation = new Nation();
        $form = $this->createForm(NationType::class,$nation);
        $form->handleRequest($request);
        $entityManager = $this->getDoctrine()->getManager();
        if ($form->isSubmitted() && $form->isValid()) {
            $lesPartis = $nation->getNationPartis();
            $nation->removeNationPartis();
            foreach ($lesPartis as $parti) {
                $nationParti = new NationParti();
                $nationParti->setParti($parti);
                $nationParti->setPopularite(1);
                $nation->addNationParti($nationParti);

            }

            $entityManager->persist($nation);
            $entityManager->flush();
            return $this->redirectToRoute("nationview", ["id" => $nation->getId()]);
        } else {
            return $this->render('nation/form.html.twig', [
                'controller_name' => 'NationController',
                'form' => $form->createView()
            ]);
        }

    }

    /**
     * @Route("/nation/view/{id}", name="nationview")
     */
    public function view(Int $id, NationRepository $repoNation) {
        $nation = $repoNation->find($id);
        if($nation) {
            return $this->render('nation/view.html.twig', [
                'nation' => $nation
            ]);
        } else {
            return $this->redirectToRoute("nationBuild");
        }
    }

    /**
     * @Route("/nation/viewall", name="nationviewall")
     */
    public function viewAll(NationRepository $repoNation) {
        $nations = $repoNation->findAll();
        if($nations) {
            return $this->render('nation/viewAll.html.twig', [
                'nations' => $nations
            ]);
        } else {
            return $this->redirectToRoute("nationBuild");
        }
    }
}
