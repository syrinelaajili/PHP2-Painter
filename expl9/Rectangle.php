<?php

class Rectangle extends Shape
{

    private $width;
    private $height;


    public function __construct($point, $width, $height, $fill, $opacity)
    {
        parent::__construct($point, $fill, $opacity);
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

    public function draw($rendu)
    {
        $rendu->drawRectangle($this->location, $this->width, $this->height, $this->fill, $this->opacity);
    }
}
