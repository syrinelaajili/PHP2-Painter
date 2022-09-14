<?php

// Liste des classes dans l'ordre des dépendances.

include 'autoload.php';


function createSVG()
{

    $circle = new Circle (new Point(250,200), 150,"#FFF2AB", 0.9);

    $rectangle = new Rectangle (new Point(10,10), 200, 80,"#B22222", 0.9);

    $carre = new Carre(new Point(340,160), 80,80, "#80DDFE", 0.7) ;

    $ellipse = new Ellipse (new Point(530,140), 50, 90, "#2E8B57",0.9);
    
    $polygon = new Polygon ([20,50,20,200,150,200], "#A040A0", 0.7);

    $svgRender = new SvgRender();
    $svgRender->addShape($circle);
    $svgRender->addShape($rectangle);
    $svgRender->addShape($carre);
    $svgRender->addShape($ellipse);
    $svgRender->addShape($polygon);
    $svgRender->run();
    return $svgRender->getResults();

}



    $painter= createSVG();

    include 'index.phtml';