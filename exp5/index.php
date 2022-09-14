<?php
//Affichage php avec tableau
function circle($cx,$cy,$r,$fill)
{
    return "<circle cx=$cx cy=$cy r=$r fill=$fill />";
}

function rectangle($x,$y,$width,$height,$fill,$opacity)
{
    return "<rect x=$x y=$y width=$width height=$height fill=$fill fill-opacity=$opacity />";
}

function polygon($points,$fill,$opacity)
{
    return "<polygon points='$points' fill=$fill fill-opacity=$opacity />";
}

function carre($x,$y,$width,$height,$fill,$opacity)
{
    return "<rect x=$x y=$y width=$width height=$height fill=$fill fill-opacity=$opacity />";
}

function ellipse($cx,$cy,$rx,$ry,$fill)
{
    return "<ellipse cx=$cx cy=$cy rx=$rx ry=$ry fill=$fill />";
}

function createSVG()
{
    $beginSVG='<svg version="1.1" baseProfile="full" width="1000" height="1000" xmlns="http://www.w3.org/2000/svg">';
    $endSVG='</svg>';

    $result=[];
    array_push($result,circle(250,200,150,"#FFF2AB"));
    array_push($result,rectangle(10,10,200,80,"#B22222",0.9));
    array_push($result,polygon(implode(', ',[20,50,20,200,150,200]),"#A040A0",0.7));
    array_push($result,carre(340,160,80,80,"#80DDFE",0.7));
    array_push($result,ellipse(530,140,50,90,"#2E8B57"));

    return $beginSVG.implode(' ',$result).$endSVG;
}


$painter= createSVG();

    include 'index.phtml';