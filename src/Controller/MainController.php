<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route("/", name: "index")]
    public function index(): Response
    {
        return $this->render('index.html.twig');
    }

    #[Route("/report", name: "report")]
    public function report(): Response
    {
        return $this->render('report.html.twig');
    }

    #[Route("/about", name: "about")]
    public function about(): Response
    {
        return $this->render('about.html.twig');
    }

    #[Route("/lucky", name: "lucky")]
    public function number(): Response
    {
        $number = random_int(0, 100);

        $data = [
            'number' => $number
        ];

        return $this->render('lucky.html.twig', $data);
    }

    // #[Route("/api/quote", name: "quote")]
    // public function jsonNumber(): Response
    // {
    //     $quotes = array("When life throws you a rainy day, play in the puddles",
    //     "Whatever you do, always give 100%. Unless you are donating blood.",
    //     "If you think you are too small to make a difference, try sleeping
    //     with a mosquito.");
    //     $number = random_int(0, count($quotes)-1);
    //     $date = date('d-m-Y');
    //     $timestamp = time();

    //     $data = [
    //         'quote' => $quotes[$number],
    //         'date' => $date,
    //         'timestamp' => $timestamp,
    //     ];

    //     $response = new JsonResponse($data);
    //     $response->setEncodingOptions(
    //         $response->getEncodingOptions() | JSON_PRETTY_PRINT
    //     );
    //     return $response;
    // }
}
