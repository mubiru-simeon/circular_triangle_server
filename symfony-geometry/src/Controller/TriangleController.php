<?php

namespace App\Controller;

use App\Entity\Triangle;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class TriangleController extends AbstractController
{
    #[Route('/triangle/{a}/{b}/{c}', name: 'triangle_calculate', methods: ['GET'])]
    public function calculate(float $a, float $b, float $c): JsonResponse
    {
        $triangle = new Triangle($a, $b, $c);

        return $this->json([
            'type' => 'triangle',
            'a' => $a,
            'b' => $b,
            'c' => $c,
            'surface' => $triangle->calculateSurface(),
            'circumference' => $triangle->calculateCircumference()
        ]);
    }
}
