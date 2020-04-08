<?php

namespace App\Controller;

use App\Entity\Leader;
use App\Entity\Parti;
use App\Form\LeaderType;
use App\Form\PartiType;
use App\Repository\LeaderRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class LeaderController extends AbstractController
{
    /**
     * @Route("/leader", name="leader")
     */
    public function index()
    {
        return $this->render('leader/index.html.twig', [
            'controller_name' => 'LeaderController',
        ]);
    }

    /**
     * @Route("/leader/build", name="leaderbuild")
     */
    public function form(Request $request) {
        $leader = new Leader();
        $form = $this->createForm(LeaderType::class,$leader);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($leader);
            $entityManager->flush();
            return $this->redirectToRoute("leaderview", ["id" => $leader->getId()]);
        } else {
            $return = $this->render('leader/form.html.twig', [
                'controller_name' => 'LeaderController',
                'form' => $form->createView()
            ]);
        }
        return $return;
    }



    /**
     * @Route("/leader/edit/{id}", name="leaderedit")
     */
    public function edit(int $id, Request $request, LeaderRepository $repoLeader) {
        $leader = $repoLeader->find($id);
        if($leader) {
            $form = $this->createForm(LeaderType::class,$leader);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($leader);
                $entityManager->flush();
                return $this->redirectToRoute("leaderview", ["id" => $leader->getId()]);
            } else {
                $return = $this->render('leader/form.html.twig', [
                    'controller_name' => 'PartiController',
                    'form' => $form->createView()
                ]);
            }
        }
        return $return;
    }


    /**
     * @Route("/leader/view/{id}", name="leaderview")
     */
    public function view(Int $id, LeaderRepository $repoLeader) {
        $leader = $repoLeader->find($id);
        if($leader) {
            return $this->render('leader/view.html.twig', [
                'leader' => $leader
            ]);
        } else {
            // error redirect on bug page
        }
    }

    /**
     * @Route("/leader/viewall", name="leaderviewall")
     */
    public function viewAll(LeaderRepository $repoLeader) {
        $leaders = $repoLeader->findAll();
        if($leaders) {
            return $this->render('leader/viewall.html.twig', [
                'leaders' => $leaders
            ]);
        } else {
            return $this->forward('App\Controller\LeaderController::form', [

            ]);
        }
    }

}
