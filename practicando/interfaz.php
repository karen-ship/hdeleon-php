<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Juego de Adivinanza</title>
</head>
<body>
    <h1>¡Adivina el Número!</h1>
    
    <?php
    session_start();
    
    // Genera un número aleatorio si es la primera vez
    if (!isset($_SESSION['numeroAdivinar'])) {
        $_SESSION['numeroAdivinar'] = rand(1, 100);
    }
    
    $mensaje = "";

    // Verifica si el formulario de intento fue enviado
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['intento'])) {
        $intento = (int)$_POST['intento'];
        $numeroAdivinar = $_SESSION['numeroAdivinar'];

        if ($intento > $numeroAdivinar) {
            $mensaje = "El número es menor.";
        } elseif ($intento < $numeroAdivinar) {
            $mensaje = "El número es mayor.";
        } else {
            $mensaje = "¡Felicidades! Adivinaste el número: $numeroAdivinar";
            // Una vez adivinó, se muestra el botón "Jugar de nuevo"
            $juegoFinalizado = true;
        }
    }

    // Verifica si el formulario de reinicio fue enviado
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['reiniciar'])) {
        // Reinicia el número aleatorio para comenzar un nuevo juego
        unset($_SESSION['numeroAdivinar']);
        header("Location: " . $_SERVER['PHP_SELF']); // Recarga la página para borrar mensajes
        exit;
    }
    ?>

    <!-- Formulario para adivinar el número -->
    <?php if (empty($juegoFinalizado)) : ?>
        <form method="POST">
            <label for="intento">Introduce un número (1-100):</label>
            <input type="number" name="intento" min="1" max="100" required>
            <input type="submit" value="Intentar">
        </form>
    <?php endif; ?>

    <!-- Mensaje de respuesta -->
    <?php if ($mensaje) : ?>
        <p><?= $mensaje ?></p>
    <?php endif; ?>

    <!-- Formulario para jugar de nuevo -->
    <?php if (!empty($juegoFinalizado)) : ?>
        <form method="POST">
            <input type="hidden" name="reiniciar" value="1">
            <input type="submit" value="Jugar de nuevo">
        </form>
    <?php endif; ?>

</body>
</html>
