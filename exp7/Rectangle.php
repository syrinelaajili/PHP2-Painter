<?php

class Rectangle extends Shape {

    private $width;
    private $height;


    public function __construct($point,$width,$height,$fill,$opacity)
    {
        parent::__construct($point,$fill,$opacity);
        $this->width = $width;
        $this->height = $height;

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


    function draw()
    {

    return "<rect x={$this->location->getX()} y={$this->location->getY()} width={$this->getWidth()} height={$this->getHeight()} fill={$this->getFill()} fill-opacity={$this->getOpacity()} />";

    }
}
