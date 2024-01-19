<?php

namespace App\Controller;

use App\Entity\Country;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/country')]
class CountryController extends AbstractController
{
    #[Route('/', name: 'app_country')]
    public function index(): Response
    {
        return $this->render('country/index.html.twig');
    }

    #[Route('/{name}', name: 'app_country_name')]
    public function statPays(Country $country): Response
    {

        return $this->render('country/statPays.html.twig', [
            'country' => $country,
        ]);
    }
}
