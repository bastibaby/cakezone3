<?php




$nombre=$_POST['nombre'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$asunto=$_POST['asunto'];
$mensaje=$_POST['mensaje'];

echo $correo. " ". $nombre. " ".$mensaje;

echo"<script>alert ('Enviado correctamente')</script>";
echo"<script> setTimeout (\"location.href='index.html'\",1000)</script>";
    



?>