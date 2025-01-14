<?php

namespace App\Entity;

class Circle
{
    private float $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function calculateSurface(): float
    {
        return M_PI * $this->radius * $this->radius;
    }

    public function calculateCircumference(): float
    {
        return 2 * M_PI * $this->radius;
    }

    public function calculateDiameter(): float
    {
        return 2 * $this->radius;
    }

    public function getRadius(): float
    {
        return $this->radius;
    }
}
