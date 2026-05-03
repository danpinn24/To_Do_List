<?php
// 1. IMPORTAR LA CONEXIÓN
// Traemos el archivo db.php para poder usar la variable $pdo
require_once 'db.php';

// 2. PEDIR LAS TAREAS A LA BASE DE DATOS
// Usamos query() porque es una consulta simple sin datos del usuario
$consulta = $pdo->query("SELECT * FROM tareas ORDER BY id DESC");
$tareas = $consulta->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Lista de Tareas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h1>Pendientes</h1>

        <form action="agregar.php" method="POST" class="todo-header">
            <input type="text" name="tarea" placeholder="¿Qué tienes que hacer hoy?" required>
            <button type="submit">Agregar</button>
        </form>

        <ul class="todo-list">
            <?php if (empty($tareas)): ?>
                <li style="border: none; color: #888;">No hay tareas pendientes. ¡Disfruta tu día!</li>
            <?php endif; ?>

            <?php foreach ($tareas as $t): ?>
                <li class="<?php echo $t['completada'] ? 'completed' : ''; ?>">
                    
                    <span class="task-text">
                        <?php echo $t['tarea']; ?>
                    </span>

                    <div class="actions">
                        <?php if (!$t['completada']): ?>
                            <a href="completar.php?id=<?php echo $t['id']; ?>" class="btn-complete" title="Completar">✓</a>
                        <?php endif; ?>

                        <a href="eliminar.php?id=<?php echo $t['id']; ?>" class="btn-delete" title="Eliminar">✕</a>
                    </div>

                </li>
            <?php endforeach; ?>
        </ul>
    </div>

</body>
</html>