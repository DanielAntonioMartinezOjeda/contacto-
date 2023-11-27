<!DOCTYPE html>  
<html lang="en">
<head>
    <!-- Resto de tu código para el encabezado -->
</head>
<body>
    <?php
    if (isset($_POST['submit'])) { // Verifica si se ha enviado el formulario

        // Obtiene los datos ingresados en el formulario
        $nombre = $_POST['fullname'];
        $email = $_POST['email'];
        $telefono = $_POST['phone'];
        $motivo = $_POST['affair'];
        $mensaje = $_POST['message'];

        // Puedes realizar cualquier operación con los datos aquí, como almacenarlos en una base de datos, enviar un correo electrónico, etc.
        // En este ejemplo, simplemente los mostraremos en pantalla

        echo "<h2>Datos ingresados:</h2>";
        echo "<p>Nombre: " . $nombre . "</p>";
        echo "<p>Email: " . $email . "</p>";
        echo "<p>Teléfono: " . $telefono . "</p>";
        echo "<p>Motivo: " . $motivo . "</p>";
        echo "<p>Mensaje: " . $mensaje . "</p>";
    }
    ?>
    <!-- Resto de tu código HTML -->
</body>
</html>
