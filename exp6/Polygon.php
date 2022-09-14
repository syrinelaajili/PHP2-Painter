<?php

class Polygon {
    private $points;
    private $fill;
    private $opacity;


    public function __construct($points,$fill=0,$opacity=0)
    {
        $this->points = $points;
        $this->fill = $fill;
        $this->opacity = $opacity;
    }    


    public function getPoints()
    {
        return $this->points;
    }


    public function setPoints($points)
    {
        $this->points = $points;

      
    }

  
    public function getFill()
    {
        return $this->fill;
    }

    public function setFill($fill)
    {
        $this->fill = $fill;

    }


    public function getOpacity()
    {
        return $this->opacity;
    }

  
    public function setOpacity($opacity)
    {
        $this->opacity = $opacity;


    }



    function dessinerPolygon()
    {
        $ch=implode(', ',$this->points);
    return "<polygon points='$ch' fill={$this->getFill()} fill-opacity={$this->getOpacity()} />";

    }
}