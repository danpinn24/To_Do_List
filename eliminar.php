<?php
require 'db.php';

// 1. Los datos que enviamos por un enlace (<a>) viajan por $_GET
if (!empty($_GET['id'])) {
    
    // 2. La sintaxis de SQL para borrar es: DELETE FROM tabla WHERE columna = valor
    $stmt = $pdo->prepare("DELETE FROM tareas WHERE id = ?");
    
    // 3. Ejecutamos pasando el ID que recibimos de la URL
    $stmt->execute([$_GET['id']]);
}

// 4. Volvemos al inicio
header("Location: index.php");