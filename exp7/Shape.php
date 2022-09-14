<?php

abstract class Shape {

    protected $location;
    protected $fill;
    protected $opacity;



    public function __construct($location,$fill,$opacity)
    {
        $this->location = $location;
        $this->fill = $fill;
        $this->opacity = $opacity;

       
    }


//La fonction dessiner
    abstract public function draw();
   


 
    public function getLocation()
    {
        return $this->location;
    }


    public function setLocation($location)
    {
        $this->location = $location;

    ;
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
}