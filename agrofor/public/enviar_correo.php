<?php
$nombre=$_POST['name'] ;
$direccion=$_POST['dir'] ;
$correo=$_POST['email'] ;
$numero=$_POST['subject'] ;
$desc=$_POST['message'] ;

//Datos para el $correo
$destinatario="braham.gc@gmail.com";
$asunto="Contacto Agrofor";

$carta="De: $nombre \n";
$carta.="Direccion: $direccion \n";
$carta.="Correo: $correo \n";
$carta.="Numero de hectareas: $numero \n";
$carta.="Descripcion: $desc";
mail($destinatario,$asunto,$carta);
echo "EMAIL ENVIADO...";
//header('Location:welcome.html')
?>
