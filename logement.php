<?php

class Logement{
    private $id=null;
    private $destination=null;
    private $hotel=null;
    private $arrivee=null;
    private $depart=null;
    
    function __construct($destination,$hotel,$arrivee,$depart){
    $this->destination=$destination;
   
    $this->hotel=$hotel;
    $this->arrivee=$arrivee;
    $this->depart=$depart;
}
function getId()
{
    return $this->id;
}
function getDestination()
{
    return $this->destination;
}
function getDepart()
{
    return $this->depart;
}
function getHotel()
{
    return $this->hotel;
}
function getArrivee()
{
    return $this->arrivee;
}
function setDestination( $destination)
{
     $this->destination=$destination;
     
}
function setHotel($hotel)
{
    $this->hotel=$hotel;
}
function setDepart($depart)
{
    $this->depart=$depart;
}


function setArrivee($arrivee)
{
    $this->arrivee=$arrivee;
}
}



?>