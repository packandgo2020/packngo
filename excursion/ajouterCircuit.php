<?php
$error = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circuit</title>
</head>
    <body>
        <button><a href="afficherCircuit.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form  method="POST" action="ajout.php">
            <table border="1" align="center">

                <tr>
                    <td rowspan='4' colspan='1'>Circuit</td>
                    <td>
                        <label for="dest">Destination:
                        </label>
                    </td>
                    <td><input type="text" name="dest" id="dest" ></td>
                </tr>
                <tr>
                    <td>
                        <label for="dep">Depart:
                        </label>
                    </td>
                    <td>  <input type="date" name="dep" id="dep" required ></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="info">Information:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="info" id="info" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="tarif">Tarif:
                        </label>
                    </td>
                    <td>  <input type="text" name="tarif" id="tarif" ></td>
                </tr>
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="btn" value="Envoyer" > 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>