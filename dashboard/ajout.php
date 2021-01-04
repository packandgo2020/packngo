<?php

if (isset($_POST['btn']))
{

    $conn=mysqli_connect("localhost","root","","projetweb");
    if ($conn)
    {
    echo "connected";
}
    echo $_POST['hotel'];
    echo $_POST['typee'];

$idest =$_POST['dest'];
$hotele =$_POST['hotel'];
$datea =$_POST['arrivee'];
$dep = $_POST['depart'];
$typer =$_POST['typee'];
$filename =$_FILES['avatar'] ['name'];
			 $filetmp =$_FILES['avatar'] ['tmp_name'];
			 $folder ='imge/';
			move_uploaded_file($filetmp,$folder.$filename);

      move_uploaded_file($filetmp,$folder.$filename);
$sql="INSERT INTO `logement`( `destination`, `hotel`, `arrivee`, `depart`, `photo`,`type`) VALUES ('$idest','$hotele','$datea','$dep','$filename','$typer') ";
$qry=mysqli_query($conn,$sql);
header('location:../dashboard/gestionlogemen.php');
}

    
?>