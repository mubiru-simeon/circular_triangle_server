<?php

namespace App\Controller;

use App\Entity\Circle;
use App\Entity\Triangle;
use App\Service\GeometryCalculator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class GeometryController extends AbstractController
{
    private GeometryCalculator $geometryCalculator;

    public function __construct(GeometryCalculator $geometryCalculator)
    {
        $this->geometryCalculator = $geometryCalculator;
    }

    #[Route('/sum/areas', name: 'sum_areas', methods: ['POST'])]
    public function sumAreas(): JsonResponse
    {
        // Example usage with two circles
        $circle1 = new Circle(2.0);
        $circle2 = new Circle(3.0);

        return $this->json([
            'total_area' => $this->geometryCalculator->sumAreas($circle1, $circle2)
        ]);
    }

    #[Route('/sum/circumferences', name: 'sum_circumferences', methods: ['POST'])]
    public function sumCircumferences(): JsonResponse
    {
        // Example usage with two circles
        $circle1 = new Circle(2.0);
        $circle2 = new Circle(3.0);

        return $this->json([
            'total_circumference' => $this->geometryCalculator->sumCircumferences($circle1, $circle2)
        ]);
    }

    #[Route('/sum/diameters', name: 'sum_diameters', methods: ['POST'])]
    public function sumDiameters(): JsonResponse
    {
        // Example usage with two circles
        $circle1 = new Circle(2.0);
        $circle2 = new Circle(3.0);

        return $this->json([
            'total_diameter' => $this->geometryCalculator->sumDiameters($circle1, $circle2),
            "message" => "Please note that triangles do not have diameters. Soooo yeah."
        ]);
    }
}
