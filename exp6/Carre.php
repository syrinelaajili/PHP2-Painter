<?php

class Carre {
    private $point;
    private $cote;
    private $fill;
    private $opacity;
   
    public function __construct($point=0,$cote=0,$fill=0,$opacity=0)
    {
        $this->point = $point;
        $this->cote = $cote;
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


    public function getCote()
    {
        return $this->cote;
    }

    public function setCote($cote)
    {
        $this->cote = $cote;

       
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


    function dessinerCarre()
    {

    return "<rect x={$this->point->getX()} y={$this->point->getY()}  width={$this->getCote()} height={$this->getCote()} fill={$this->getFill()} fill-opacity={$this->getOpacity()} />";

    }
}