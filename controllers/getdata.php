<?php 
require('../config/dbconex.php'); 

$consulta = "SELECT * FROM contactos";

$datos = "<table><thead><tr><th>Nombres</th><th>Apellidos</th><th>Dirección</th><th>Tel.Trabajo</th><th>Tel.Móvil</th><th>Email</th></tr></thead><tbody>";


    $accion = $link->query($consulta);
    while($contacto = $accion->fetch(PDO::FETCH_ASSOC)){
        $datos .= "<tr><td>".$contacto['nombres']."</td><td>".$contacto['apellidos']."</td><td>".$contacto['direccion']."</td><td>".$contacto['teltrabajo']."</td><td>".$contacto['telmovil']."</td><td>".$contacto['email']."</td></tr>";
    }

    $datos .= "</tbody></table>";
    echo $datos;

?>