<?php

namespace App\Controller;

use App\Entity\Tarifs;
use App\Form\TarifsType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/tarifs")
 */
class TarifsController extends AbstractController
{
    /**
     * @Route("/", name="tarifs_index", methods={"GET"})
     */
    public function index(): Response
    {
        $tarifs = $this->getDoctrine()
            ->getRepository(Tarifs::class)
            ->findAll();

        return $this->render('tarifs/index.html.twig', [
            'tarifs' => $tarifs,
        ]);
    }

    /**
     * @Route("/new", name="tarifs_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $tarif = new Tarifs();
        $form = $this->createForm(TarifsType::class, $tarif);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tarif);
            $entityManager->flush();

            return $this->redirectToRoute('tarifs_index');
        }

        return $this->render('tarifs/new.html.twig', [
            'tarif' => $tarif,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{annee}", name="tarifs_show", methods={"GET"})
     */
    public function show(Tarifs $tarif): Response
    {
        return $this->render('tarifs/show.html.twig', [
            'tarif' => $tarif,
        ]);
    }

    /**
     * @Route("/{annee}/edit", name="tarifs_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Tarifs $tarif): Response
    {
        $form = $this->createForm(TarifsType::class, $tarif);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tarifs_index');
        }

        return $this->render('tarifs/edit.html.twig', [
            'tarif' => $tarif,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{annee}", name="tarifs_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Tarifs $tarif): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tarif->getAnnee(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($tarif);
            $entityManager->flush();
        }

        return $this->redirectToRoute('tarifs_index');
    }
}
