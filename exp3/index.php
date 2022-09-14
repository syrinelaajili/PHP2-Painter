<?php
//Affichage php avec fonctions sans paramètres

function createSVG()
{
    $beginSVG='<svg version="1.1" baseProfile="full" width="1000" height="1000" xmlns="http://www.w3.org/2000/svg">';
    $endSVG='</svg>';

    return $beginSVG.circle().rectangle().polygon().carre().ellipse().$endSVG;
}


function circle()
{
    return '<circle cx="250" cy="200" r="150" fill="#FFF2AB"/>';
}

function rectangle()
{
    return '<rect x="10" y="10" width="200" height="80" fill="#B22222" fill-opacity="0.9"/>';
}

function polygon()
{
    return '<polygon points="20,50 20,200 150,200" fill="#A040A0" fill-opacity="0.7"/>';
}

function carre()
{
    return '<rect x="340" y="160" width="80" height="80" fill="#80DDFE" fill-opacity="0.7"/>';
}

function ellipse()
{
    return '<ellipse cx="530" cy="140" rx="50" ry="90" fill="#2E8B57"/>';
}


$painter= createSVG();

    include 'index.phtml';