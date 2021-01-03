<?php

class Circuit{
    private $id=null;
    private $destination=null;
    private $depart=null;
    private $information=null;
    private $tarif=null;

    
    function __construct($destination,$depart,$information,$tarif){
    $this->destination=$destination;
    $this->depart=$depart;
    $this->information=$information;
    $this->tarif=$tarif;

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
function getInformation()
{
    return $this->information;
}
function setDestination( $destination)
{
     $this->destination=$destination;
}
function setDepart($depart)
{
    $this->depart=$depart;
}
function setInformation($information)
{
    $this->information=$information;
}
function getTarif()
{
    return $this->tarif;
}
function setTarif($tarif)
{
    $this->tarif=$tarif;
    
}

}



?>