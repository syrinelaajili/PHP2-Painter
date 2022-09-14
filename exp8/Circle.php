<?php

class Circle extends Ellipse {


    
    public function __construct($point,$rayon,$fill, $opacity)
    {
        parent::__construct($point,$rayon,$rayon,$fill,$opacity);

    }


} 