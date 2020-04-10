<?php

namespace App\Controller;

use App\Dal\Nation_Parti_factory;
use App\Entity\Nation;
use App\Entity\NationParti;
use App\Form\NationType;
use App\Form\NationTypeEditMode;
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
        $form = $this->createForm(NationType::class,$nation,array('label' => 0));
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
     * @Route("/nation/edit/{id}", name="nationedit")
     */
    public function edit(int $id, Request $request, NationRepository $repoNation) {
        $nation = $repoNation->find($id);
        $nationSaved = $nation;
        if($nation) {
            $form = $this->createForm(NationType::class,$nation, array('label'=>$nation->getLeader()->getId()));
            $nationArray = $request->request->get('nation');
            if(!isset($nationArray['Leader'])) {
                $nationArray['Leader'] = $nationSaved->getLeader();
                $request->request->set('nation',$nationArray);
            }
            $form->handleRequest($request);
            if ($form->isSubmitted()) {
                // On transforme les objets "Parti" en objets Nation_Parti
                $lesPartis = $nation->getNationPartis();
                $nation->removeNationPartis();
                foreach ($lesPartis as $parti) {
                    $nationParti = new NationParti();
                    $nationParti->setParti($parti);
                    $nationParti->setPopularite(1);
                    $nation->addNationParti($nationParti);

                }
                //Nettoyage des anciennes relations NM
                $nation_partiFactory = new Nation_Parti_factory($this->getDoctrine()->getConnection());
                $nation_partiFactory->clearNationParti($nation);
                //Sauvegarde des nouvelles relations
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($nation);
                $entityManager->flush();
                return $this->redirectToRoute("nationview", ["id" => $nation->getId()]);
            } else {
                $return = $this->render('nation/form.html.twig', [
                    'form' => $form->createView()
                ]);
            }
        }
        return $return;
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
     * @Route("/nation/remove/{id}", name="nationremove")
     */
    public function delete(Int $id, NationRepository $repoNation) {
        $nation = $repoNation->find($id);
        if($nation) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($nation);
            $entityManager->flush();
        }
        return $this->redirectToRoute("nationviewall");
    }

    /**
     * @Route("/nation/viewall", name="nationviewall")
     */
    public function viewAll(NationRepository $repoNation) {
        $nations = $repoNation->findAll();
        if($nations) {
            return $this->render('nation/viewall.html.twig', [
                'nations' => $nations
            ]);
        } else {
            return $this->redirectToRoute("nationBuild");
        }
    }
}
