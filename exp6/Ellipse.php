<?php

class Ellipse {
    
    private $point;
    private $rayonX;
    private $rayonY;
    private $fill;
    private $opacity;


    public function __construct($point=0,$rayonX=0,$rayonY=0,$fill=0,$opacity=0)
    {
        $this->point = $point;
        $this->rayonX = $rayonX;
        $this->rayonY = $rayonY;
        $this->fill = $fill;
        $this->opacity = $opacity;
    }
    
    public function getPoint()
    {
        return $this->point;
    }

    
    public function setPoint($point)
    {
        $this->point = $point;

    
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


    function dessinerEllipse()
    {

    return "<ellipse cx={$this->point->getX()} cy={$this->point->getY()} rx={$this->getRayonX()} ry={$this->getRayonY()} fill={$this->getFill()} fill-opacity={$this->getOpacity()} />";
    
    }

}