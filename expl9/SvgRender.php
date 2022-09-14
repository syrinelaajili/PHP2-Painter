<?php

class SvgRender {
    private $results;
    private $shapes;



    public function __construct()

    {
        $this->results = array();
        $this->shapes =array();



    }



    public function addShape($shape)
    {
        //Ajout d'un objet géométrique au tableau d'objets
        array_push($this->shapes,$shape);
        
    }

    public function run()
    {
        //Boucle sur le tableau d'objets géométriques
        foreach($this->shapes as $shape){

            //Le tableau se dessine avec notre méthode
            $shape->draw($this);
            
        }
    }

    public function getResults()
    {    
        $beginSVG='<svg version="1.1" baseProfile="full" width="1000" height="1000" xmlns="http://www.w3.org/2000/svg">';
        $endSVG='</svg>';
        return $beginSVG.implode('',$this->results).$endSVG;
        
    }

    public function drawRectangle($p,$width,$height,$fill,$opacity)
    {
        array_push($this->results,"<rect x={$p->getX()} y={$p->getY()} width=$width height=$height fill=$fill fill-opacity=$opacity />");

    }

    public function drawCarre($p,$width,$height,$fill,$opacity)
    {
        array_push($this->results, "<rect x={$p->getX()} y={$p->getY()}  width=$width height=$height fill=$fill fill-opacity=$opacity />");
    }

    public function drawEllipse($p,$rx,$ry,$fill,$opacity)
    {
        array_push($this->results,"<ellipse cx={$p->getX()} cy={$p->getY()} rx=$rx ry=$ry  fill=$fill opacity=$opacity />");
    }
    public function drawCircle($cx,$cy,$rx,$fill,$opacity)
    {
        array_push($this->results, "<circle cx={$cx->getX()} cy={$cy->getY()} r={$rx->getRayonX()} fill=$fill opacity=$opacity />");
    }
    function drawPolygon($points,$fill,$opacity)
    {
        $ch=implode(', ',$points);
        array_push($this->results, "<polygon points='$ch' fill=$fill fill-opacity=$opacity />");

    }
}