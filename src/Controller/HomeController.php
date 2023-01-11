<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\VehicleRepository;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(VehicleRepository $vehicleRepository): Response
    {
        return $this->render('home/index.html.twig', [
            'vehicles' => $vehicleRepository->findAll(),
        ]);
    }
}
