<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inscripción al gimnasio</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="contenedor">

        <div class="logo">
            <img src="https://media.istockphoto.com/id/1499989647/es/vector/fitness-con-barra.jpg?s=612x612&w=0&k=20&c=SY6h_Ost9MpEPifMgr1xmCzcN0m_WLkBzi8I-W2g7HQ=" alt="Logo del gimnasio" class="logo-img" onerror="this.style.display='none'">
        </div>

        <p class="subtitulo">Completá tus datos para inscribirte.</p>

        <form action="procesos.php" method="GET">

            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="edad">Edad</label>
            <input type="number" id="edad" name="edad" min="12" max="99" required>

            <label for="objetivo">Objetivo</label>
            <select id="objetivo" name="objetivo">
                <option value="bajar_peso">Bajar de peso</option>
                <option value="ganar_masa">Ganar masa muscular</option>
                <option value="mantenimiento">Mantenimiento</option>
            </select>

            <label for="plan">Plan</label>
            <select id="plan" name="plan">
                <option value="mensual">Mensual</option>
                <option value="trimestral">Trimestral</option>
                <option value="anual">Anual</option>
            </select>

            <button type="submit">Confirmar inscripción</button>
        </form>
    </div>
</body>
</html>
