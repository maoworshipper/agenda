<?php
try {
    $link = new PDO('mysql:host=localhost;dbname=agendadb;charset=utf8', 'agendausr', '123456');
} 
catch (PDOException $pe) {
    die("No fue posible conectarse a la base de datos - Error: " . $pe->getMessage());
}
?>