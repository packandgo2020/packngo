<?php



    $conn=mysqli_connect("localhost","root","","projetweb-1");
    if ($conn)
    {
    echo "connected";
    $id=$_GET['id'];

$sql="DELETE FROM reservationlog WHERE idreservation=$id";
$qry=mysqli_query($conn,$sql);

}

header('location:gestionreserv.php');
?>