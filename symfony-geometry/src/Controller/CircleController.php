<?php

namespace App\Controller;

use App\Entity\Circle;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CircleController extends AbstractController
{
    #[Route('/circle/{radius}', name: 'circle_calculate', methods: ['GET'])]
    public function calculate(float $radius): JsonResponse
    {
        $circle = new Circle($radius);

        return $this->json([
            'type' => 'circle',
            'radius' => $radius,
            'surface' => $circle->calculateSurface(),
            'circumference' => $circle->calculateCircumference()
        ]);
    }
}
