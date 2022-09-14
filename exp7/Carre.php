<?php

class Carre extends Rectangle {

   
    public function __construct($point,$width,$height,$fill,$opacity)
    {
        parent::__construct($point,$width,$height,$fill,$opacity);

    
    }

    function dessinerCarre()
    {

    return "<rect x={$this->location->getX()} y={$this->location->getY()}  width={$this->getWidth()} height={$this->getHeight()} fill={$this->getFill()} fill-opacity={$this->getOpacity()} />";

    }
}