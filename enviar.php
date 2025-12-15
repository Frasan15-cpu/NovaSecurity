<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = strip_tags(trim($_POST["nombre"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $telefono = strip_tags(trim($_POST["telefono"]));
    $mensaje = strip_tags(trim($_POST["mensaje"]));

    $para = "fnoya65@gmail.com"; // <-- tu correo
    $asunto = "Nuevo mensaje desde tu web";
    $cuerpo = "Nombre: $nombre\nEmail: $email\nTeléfono: $telefono\nMensaje:\n$mensaje";

    $cabeceras = "From: $email\r\n";
    $cabeceras .= "Reply-To: $email\r\n";

    if(mail($para, $asunto, $cuerpo, $cabeceras)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
