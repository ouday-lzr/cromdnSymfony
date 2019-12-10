<?php

namespace App\Controller;


use App\Entity\Medecins;
use App\Form\MedecinsType;
use App\Repository\MedecinsRepository;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
/**
* @Route("/medecins")
*/
class MedecinsController extends AbstractController
{

    /**
     * @Route("/",name="medecins.index")
     * @return Response
     */

    public function index(): Response
    {
        $medecins = $this->getDoctrine()
            ->getRepository(Medecins::class)
            ->findAll();

        return $this->render('medecins/index.html.twig', [
            'medecins' => $medecins,
        ]);
    }

    /**
     * @Route("medecins/edit/{id}", name="medecins.edit")
     * @param Medecins $medecins
     * @param Request $request
     * @return Response
     */
    public function update( Medecins $medecins, Request $request): Response
    {
        $form = $this->createForm(MedecinsType::class, $medecins);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $this->addFlash('success','change successfully');
            return $this->redirectToRoute('/');
        }

        return $this->render('../medecins/edit.html.twig', [
            'medecins' => $medecins,
            'form' => $form->createView()
        ]);
    }

}
