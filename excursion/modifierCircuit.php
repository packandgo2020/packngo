<?php
    include 'circuit.php';
    include 'CircuitC.php';

	$cc = new CircuitC();
	$error = "";

    if (
        isset($_POST["destination"]) && 
        isset($_POST["depart"]) &&
        isset($_POST["information"])&&
        isset($_POST['tarif']) 
    ) {
        if (
            !empty($_POST["destination"]) && 
            !empty($_POST["depart"]) && 
            !empty($_POST["information"])&&
           !empty($_POST['tarif']) 
        ) {
            $c = new Circuit(
                $_POST['destination'],
                $_POST['depart'], 
                $_POST['information'],
                $_POST['tarif']);
            $cc->modifierCircuit($c,$_GET["id"]); echo'selket';
            //header('Location:afficherCircuit.php');
        }
        else
            $error = "Missing information";
    }


?>
<html>
	<head>
		<title>Modifier Circuit</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<button><a href="afficherCircuit.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
		
		<?php
			if (isset($_GET['id'])){
				$c = $cc->recupererCircuit1($_GET['id']);
				
		?>
		<form  method="POST" action="">
            <table align="center">
                <tr>
                    <td rowspan='3' colspan='1'>Circuit</td>
                    <td>
                        <label for="dest">Destination:
                        </label>
                    </td>
                    <td><input type="text" name="destination" id="destination"  value = "<?php echo $c->destination; ?>"></td>
                </tr>
                <tr>
                    <td>
                        <label for="dep">Depart:
                        </label>
                    </td>
                    <td><input type="date" name="depart" id="depart"  value = "<?php echo $c->depart; ?>"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="info">Information:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="information" id="information"  value = "<?php echo $c->information; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="tarif">Tarif Adultes:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="tarif" id="tarif" value="<?php echo $c->tarif;?>" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="tarif2">Tarif Enfants:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="tarif2" id="tarif2" value="<?php echo $c->tarif2;?>" >
                    </td>
                </tr>
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier" name = "modifer" onclick="alert('modification termine')"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
		<?php
		}
		?>
	</body>
</html>