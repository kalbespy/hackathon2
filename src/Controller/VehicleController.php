<?php

namespace App\Controller;

use App\Entity\Movie;
use App\Entity\Vehicle;
use App\Form\VehicleType;
use App\Repository\MovieRepository;
use App\Repository\VehicleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/vehicle')]
class VehicleController extends AbstractController
{
    #[Route('/', name: 'app_vehicle_index', methods: ['GET', 'POST'])]
    public function index(Request $request, MovieRepository $movieRepository, VehicleRepository $vehicleRepository): Response
    {
        if ($request->isMethod('POST')) {
            $searchCar = $request->get('searchCar');
            $searchMovie = $request->get('searchMovie');

            if ($searchCar) {
                $vehicles = $vehicleRepository->findLikeName($searchCar);
            }

            if ($searchMovie) {
                $vehicles = $vehicleRepository->findLikeMovieName($searchMovie);
            }
        } else {
            $vehicles = $vehicleRepository->findAll();
        }

        return $this->render('vehicle/index.html.twig', [
            'vehicles' => $vehicles,
        ]);
    }

    #[Route('/new', name: 'app_vehicle_new', methods: ['GET', 'POST'])]
    public function new(Request $request, VehicleRepository $vehicleRepository): Response
    {
        $vehicle = new Vehicle();
        $form = $this->createForm(VehicleType::class, $vehicle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $vehicleRepository->save($vehicle, true);

            $this->addFlash('success', 'Car added !');

            return $this->redirectToRoute('app_vehicle_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('vehicle/new.html.twig', [
            'vehicle' => $vehicle,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_vehicle_show', methods: ['GET'])]
    public function show(Vehicle $vehicle): Response
    {
        return $this->render('vehicle/show.html.twig', [
            'vehicle' => $vehicle,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_vehicle_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Vehicle $vehicle, VehicleRepository $vehicleRepository): Response
    {
        $form = $this->createForm(VehicleType::class, $vehicle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $vehicleRepository->save($vehicle, true);

            $this->addFlash('success', 'Changes made !');

            return $this->redirectToRoute('app_vehicle_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('vehicle/edit.html.twig', [
            'vehicle' => $vehicle,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/book', name: 'app_vehicle_book', methods: ['GET', 'POST'])]
    public function book(Vehicle $vehicle, VehicleRepository $vehicleRepository)
    {
        $vehicle->setAvailability(false);

        $vehicleRepository->save($vehicle, true);

        $this->addFlash('success', 'Your reservation has been processed. Thanks !');

        return $this->redirectToRoute('app_vehicle_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}', name: 'app_vehicle_delete', methods: ['POST'])]
    public function delete(Request $request, Vehicle $vehicle, VehicleRepository $vehicleRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $vehicle->getId(), $request->request->get('_token'))) {
            $vehicleRepository->remove($vehicle, true);
            $this->addFlash('danger', 'Car deleted !');
        }

        return $this->redirectToRoute('app_vehicle_index', [], Response::HTTP_SEE_OTHER);
    }
}
