-- 1. Crear la base de datos si no existe
CREATE DATABASE IF NOT EXISTS mi_todo_list CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

-- 2. Seleccionar la base de datos para trabajar en ella
USE mi_todo_list;

-- 3. Crear la tabla de tareas
CREATE TABLE IF NOT EXISTS tareas (
    id INT AUTO_INCREMENT PRIMARY KEY,      -- Identificador único y automático
    tarea VARCHAR(255) NOT NULL,            -- El texto de la tarea (obligatorio)
    completada TINYINT(1) DEFAULT 0,        -- 0 = pendiente, 1 = terminada
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- Fecha automática
) ENGINE=InnoDB;