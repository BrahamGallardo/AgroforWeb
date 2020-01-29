<?php
include_path 'C:\xampp\php\PEAR';
    require 'PHPMailer/PHPMailerAutoload.php';
    $mail=new PHPMailer;
    $nombre=$_POST['name'] ;
    $direccion=$_POST['dir'] ;
    $correo=$_POST['email'] ;
    $numero=$_POST['subject'] ;
    $desc=$_POST['message'] ;

    //Datos para el $correo
    $destinatario="dunklen.bosen@gmail.com";
    $asunto="Contacto Agrofor";

    $carta="De: $nombre \n";
    $carta.="Direccion: $direccion \n";
    $carta.="Correo: $correo \n";
    $carta.="Numero de hectareas: $numero \n";
    $carta.="Descripcion: $desc";

    mail($destinatario,$asunto,$carta);

    //header('Location:welcome.html')

?>
