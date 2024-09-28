<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
	$nombre = htmlspecialchars($_POST['nombre']);
	$email = htmlspecialchars($_POST['email']);
	$telefono = htmlspecialchars($_POST['telefono']);
	$fecha = htmlspecialchars($_POST['fecha']);
	$hora = htmlspecialchars($_POST['hora']);
	$personas = htmlspecialchars($_POST['personas']);
	
	$para = 'tu_correo@ejemplo.com'; // Cambia esto por tu dirección de correo electrónico
