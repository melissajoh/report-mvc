<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Json controller for quote
 */
class JsonController
{
    #[Route("/api/quote", name: "quote")]
    public function jsonNumber(): Response
    {
        $quotes = array("When life throws you a rainy day, play in the puddles.",
        "Whatever you do, always give 100%. Unless you are donating blood.",
        "If you think you are too small to make a difference, try sleeping with a mosquito in the room.");
        $number = random_int(0, count($quotes)-1);
        $date = date('d-m-Y');
        $timestamp = time();

        $data = [
            'quote' => $quotes[$number],
            'date' => $date,
            'timestamp' => $timestamp,
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }
}
