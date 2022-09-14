<?php

class Polygon extends Shape {
    private $points;



    public function __construct($points,$fill,$opacity)
    {
        parent::__construct($points,$fill,$opacity);
        $this->points = $points;
    }    


    public function getPoints()
    {
        return $this->points;
    }


    public function setPoints($points)
    {
        $this->points = $points;

      
    }

    function draw($rendu)
    {
        $rendu->drawPolygon($this->points,$this->getFill(),$this->getOpacity());

    }
}