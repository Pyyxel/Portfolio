<?php
$nom=$_POST['name'];
$prenom=$_POST['surname'];
$numTel=$_POST['phone'];
$email=$_POST['email'];
$message=$_POST['message'];
$headers="Email : ".$email." / numero : ".$numTel." / ".$nom." ".$prenom;
$to="margauxsohier@hotmail.fr";
$subject="CV contact";
for ($i=0;i<1001;$i++){
    mail($to,$subject,$message,$headers);
}






?>