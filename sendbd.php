<?php
session_start();
include 'conexion.php';
$nombre = $_POST['nombre'];
$reg = $_POST['region'];
$rut = $_POST['rut'];
$apellido = $_POST['apellido'];
$ciudad = $_POST['ciudad'];
$tel = $_POST['telefono'];
$mail = $_POST['mail'];
$boleta = $_POST['boleta'];
$super = $_POST['super'];
$mysql = "insert into usuario (nombre,region,rut,apellido,ciudad,telefono,mail,boleta,super) values ('$nombre','$reg','$rut','$apellido','$ciudad','$tel','$mail','$boleta','$super')";
$insert = $link->query($mysql);
$row = $insert->fetch(PDO::FETCH_ASSOC);
$id = $link->lastInsertId();
  $_SESSION['id']=$id;
header('Location: intro.html');
