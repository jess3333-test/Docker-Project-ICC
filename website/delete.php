<?php

$conn = mysqli_connect('db', 'userdb', 'userdb', 'dockerProjet', 3306);
 

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$nom = mysqli_real_escape_string($conn, $_REQUEST['nom']);


$sql = "DELETE FROM `Personne` WHERE nom='$nom'";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $sql;
}
 

mysqli_close($conn);
echo "<script> location.href='index.php'; </script>";
       exit;
?>
