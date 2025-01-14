<?php

namespace App\Entity;

class Triangle
{
    private float $a;
    private float $b;
    private float $c;

    public function __construct(float $a, float $b, float $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function calculateSurface(): float
    {
        // Using Heron's formula
        $s = ($this->a + $this->b + $this->c) / 2;
        return sqrt($s * ($s - $this->a) * ($s - $this->b) * ($s - $this->c));
    }

    public function calculateCircumference(): float
    {
        return $this->a + $this->b + $this->c;
    }

    public function calculateDiameter(): float
    {
        // For triangles, return the longest side as a diameter equivalent
        return max($this->a, $this->b, $this->c);
    }

    public function getA(): float
    {
        return $this->a;
    }

    public function getB(): float
    {
        return $this->b;
    }

    public function getC(): float
    {
        return $this->c;
    }
}
