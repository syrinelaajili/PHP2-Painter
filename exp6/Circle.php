<?php

class Circle {
    private $point;
    private $rayon;
    private $fill;
    private $opacity;

    
    public function __construct($point=0,$rayon=0,$fill=0, $opacity=0)
    {
        $this->point = $point;
        $this->rayon = $rayon;
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

    
    public function getRayon()
    {
        return $this->rayon;
    }

    
    public function setRayon($rayon)
    {
        $this->rayon = $rayon;

   
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

    function dessinerCircle()
    {

    return "<circle cx={$this->point->getX()} cy={$this->point->getX()} r={$this->getRayon()} fill={$this->getFill()} opacity={$this->getOpacity()} />";
    
    }



} 