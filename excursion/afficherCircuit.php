<?PHP
	include "CircuitC.php";

	$circuitC=new CircuitC();
	$listeCirc=$circuitC->afficherCircuit();

?>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Afficher Liste Utilisateurs </title>
    </head>
    <body>
    <button><a href="ajouterCircuit.php">Ajouter un circuit</a></button>
		<hr>
		<table border=1 align = 'center'>
		
			<tr>
				<th>Id</th>
				<th>Destination</th>
                <th>Date</th>
                <th>Information</th>
                <th>Tarif</th>
				
			</tr>

			<?PHP
				foreach($listeCirc as $circ){
			?>
				<tr>
					<td><?PHP echo $circ['id']; ?></td>
					<td><?PHP echo $circ['destination']; ?></td>
					<td><?PHP echo $circ['depart']; ?></td>
					<td><?PHP echo $circ['information']; ?></td>
					<td><?PHP echo $circ['tarif']; ?></td>
					<td>
						<form method="POST" action="supprimerCircuit.php">
						<input type="submit" name="supprimer" value="supprimer" onclick="alert('supprission est fait')">
						<input type="hidden" value=<?PHP echo $circ['id']; ?> name="id">
						</form>
						
					</td>
					<td>
						<a href="modifierCircuit.php?id=<?PHP echo $circ['id']; ?>"> Modifier </a>
					</td>
				</tr>
			<?PHP
				}
			?>
		</table>
	</body>
</html>
