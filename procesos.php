<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado de la inscripción</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="contenedor">

        <div class="logo">
            <img src="https://media.istockphoto.com/id/1499989647/es/vector/fitness-con-barra.jpg?s=612x612&w=0&k=20&c=SY6h_Ost9MpEPifMgr1xmCzcN0m_WLkBzi8I-W2g7HQ=" alt="Logo del gimnasio" class="logo-img" onerror="this.style.display='none'">
        </div>


        <?php
        $nombre   = isset($_GET['nombre']) ? htmlspecialchars($_GET['nombre']) : 'Invitado';
        $edad     = isset($_GET['edad']) ? (int) $_GET['edad'] : 0;
        $objetivo = isset($_GET['objetivo']) ? htmlspecialchars($_GET['objetivo']) : 'mantenimiento';
        $plan     = isset($_GET['plan']) ? htmlspecialchars($_GET['plan']) : 'mensual';

        $precioBase = 15000;
        switch ($plan) {
            case 'trimestral':
                $precioFinal = $precioBase * 3 * 0.90;
                break;
            case 'anual':
                $precioFinal = $precioBase * 12 * 0.75;
                break;
            default:
                $precioFinal = $precioBase;
        }

        if ($objetivo === 'bajar_peso') {
            $rutina = "Cardio + circuitos funcionales.";
        } elseif ($objetivo === 'ganar_masa') {
            $rutina = "Rutina de fuerza.";
        } else {
            $rutina = "Entrenamiento full body.";
        }

        echo "<div class='resultado'>";
        echo "<h2>¡Bienvenido/a, $nombre!</h2>";
        echo "<p class='dato'><strong>Edad:</strong> $edad años</p>";
        echo "<p class='dato'><strong>Plan:</strong> $plan</p>";
        echo "<p class='dato'><strong>Rutina sugerida:</strong> $rutina</p>";
        echo "<p class='precio'>Total a pagar: $" . number_format($precioFinal, 0, ',', '.') . "</p>";
        echo "</div>";
        ?>

        <a class="volver" href="index.php">&larr; Volver al formulario</a>
    </div>
</body>
</html>
