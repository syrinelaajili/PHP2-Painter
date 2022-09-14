<?php

class Circle extends Ellipse {


    
    public function __construct($point,$rayon,$fill, $opacity)
    {
        parent::__construct($point,$rayon,$rayon,$fill,$opacity);

    }

    function dessinerCircle()
    {

    return "<circle cx={$this->location->getX()} cy={$this->location->getY()} r={$this->getRayonX()} fill={$this->getFill()} opacity={$this->getOpacity()} />";
    
    }



} 