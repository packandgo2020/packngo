<?php
    include 'circuit.php';
    include 'CircuitC.php';

    $error = "";

    // create user
    $c = null;
    $cc = new CircuitC();
    // create an instance of the controller
    
    if (isset($_POST["btn"]) &&
        isset($_POST["dest"]) && 
        isset($_POST["dep"]) &&
        isset($_POST["info"]) &&
        isset($_POST['tarif'])

    ) {
        if (
            !empty($_POST["dest"]) && 
            !empty($_POST["dep"]) && 
            !empty($_POST["info"])&&
            !empty($_POST['tarif']) 

            )
         {
            $c = new Circuit(
                $_POST['dest'],
                $_POST['dep'], 
                $_POST['info'],
                $_POST['tarif']
                );
            echo 'selket';
            $cc->ajouterCircuit($c);
            
            header('Location:../dashboard/gestioncircuit.php');
        }
        else
        {
            $error = "Missing information";
            echo 'alert("missing information")';
           
        }
    }

    
?>