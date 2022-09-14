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

    function draw()
    {
        $ch=implode(', ',$this->points);
    return "<polygon points='$ch' fill={$this->getFill()} fill-opacity={$this->getOpacity()} />";

    }
}