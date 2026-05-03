<?php

$host = 'localhost';
$dbname = 'mi_todo_list'; // <--- Este nombre debe coincidir con el que pusimos en el SQL
$user = 'root';
$pass = '';

try {
    // Esta línea "abre la puerta" a la base de datos que ya creamos
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass); // Nota: cambié utf8 a utf8mb4 para coincidir con el SQL, es mejor.
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("¡Error fatal en la conexión!: " . $e->getMessage());
}

?>