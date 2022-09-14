<?php

class Ellipse extends Shape {
    
    private $rayonX;
    private $rayonY;


    public function __construct($point,$rayonX,$rayonY,$fill,$opacity)
    {
        parent::__construct($point,$fill,$opacity);
        $this->rayonX = $rayonX;
        $this->rayonY = $rayonY;

    }

    
    public function getRayonX()
    {
        return $this->rayonX;
    }

    
    public function setRayonX($rayonX)
    {
        $this->rayonX = $rayonX;


    }

    
    public function getRayonY()
    {
        return $this->rayonY;
    }

    
    public function setRayonY($rayonY)
    {
        $this->rayonY = $rayonY;


    }
    public function draw($rendu)
    {
        $rendu->drawEllipse($this->location, $this->rayonX, $this->rayonY, $this->fill, $this->opacity);
    }

}