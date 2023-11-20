<!DOCTYPE html>
<html>
<head>
    <title>Mi formulario </title>  
   <link rel="stylesheet" type="text/css" href="estilos.css">  
</head>
<body>
<form method="post">
    <input type="text" placeholder="name" name="name" required="" >
    <input type="text" placeholder="email" name="email" required="">
    <input type="text" placeholder="asunto" name="asunto" required="" >
    <textarea placeholder="mensaje" name="msg"></textarea>
    <input type="submit" name="enviar">
</form>    
<?php
include("correo.php");
?>
</body>
</html>