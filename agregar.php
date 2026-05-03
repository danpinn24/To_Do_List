<?php
require 'db.php';

if (!empty($_POST['tarea'])) {
    $stmt = $pdo->prepare("INSERT INTO tareas (tarea) VALUES (?)");
    $stmt->execute([$_POST['tarea']]);
}

header("Location: index.php");