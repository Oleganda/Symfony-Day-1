<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DayOneController extends AbstractController
{
    #[Route('/', name: 'app_day_one')]
    public function index(): Response
    {
        return $this->render('day_one/index.html.twig', [
            'controller_name' => 'DayOneController',
        ]);
    }

    #[Route('/random/{max}', name: 'random')]
    public function number($max)
    {
        $number = random_int(0, $max);

        return $this->render('day_one/random.html.twig', [
            'randomNumber' => $number
        ]);
    }

    #[Route('/weather/{fahrenheit}', name: 'weather')]
    public function tempConvertor($fahrenheit)
    {
        $celsius = floor(($fahrenheit - 32) * (5 / 9));

        return $this->render('day_one/weather.html.twig', [
            'weatherCelcius' => $celsius
        ]);
    }
}
