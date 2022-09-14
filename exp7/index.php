<?php

// Liste des classes dans l'ordre des dépendances.
include 'Point.php';
include 'Shape.php';
include 'Ellipse.php';
include 'Circle.php';
include 'Rectangle.php';
include 'Carre.php';
include 'Polygon.php';




function createSVG()
{
    $beginSVG='<svg version="1.1" baseProfile="full" width="1000" height="1000" xmlns="http://www.w3.org/2000/svg">';
    $endSVG='</svg>';


    $circle = new Circle (new Point(250,200), 150,"#FFF2AB", 0.9);

    $rectangle = new Rectangle (new Point(10,10), 200, 80,"#B22222", 0.9);

    $carre = new Carre(new Point(340,160), 80,80, "#80DDFE", 0.7) ;

    $ellipse = new Ellipse (new Point(530,140), 50, 90, "#2E8B57",0.9);
    
    $polygon = new Polygon ([20,50,20,200,150,200], "#A040A0", 0.7);


    $result=[];
    array_push($result,$circle->draw());
    array_push($result,$rectangle->draw());
    array_push($result,$polygon->draw());
    array_push($result,$carre->draw());
    array_push($result,$ellipse->draw());

    return $beginSVG.implode(' ',$result).$endSVG;
}


    $painter= createSVG();

    include 'index.phtml';