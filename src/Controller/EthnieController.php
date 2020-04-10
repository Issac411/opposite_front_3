<?php

namespace App\Controller;

use App\Entity\Ethnie;
use App\Form\EthnieType;
use App\Repository\EthnieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class EthnieController extends AbstractController
{
    /**
     * @Route("/ethnie", name="ethnie")
     */
    public function index()
    {
        return $this->render('ethnie/index.html.twig', [
            'controller_name' => 'EthnieController',
        ]);
    }

    /**
     * @Route("/ethnie/build", name="ethniebuild")
     */
    public function form(Request $request) {
        $ethnie = new Ethnie();
        $form = $this->createForm(EthnieType::class,$ethnie);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($ethnie);
            $entityManager->flush();
            return $this->redirectToRoute("ethnieview", ["id" => $ethnie->getId()]);
        } else {
            $return = $this->render('ethnie/form.html.twig', [
                'form' => $form->createView()
            ]);
        }
        return $return;
    }

    /**
     * @Route("/ethnie/remove/{id}", name="ethnieremove")
     */
    public function delete(Int $id, EthnieRepository $repoEthnie) {
        $ethnie = $repoEthnie->find($id);
        if($ethnie) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($ethnie);
            $entityManager->flush();
        }
        return $this->redirectToRoute("ethnieviewall");
    }

    /**
     * @Route("/ethnie/view/{id}", name="ethnieview")
     */
    public function view(Int $id, EthnieRepository $repoEthnie) {
        $ethnie = $repoEthnie->find($id);
        if($ethnie) {
            return $this->render('ethnie/view.html.twig', [
                'ethnie' => $ethnie
            ]);
        } else {
            // error redirect on bug page
        }
    }
}
