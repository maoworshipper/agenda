<?php 
require('../config/dbconex.php'); 

extract($_POST);
$consulta = "INSERT INTO contactos (nombres, apellidos, direccion, teltrabajo, telmovil, email) VALUES ('".$nombres."','".$apellidos."','".$direccion."','".$teltrabajo."','".$telmovil."','".$email."')";

try{
    $accion = $link->query($consulta);
    $resultado = $accion->fetch(PDO::FETCH_ASSOC);
    echo "1";
}
catch (PDOException $pe) {
    die("No fue posible guardar la información - Error: " . $pe->getMessage());
}
?>