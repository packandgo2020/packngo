<?php
    include 'circuit.php';
    include 'CircuitC.php';

    $error = "";

    // create user
    $c = null;
    $cc = new CircuitC();
    // create an instance of the controller

    if (isset($_POST["btn"]) 
    || isset($_GET['id'])
    ) {
        $c = $cc->recupererCircuit1($_GET['id']);
            $a = new Circuit(
                $c->destination,
                $c->depart,
                $c->information,
                $c->tarif
            );
            echo 'selket';
            $cc->ajoutReservation($a);
            
            header('Location:../index.php');
        }
        else
        {
            $error = "Missing information";
           echo "aaa";
           
        }
   

    
?>