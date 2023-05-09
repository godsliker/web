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
if(mysqli_num_rows($result)==0){
    echo("matricule inexistant");
}else{
$query="DELETE  from etudiant WHERE matricule = $mat";
$result =mysqli_query($con, $query);
echo("bonjour cher ".$nom.' '. $prenom .','.'ayant le matricule'. $mat .' a été supprimé avec succés');
}
?>