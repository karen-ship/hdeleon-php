<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Juego de Adivinanza</title>
</head>
<body>
    <h1>¡Adivina el Número!</h1>
    <form method="POST">
        <label for="intento">Introduce un número (1-100):</label>
        <input type="number" name="intento" min="1" max="100" required>
        <input type="submit" value="Intentar">
    </form>

    <?php
    session_start();
    // Genera un número aleatorio si es la primera vez
    if (!isset($_SESSION['numeroAdivinar'])) {
        $_SESSION['numeroAdivinar'] = rand(1, 100);
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $intento = (int)$_POST['intento'];
        $numeroAdivinar = $_SESSION['numeroAdivinar'];

        if ($intento > $numeroAdivinar) {
            echo "<p>El número es menor.</p>";
        } elseif ($intento < $numeroAdivinar) {
            echo "<p>El número es mayor.</p>";
        } else {
            echo "<p>¡Felicidades! Adivinaste el número: $numeroAdivinar</p>";
            // Reinicia el número aleatorio para otro juego
            unset($_SESSION['numeroAdivinar']);
        }
    }
    ?>
</body>
</html>
