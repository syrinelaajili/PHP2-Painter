<?php

// Liste des classes dans l'ordre des dépendances.
include 'Point.php';
include 'Circle.php';
include 'Rectangle.php';
include 'Polygon.php';
include 'Carre.php';
include 'Ellipse.php';


//Création et utilisation de la classe point
// function circle($p,$r,$fill)
// {
//     return "<circle cx={$p->getX()} cy={$p->getY()} r=$r fill=$fill fill-opacity=$opacity />";
// }

// function rectangle($p,$width,$height,$fill,$opacity)
// {
//     return "<rect x={$p->getX()} y={$p->getY()} width=$width height=$height fill=$fill fill-opacity=$opacity />";
// }

// function polygon($points,$fill,$opacity)
// {
//     return "<polygon points='$points' fill=$fill fill-opacity=$opacity />";
// }

// function carre($p,$width,$height,$fill,$opacity)
// {
//     return "<rect x={$p->getX()} y={$p->getY()}  width=$width height=$height fill=$fill fill-opacity=$opacity />";
// }

// function ellipse($p,$rx,$ry,$fill,$opacity)
// {
//     return "<ellipse cx={$p->getX()} cy={$p->getY()} rx=$rx ry=$ry fill=$fill fill-opacity=$opacity />";
// }

function createSVG()
{
    $beginSVG='<svg version="1.1" baseProfile="full" width="1000" height="1000" xmlns="http://www.w3.org/2000/svg">';
    $endSVG='</svg>';


    $circle = new Circle (new Point(250,200), 150,"#FFF2AB", 0.9);

    $rectangle = new Rectangle (new Point(10,10), 200, 80,"#B22222", 0.9);

    $carre = new Carre(new Point(340,160), 80, "#80DDFE", 0.7) ;

    $ellipse = new Ellipse (new Point(530,140), 50, 90, "#2E8B57",0.9);
    
    $polygon = new Polygon ([20,50,20,200,150,200], "#A040A0", 0.7);


    $result=[];
    array_push($result,$circle->dessinerCircle());
    array_push($result,$rectangle->dessinerRectangle());
    array_push($result,$polygon->dessinerPolygon());
    array_push($result,$carre->dessinerCarre());
    array_push($result,$ellipse->dessinerEllipse());

    return $beginSVG.implode(' ',$result).$endSVG;
}


    $painter= createSVG();

    include 'index.phtml';