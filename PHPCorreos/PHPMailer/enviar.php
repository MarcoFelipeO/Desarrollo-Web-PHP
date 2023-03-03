<?php

require_once("PHPMailer/clsMail.php");

$mailSend = new clsMail();

$bodyHTML = '
    <h2>   Hola, Correo enviado desde PHPMailer       </h2>
    <br>
    <br>
    <br>
    Mensaje Final

';

$mailSend->metEnviar("Titulo, del correo", "Youtube PHPMailer","mafeorellana09@gmail.com","Asunto X");


if($enviado) {
    echo ("Enviado");
  }else{
    echo("No se pudo enviaar el correo");

}



?>