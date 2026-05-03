<?php
require 'db.php';

if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    
    $stmt = $pdo->prepare("UPDATE tareas SET completada = 1 WHERE id = ?");
    $stmt->execute([$id]);
}

header("Location: index.php");