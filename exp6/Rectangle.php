<?php

class Rectangle {
    private $point;
    private $width;
    private $height;
    private $fill;
    private $opacity;

    public function __construct($point=0,$width=0,$height=0,$fill=0,$opacity=0)
    {
        $this->point = $point;
        $this->width = $width;
        $this->height = $height;
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


    public function getWidth()
    {
        return $this->width;
    }

   
    public function setWidth($width)
    {
        $this->width = $width;

       
    }

  
    public function getHeight()
    {
        return $this->height;
    }

   
    public function setHeight($height)
    {
        $this->height = $height;

        
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

    function dessinerRectangle()
    {

    return "<rect x={$this->point->getX()} y={$this->point->getY()} width={$this->getWidth()} height={$this->getHeight()} fill={$this->getFill()} fill-opacity={$this->getOpacity()} />";

    }
}
