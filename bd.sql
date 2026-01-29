CREATE DATABASE visitas_web;
USE visitas_web;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) UNIQUE,
    visitas INT DEFAULT 1
);

CREATE TABLE saludos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    mensaje VARCHAR(100)
);

INSERT INTO saludos (mensaje) VALUES
('¡Qué alegría verte por aquí! 😊'),
('¡Bienvenido de nuevo! 🚀'),
('¡Hola! Gracias por visitarnos 😄'),
('¡Un placer verte otra vez! 👋'),
('¡Esperamos que disfrutes la web! 🌟');
