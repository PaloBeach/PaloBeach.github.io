<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $personas = $_POST['personas'];
    $ubicacion = $_POST['ubicacion'];

    $to = "negotiumrevolution@gmail.com";
    $subject = "Nueva reserva en Palo Beach";
    $message = "Se ha recibido una nueva reserva:\n\nFecha: $fecha\nHora: $hora\nNúmero de personas: $personas\nUbicación: $ubicacion";
    $headers = "From: negotiumrevolution@gmail.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "La reserva ha sido enviada con éxito.";
    } else {
        echo "Error al enviar la reserva. Inténtalo de nuevo.";
    }
}
?>