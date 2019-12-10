<?php
namespace App\Controller;


use App\Repository\MedecinsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class HomeController extends AbstractController
{
    /**
     * @var Environment
     *
     */
    private $twig;

    public function __construct(Environment  $twig)
    {
        $this->twig = $twig ;
    }

    /**
     * @Route("/",name="home")
     * @param MedecinsRepository $repository
     * @return Response
     */

    public function index(MedecinsRepository $repository): Response
    {
        $medecins = $repository->findAll();
        return $this->render('pages/home.html.twig', compact('medecins'));
    }




}