<?php 
$con=new mysqli('localhost','root','','scolarite');
$nom=$_POST['nom'];
$mat=$_POST['mat'];
$prenom=$_POST['prenom'];
$adress=$_POST['adress'];
$fil=$_POST['fil'];
$email=$_POST['email'];
$date=$_POST['date'];
$query1="SELECT * from etudiant WHERE matricule= $mat";
$result =mysqli_query($con, $query1);
if(mysqli_num_rows($result)>0){
    echo("matricule deja existant");
}else{
$query="INSERT INTO etudiant (matricule, nom, prenom, adresse, date_naissance, email, filiere_id)
VALUES ('$mat', '$nom', '$prenom', '$adress', '$date', '$email', '$fil')";
$result =mysqli_query($con, $query);
echo("bonjour cher ".$nom.' '. $prenom .','.'ayant le matricule'. $mat .' vous etes inscrit');
}
?>