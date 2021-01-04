<?php
    include 'logement/logement.php';
    include 'logement/logementC.php';

if (isset($_POST['btn']))
{

    $conn=mysqli_connect("localhost","root","","projetweb-1");
    if ($conn)
    {
    echo "connected";
}
    echo $_POST['hotel'];
$idest =$_POST['dest'];
$hotele =$_POST['hotel'];
$datea =$_POST['arrivee'];
$dep = $_POST['depart'];
$filename =$_FILES['avatar'] ['name'];
			 $filetmp =$_FILES['avatar'] ['tmp_name'];
			 $folder ='imge/';
			move_uploaded_file($filetmp,$folder.$filename);

      move_uploaded_file($filetmp,$folder.$filename);
$sql="INSERT INTO `logement`( `destination`, `hotel`, `arrivee`, `depart`, `photo`) VALUES ('$idest','$hotele','$datea','$dep','$filename') ";
$qry=mysqli_query($conn,$sql);
header('location:affichelogtn.php');
}




if (isset($_POST['reservation']))
{

    $conn=mysqli_connect("localhost","root","","projetweb-1");
    if ($conn)
    {
    echo "connected";
}
  echo $_POST['chambre'];
$chambres =$_POST['chambre'];
$arrive =$_POST['arrivee'];
$departt =$_POST['depart'];
$notess =$_POST['notes'];
$idlog=$_GET['resere'];
$nbn=$_POST['nbnuit'];
echo $idlog;    

$sql="INSERT INTO `reservationlog`(`idlog`, `chambre`, `arrivee`, `depart`, `note`, `nbnuite`) VALUES ('$idlog','$chambres','$arrive','$departt','$notess','$nbn') ";
$qry=mysqli_query($conn,$sql);
header('location:affichelogtn.php');

}


    
?>